<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shipping;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Customer;
use App\Models\Product;
use Brian2694\Toastr\Facades\Toastr;
use RealRashid\SweetAlert\Facades\Alert;

class OrderController extends Controller
{
    public function index()
    {
        $order = Order::join('tbl_customer', 'tbl_order.customer_id', '=', 'tbl_customer.customer_id')
            ->select('tbl_order.*', 'tbl_customer.customer_name')
            ->orderby('order_status', 'ASC')->paginate(5);
        return view('admin.all_order')->with(compact('order'));
    }

    public function show_order($order_id)
    {
        $order_details = OrderDetails::with('product')->where('order_id', $order_id)->get();
        $order = Order::where('order_id', $order_id)->get();
        foreach ($order as $key => $ord) {
            $customer_id = $ord->customer_id;
            $shipping_id = $ord->shipping_id;
            $order_status = $ord->order_status;
        }
        $customer = Customer::where('customer_id', $customer_id)->first();
        $shipping = Shipping::where('shipping_id', $shipping_id)->first();


        return view('admin.detail_order')->with(compact('order_details', 'order', 'customer', 'shipping', 'order_status'));
    }
    // public function view_order($order_code)
    // {
    //     $order_details = OrderDetails::with('product')->where('order_id', $order_id)->get();
    //     $order = Order::where('order_code', $order_code)->get();
    //     foreach ($order as $key => $ord) {
    //         $customer_id = $ord->customer_id;
    //         $shipping_id = $ord->shipping_id;
    //         $order_status = $ord->order_status;
    //     }
    //     $customer = Customer::where('customer_id', $customer_id)->first();
    //     $shipping = Shipping::where('shipping_id', $shipping_id)->first();

    //     $order_details_product = OrderDetails::with('product')->where('order_code', $order_code)->get();


    //     return view('admin.view_order')->with(compact('order_details', 'customer', 'shipping', 'order_details', 'order', 'order_status'));
    // }


    function findorder(Request $request)
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
            $order = Order::join('tbl_customer', 'tbl_order.customer_id', '=', 'tbl_customer.customer_id')
                ->select('tbl_order.*', 'tbl_customer.customer_name')
                ->where(function ($query) use ($search) {
                    $query->where('customer_name', 'like', '%' . $search . '%');
                })->paginate(5);
            $order->appends(['search_query' => $search]);
        } else {
            $order = Order::join('tbl_customer', 'tbl_order.customer_id', '=', 'tbl_customer.customer_id')
                ->select('tbl_order.*', 'tbl_customer.customer_name')
                ->orderby('order_status', 'ASC')->paginate(5);
        }
        return view('admin.all_order')->with('order', $order);
    }

    public function changeStatus(Request $request, Order $order)
    {
        $order = Order::find($request->order_id);
        $pro = Product::find($request->product_quantity);
        // $order->order_status = $request->order_status;
        // if ($request->status) {
        //     $cus->status = 1;
        // } else {
        //     $cus->status = 0;
        // }
        $attr = $request->toArray();
        $order->update($attr);
        // $order->save();
        Toastr::success('Success', 'Thay đổi trạng thái thành công');
        return redirect()->back();
    }
}
