<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use DB;
use Brian2694\Toastr\Facades\Toastr;
use RealRashid\SweetAlert\Facades\Alert;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
        // $search = $request['search'] ?? "";
        // if($search != ""){
        //     $customers = Customer::where('')
        // }
        $customers = Customer::orderBy('created_at', 'DESC')->paginate(5); //instead SQL select * from categories
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
        Toastr::success('Success', 'Xóa thành công!');
        return redirect('admin/all-customer');
    }
    public function posteditcustomer(Request $request)
    {


        $cus = Customer::find($request->customer_id);
        if ($request->file('avatar') != null) {
            $file = $request->file('avatar');
            $filename = $file->getClientOriginalName('avatar');
            $file->move('backend/assets/img/avatars', $filename);
            $cus->customer_avatar = $filename;
        }

        $cus->customer_name = $request->customer_name;
        $cus->customer_username = $request->customer_username;

        $cus->email = $request->email;
        $cus->password = \Hash::make($request->password);

        $cus->customer_phone = $request->customer_phone;
        if ($request->status) {
            $cus->status = 1;
        } else {
            $cus->status = 0;
        }
        $cus->save();
        // Alert::success('Success Title', 'Success Message');
        Toastr::success('Success', 'Chỉnh sửa thành công!');
        // @include('sweetalert::alert')
        return redirect('admin/all-customer');
    }
    public function add_customer_button(Request $request)
    {
        $request->validate([
            'customer_name' => 'required',
            'customer_username' => 'required|unique:tbl_customer,customer_username',
            'email' => 'required|email|unique:tbl_customer,email',
            'password' => 'required|min:8|max:32',
            'avatar' => 'required',
            'customer_phone' => 'required|numeric|digits:10|regex:/^(09[0-9\s\-\+\(\)]*)$/'
        ]);

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
        $cus->password = \Hash::make($request->password);
        $cus->customer_phone = $request->customer_phone;
        if ($request->status) {
            $cus->status = 1;
        } else {
            $cus->status = 0;
        }

        $cus->save();
        Toastr::success('Success', 'Thêm khách hàng thành công!');
        // @include('sweetalert::alert')
        return redirect('admin/all-customer');
    }
    public function changeStatus($customer_id, $status)
    {
        $cus = Customer::find($customer_id);
        $cus->status = $status;

        $cus->save();
        return response()->json(['status' => 'success', 'trangthai' => $cus->status]);
    }

    function findcustomer(Request $request)
    {
        // $request->validate([
        //     'search_query' => 'required|min:1'
        // ]);

        // $search_text = $request->input('search_query');

        // $customers = DB::table('tbl_customer')
        //     ->where('customer_username', 'LIKE', '%' . $search_text . '%')
        //     //   ->orWhere('SurfaceArea','<', 10)
        //     ->orWhere('email', 'like', '%' . $search_text . '%')
        //     ->paginate(2);
        // // return view('search', ['countries' => $countries]);
        // return view('admin.all_customer')->with('customers', $customers);
        $search = $request->get('search_query');
        if ($search != '') {
            $customers = Customer::where(function ($query) use ($search) {
                $query->where('customer_username', 'like', '%' . $search . '%');
            })->paginate(5);
            $customers->appends(['search_query' => $search]);
        } else {
            $customers = Customer::orderBy('created_at', 'DESC')->paginate(5);
        }
        return view('admin.all_customer')->with('customers', $customers);
    }
}
