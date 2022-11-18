<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;
use Cart;
use App\Models\Category;
use App\Models\Product;
use App\Models\Shipping;
use Illuminate\Support\Facades\Redirect;

session_start();
class ClientPaymentController extends Controller
{
    public function index()
    {
        return view('client.payment');
    }

    public function check()
    {
        $categoryASC = Category::orderBy('category_id', 'ASC')->get();
        return view('client.checkpayment')->with(compact(
            'categoryASC'
        ));
    }

    public function success()
    {
        return view('client.successpayment');
    }

    public function history()
    {
        $categoryASC = Category::orderBy('category_id', 'ASC')->get();
        return view('client.paymentHistory')->with(compact(
            'categoryASC'
        ));
    }
    public function save_checkout_customer(Request $request)
    {
        $data = array();
        $data['shipping_name'] = $request->shipping_name;
        $data['shipping_phone'] = $request->shipping_phone;
        $data['shipping_email'] = $request->shipping_email;

        $data['shipping_address'] = $request->shipping_address;
        $shipping_id = DB::table('tbl_shipping')->insertGetId($data);

        Session::put('shipping_id', $shipping_id);

        return Redirect::to('/checkpayment');
    }
    public function checkpayment()
    {
        $cate_product = DB::table('tbl_category')->where('status', '0')->orderby('category_id', 'desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status', '0')->orderby('brand_id', 'desc')->get();

        return view('client.checkpayment')->with('categoryASC', $cate_product)->with('brand', $brand_product);
    }
    public function order_save(Request $request)
    {

        $data = array();
        $data['payment_method'] = $request->payment_method;
        $data['payment_status'] = '1';
        $payment_id = DB::table('tbl_payment')->insertGetId($data);

        //insert order
        $order_data = array();
        $order_data['customer_id'] =  auth('customer')->user()->customer_id;
        $order_data['shipping_id'] = Session::get('shipping_id');
        $order_data['payment_id'] = $payment_id;
        $order_data['order_total'] = Cart::total();
        $order_data['order_status'] = '1';
        $order_id = DB::table('tbl_order')->insertGetId($order_data);

        //insert order_details
        $content = Cart::content();
        foreach ($content as $v_content) {
            $order_d_data['order_id'] = $order_id;
            $order_d_data['product_id'] = $v_content->id;
            $order_d_data['product_name'] = $v_content->name;

            $order_d_data['product_price'] = $v_content->price;
            $order_d_data['product_sales_quantity'] = $v_content->qty;
            $order_d_data['product_img'] = $v_content->options;
            DB::table('tbl_order_details')->insert($order_d_data);
            $pro = Product::find($order_d_data['product_id']);
            $pro->decrement('product_quantity', $order_d_data['product_sales_quantity']);

            // DB::table('tbl_product') - insert($order_d_data['product_sales_quantity']);
        }
        if ($data['payment_method'] == 1) {

            return view('client.successpayment');
        } else {
            return back();
        }

        //return Redirect::to('/payment');
    }
}
