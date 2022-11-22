<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use RealRashid\SweetAlert\Facades\Alert;
use DB;
use Session;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Shipping;
use App\Models\Customer;
use Cart;
use App\Models\Category;
use App\Models\Product;
use App\Models\Brand;

session_start();
class ClientPaymentController extends Controller
{
    public function index()
    {
        return view('client.payment');
    }

    public function check()
    {
        //header, home
        $categoryASC = Category::orderBy('category_id', 'ASC')->get();
        $brandASC = Brand::orderBy('brand_id', 'ASC')->get();

        return view('client.checkpayment')->with(compact(
            'categoryASC',
            'brandASC'
        ));
    }

    public function success()
    {
        return view('client.successpayment');
    }

    // public function history()
    // {
    //     //header, home
    //     $categoryASC = Category::orderBy('category_id', 'ASC')->get();
    //     $brandASC = Brand::orderBy('brand_id', 'ASC')->get();

    //     return view('client.orderHistory')->with(compact(
    //         'categoryASC',
    //         'brandASC'
    //     ));
    // }

    public function show_customer_order(Request $request)
    {
        $categoryASC = Category::orderBy('category_id', 'ASC')->get();
        $brandASC = Brand::orderBy('brand_id', 'ASC')->get();
        $customer = Customer::find($request->customer_id);

        $order = Order::join('tbl_customer', 'tbl_order.customer_id', '=', 'tbl_customer.customer_id')
            ->select('tbl_order.*', 'tbl_customer.customer_name', 'tbl_customer.customer_id')
            ->where('tbl_customer.customer_id', '=', auth('customer')->user()->customer_id)
            ->orderby('order_status', 'ASC')->paginate(5);
        return view('client.orderHistory')->with(compact('order', 'categoryASC', 'brandASC', 'customer'));
    }

    public function show_customer_order_details($order_id)
    {
        $categoryASC = Category::orderBy('category_id', 'ASC')->get();
        $brandASC = Brand::orderBy('brand_id', 'ASC')->get();
        $order_details = OrderDetails::with('product')->where('order_id', $order_id)->get();
        $order = Order::where('order_id', $order_id)->get();
        foreach ($order as $key => $ord) {
            $customer_id = $ord->customer_id;
            $shipping_id = $ord->shipping_id;
            $shipping_name = $ord->shipping_name;
            $order_status = $ord->order_status;
        }
        $customer = Customer::where('customer_id', $customer_id)->first();
        $shipping = Shipping::where('shipping_id', $shipping_id)->first();


        return view('client.paymentDetail')->with(compact('order_details', 'order', 'customer', 'shipping', 'order_status', 'categoryASC', 'brandASC'));
    }
    // public function detail()
    // {
    //     //header, home
    //     $categoryASC = Category::orderBy('category_id', 'ASC')->get();
    //     $brandASC = Brand::orderBy('brand_id', 'ASC')->get();

    //     return view('client.paymentDetail')->with(compact(
    //         'categoryASC',
    //         'brandASC'
    //     ));
    // }

    public function save_checkout_customer(Request $request)
    {
        $request->validate([
            'shipping_name' => 'required',
            'shipping_phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'shipping_email' => 'required|email',
            'shipping_address' => 'required',

        ]);

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


        return view('client.checkpayment')->with('categoryASC', $cate_product)->with('brandASC', $brand_product);
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
            Toastr::error('Error', 'Hình thức thanh toán không hợp lệ!');
            return back();
        }

        //return Redirect::to('/payment');
    }
}
