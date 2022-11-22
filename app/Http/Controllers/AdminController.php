<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Admin;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Shipping;
use App\Models\Customer;
use App\Models\Category;
use App\Models\Product;
use App\Models\Brand;
use PHPOpenSourceSaver\JWTAuth\Claims\Custom;

class AdminController extends Controller
{

    // public function index()
    // {
    //     return view('admin_login');
    // }
    public function index1()

    {
        $products = Product::count();
        $order = Order::count();
        $customers = Customer::count();
        $orderstatus = Product::sum('product_quantity');
        return view('admin.dashboard')->with(compact('products', 'order', 'customers', 'orderstatus'));
    }


    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    // /**
    //  * show dashboard.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function index()
    // {
    //     return view('admin_layout');
    // }


    function checklogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:tbl_admin,email',
            'password' => 'required|min:1|max:30'
        ], [
            'email.exists' => 'This email is not exists in admins table'
        ]);
        $products = Product::count();

        $creds = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('admin/viewdashboard');
        } else {
            Alert::error('error', 'email hoặc password sai');
            return redirect()->route('admin.admin_login');
        }
        echo '123';
    }


    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    //     $this->middleware('guest:admin')->except('logout');
    //     $this->middleware('guest:user')->except('logout');
    // }


    // public function showAdminLoginForm()
    // {
    //     return view('admin.admin_login', ['url' => 'admin']);
    // }

    // public function adminLogin(Request $request)
    // {
    //     $this->validate($request, [
    //         'admin_email'   => 'required|email',
    //         'admin_password' => 'required|min:1'
    //     ]);

    //     if (Auth::guard('admin')->attempt(['admin_email' => $request->email, 'admin_password' => $request->password])) {

    //         return redirect()->intended('/admin');
    //     }
    //     return back()->withInput($request->only('admin_email'));
    // }








    function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin/admin_login');
    }


    public function countdashboard()
    {

        $product = Product::all()->count();
        $order = Order::all()->count();
        $brand = Brand::all()->count();
        $customers = Customer::all()->count();
        
        return view(
            'admin.dashboard',           
        )->with(compact('product', 'order', 'brand','customers'));

    }
}
