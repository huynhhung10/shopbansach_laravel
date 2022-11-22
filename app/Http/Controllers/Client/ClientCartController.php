<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use Cart;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Brian2694\Toastr\Facades\Toastr;
use RealRashid\SweetAlert\Facades\Alert;

session_start();

class ClientCartController extends Controller
{
    public function index()
    {
        //header, home
        $categoryASC = Category::orderBy('category_id', 'ASC')->where('status', 1)->get();
        $brandASC = Brand::orderBy('brand_id', 'ASC')->get();

        return view('client.cart')->with(compact(
            'categoryASC',
            'brandASC',
        ));;
    }


    public function delete_all_product()
    {
        $cart = Session::get('cart');
        if ($cart == true) {
            // Session::destroy();
            Session::forget('cart');
            Session::forget('coupon');
            return redirect()->back()->with('message', 'Xóa hết giỏ thành công');
        }
    }
    public function save_cart(Request $request)
    {
        $productId = $request->productid_hidden;
        $quantity = $request->qty;
        $cate_product = DB::table('tbl_category')->where('status', '0')->orderby('category_id', 'desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status', '0')->orderby('brand_id', 'desc')->get();
        $product_info = DB::table('tbl_product')->where('product_id', $productId)->first();

        // Cart::add('293ad', 'Product 1', 1, 9.99, 550);
        // Cart::destroy();
        $data['id'] = $product_info->product_id;
        $data['qty'] = $quantity;
        $data['name'] = $product_info->product_name;
        $data['price'] = $product_info->product_price;
        $data['weight'] = $product_info->product_price;
        $data['options']['image'] = $product_info->product_img;

        if (Cart::count($data) < 15) {
            Cart::add($data);
            Toastr::success('Success', 'bạn vừa thêm vào sản phẩm giỏ hàng!');
            return back()->with('categoryASC', $cate_product)->with('brand', $brand_product);;
        }
        Toastr::error('Error', 'Không thể mua thêm nữa!');
        return back();
    }
    public function show_cart()
    {
        //seo 
        $cate_product = DB::table('tbl_category')->where('status', '1')->orderby('category_id', 'desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status', '1')->orderby('brand_id', 'desc')->get();
        return view('client.cart')->with('categoryASC', $cate_product)
            ->with('brand', $brand_product)
            ->with('brandASC', $brand_product);
    }
    public function delete_to_cart($rowId)
    {
        Cart::update($rowId, 0);
        Toastr::success('Success', 'Xóa sản phẩm trong giỏ thành công!');
        return Redirect::to('/show-cart');
    }
    public function update_cart_quantity(Request $request)
    {
        $rowId = $request->rowId_cart;
        $qty = $request->cart_quantity;
        Cart::update($rowId, $qty);
        Toastr::success('Success', 'Thay đổi số lượng thành công!');
        return Redirect::to('/show-cart');
    }
}
