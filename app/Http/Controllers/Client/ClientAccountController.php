<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Category;
use App\Models\Product;
use App\Models\Customer;

class ClientAccountController extends Controller
{
    public function index(Request $request)
    {
        $categoryASC = Category::orderBy('category_id', 'ASC')->get();
        $cus = Customer::find($request->customer_id);
        return view('client.accountInfo', ['customer' => $cus])->with(compact('categoryASC',));
    }

    public function passwordChange(Request $request)
    {
        $categoryASC = Category::orderBy('category_id', 'ASC')->get();
        $cus = Customer::find($request->customer_id);

        return view('client.accountPasswordChange', ['customer' => $cus])->with(compact(
            'categoryASC'
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

        return back()->with('edit-success', 'Lưu thành công!!!');
    }
}
