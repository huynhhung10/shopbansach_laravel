<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
        // $search = $request['search'] ?? "";
        // if($search != ""){
        //     $customers = Customer::where('')
        // }
        $customers = Customer::paginate(2); //instead SQL select * from categories
        return view('admin.all_customer')->with('customers', $customers);


        // return view('admin.all_customer');
    }

    // them khach hang
    public function add_customer()
    {
        return view('admin.add_customer');
    }

    public function edit_customer()
    {
        return view('admin.edit_customer');
    }

    public function geteditcustomer($customer_id)
    {
        $cus = Customer::find($customer_id);
        return view('admin.edit_customer', ['customer' => $cus]);
        // $edit_customer = Customer::where('customer_id', $customer_id)->get();
        // $manager_customer  = view('admin.edit_customer')->with('edit_customer', $edit_customer);

        // return view('admin_layout')->with('admin.edit_customer', $cus);
    }
    public function deletecustomer($customer_id)
    {
        $cus = Customer::find($customer_id);
        $cus->delete();
        return redirect('admin/all-customer')->with('delete-success', 'Xóa thành công!!!');
    }
    public function posteditcustomer(Request $request)
    {

        $cus = Customer::find($request->customer_id);
        if ($request->file('avatar') != null) {
            $file = $request->file('avatar');
            $filename = $file->getClientOriginalName('avatar');
            $file->move('backend/assets/img/avatars', $filename);
            $cus->Avatar = $filename;
        }

        $cus->customer_name = $request->customer_name;
        $cus->customer_username = $request->customer_username;

        $cus->email = $request->email;
        $cus->password = $request->password;
        $cus->customer_phone = $request->customer_phone;
        if ($request->status) {
            $cus->status = 1;
        } else {
            $cus->status = 0;
        }
        $cus->save();

        return redirect('admin/all-customer')->with('edit-success', 'Sửa thành công!!!');
    }
    public function add_customer_button(Request $request)
    {
        // $request->validate([
        //     'customer_name' => 'required',
        //     'customer_username' => 'required',
        //     'customer_email' => 'required|email',
        //     'customer_password' => 'required|min:1',
        //     'confirm_password' => 'required|same:customer_password',
        //     'customer_phone' => 'required|max:10'
        // ]);

        // $input = $request->all();

        // if validation success then create an input array
        // $inputArray = array(
        //     'customer_name' => $request->customer_name,
        //     'customer_username' => $request->customer_username,
        //     'customer_email' => $request->customer_email,
        //     'customer_password' => Hash::make($request->customer_password),
        //     'customer_phone' => $request->customer_phone
        // );

        // // register user
        // $customer = Customer::create($inputArray);

        // // if registration success then return with success message
        // if (!is_null($customer)) {
        //     return back()->with('success', 'Tao thành công.');
        // }

        // // else return with error message
        // else {
        //     return back()->with('error', 'Whoops! some error encountered. Please try again.');
        // }

        $cus = new Customer();
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $filename = $file->getClientOriginalName('avatar');
            $file->move('backend/assets/img/avatars', $filename);
            $cus->customer_avatar = $filename;
        }

        $cus->customer_name = $request->customer_name;
        $cus->customer_username = $request->customer_username;

        $cus->email = $request->email;
        $cus->password = $request->password;
        $cus->customer_phone = $request->customer_phone;
        if ($request->status) {
            $cus->status = 1;
        } else {
            $cus->status = 0;
        }
        $cus->save();
        return redirect()->back()->with('success', 'Thêm vào thành công!');
    }
    public function changeStatus($customer_id, $status)
    {
        $cus = Customer::find($customer_id);
        $cus->status = $status;
        $cus->save();
        return response()->json(['status' => 'success', 'trangthai' => $cus->status]);
    }
}
