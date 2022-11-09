<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use DB;

session_start();

class ClientSigningController extends Controller
{
    public function index()
    {
        return view('client.signInSignUp');
    }
    public function registercustomer(Request $request)
    {

        // validate form fields
        $request->validate([
            'customer_name' => 'required',
            'customer_username' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:1',
            'confirm_password' => 'required|same:password',
            'customer_phone' => 'required|max:10'
        ]);


        // if validation success then create an input array
        $inputArray = array(
            'customer_avatar' => $request->customer_avatar = 1,
            'customer_name' => $request->customer_name,
            'customer_username' => $request->customer_username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'customer_phone' => $request->customer_phone


        );

        // register user
        $customer = Customer::create($inputArray);

        // if registration success then return with success message
        if (!is_null($customer)) {
            return back()->with('success', 'Đăng ký thành công.');
        }

        // else return with error message
        else {
            return back()->with('error', 'Whoops! some error encountered. Please try again.');
        }
    }


    public function logincustomer(Request $request)
    {
        // $request->validate([
        //     'customer_username' => 'required',
        //     'password' => 'required|min:1',

        // ]);
        $username = $request->account_username;
        $password = $request->account_password;
        $result = DB::table('tbl_customer')->where('customer_username', $username)->where('password', $password)->first();


        if ($result) {

            Session::put('customer_id', $result->customer_id);
            return Redirect::to('/');
        } else {
            return back()->with('error', 'email hoặc password sai');
            // echo '123';
        }
        Session::save();
    }

    public function logoutcustomer()
    {
        Session::forget('customer_id');
        return Redirect::to('/');
    }
}
