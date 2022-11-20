<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Category;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Customer;
use Brian2694\Toastr\Facades\Toastr;
use RealRashid\SweetAlert\Facades\Alert;

class ClientAccountController extends Controller
{
    public function index(Request $request)
    {
        //header, home
        $categoryASC = Category::orderBy('category_id', 'ASC')->get();
        $brandASC = Brand::orderBy('brand_id', 'ASC')->get();

        $cus = Customer::find($request->customer_id);
        return view('client.accountInfo', ['customer' => $cus])->with(compact(
            'categoryASC',
            'brandASC'
        ));
    }

    public function passwordChange(Request $request)
    {
        //header, home
        $categoryASC = Category::orderBy('category_id', 'ASC')->get();
        $brandASC = Brand::orderBy('brand_id', 'ASC')->get();

        $cus = Customer::find($request->customer_id);
        Toastr::success('Success', 'Thay đổi password thành công!');
        return view('client.accountPasswordChange', ['customer' => $cus])->with(compact(
            'categoryASC',
            'brandASC',
        ));
    }
    public function savechange(Request $request)
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

        $cus->customer_phone = $request->customer_phone;
        // if ($request->status) {
        //     $cus->status = 1;
        // } else {
        //     $cus->status = 0;
        // }
        $cus->save();
        Toastr::success('Success', 'Chỉnh sửa thông tin thành công!');
        return back();
    }
}
