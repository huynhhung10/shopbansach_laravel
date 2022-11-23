<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use DB;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use RealRashid\SweetAlert\Facades\Alert;

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
            'customer_username' => 'required|unique:tbl_customer,customer_username',
            'email' => 'required|email|unique:tbl_customer,email',
            'password' => 'required|min:8|max:32',
            'confirm_password' => 'required|same:password',
            'customer_phone' => 'required|numeric|digits:10|regex:/^(09[0-9\s\-\+\(\)]*)$/'
        ]);


        // if validation success then create an input array
        $inputArray = array(
            'customer_avatar' => $request->customer_avatar = 1,
            'customer_name' => $request->customer_name,
            'customer_username' => $request->customer_username,
            'email' => $request->email,

            'password' => \Hash::make($request->password),
            'customer_phone' => $request->customer_phone


        );

        // register user
        $customer = Customer::create($inputArray);

        // if registration success then return with success message
        if (!is_null($customer)) {
            Alert::success('Success', 'Đăng ký thành công.');
            return back();
        }

        // else return with error message
        else {
            Alert::error('Error', 'Đăng ký thất baị, kiểm tra lại thông tin.');
            return back();
        }
    }

    // public function __construct()
    // {

    //     $this->middleware('guest:customer')->except('logout');
    // }
    public function logincustomer(Request $request)
    {
        // // $request->validate([
        // //     'customer_username' => 'required',
        // //     'password' => 'required|min:1',

        // // ]);
        // $username = $request->account_username;
        // $password = $request->account_password;
        // $result = DB::table('tbl_customer')->where('customer_username', $username)->where('password', $password)->first();


        // if ($result) {

        //     Session::put('customer_id', $result->customer_id);
        //     Session::put('customer_name', $result->customer_name);
        //     return Redirect::to('/');
        // } else {
        //     return back()->with('error', 'email hoặc password sai');
        //     // echo '123';
        // }
        // Session::save();




        $request->validate([
            'email' => 'required|email|exists:tbl_customer,email',
            'password' => 'required|min:8|max:32'
        ], [
            'email.exists' => 'Email naỳ không tồn taị'
        ]);

        $creds = $request->only('email', 'password');


        if (Auth::guard('customer')->attempt(['email' => $request->email, 'password' => $request->password, 'status' => '0'])) {
            Alert::success('Đăng nhập thành công', 'Bạn giờ đây có thể mua hàng.');
            return Redirect::to('/');
        } else {

            Alert::error('Error', 'email hoặc password sai');
            return back();
        }
    }


    public function logoutcustomer()
    {
        Auth::guard('customer')->logout();
        return Redirect::to('/');
    }
}
