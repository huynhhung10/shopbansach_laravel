<?php

use App\Http\Controllers\AdminController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;

//Client Controller
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Client\ClientAccountController;
use App\Http\Controllers\Client\ClientCartController;
use App\Http\Controllers\Client\ClientPaymentController;
use App\Http\Controllers\Client\ClientProductDetailController;
use App\Http\Controllers\Client\ClientSellingController;
use App\Http\Controllers\Client\ClientSigningController;

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//frontend
Route::get('/', [ClientController::class, 'index']);

//Chi tiết sản phẩm
Route::get('/pDetail/{product_id}', [ClientController::class, 'viewProduct']);

//Hiển thị những sản phẩm theo danh mục
Route::get('/category/{category_id}', [ClientController::class, 'viewOnCategory']);

Route::get('/category', [ClientController::class, 'viewAllProduct']);
Route::get('/search', [ClientController::class, 'search']);
Route::get('/category/search', [ClientController::class, 'search']);
// Route::get('/category', [ClientSellingController::class, 'index']);

//Thông tin cá nhân
Route::get('/accountInfo/{customer_id}', [ClientAccountController::class, 'index']);
Route::get('/savechange', [ClientAccountController::class, 'savechange']);


//Giỏ hàng
Route::get('/cart', [ClientCartController::class, 'index']);
Route::post('/update-cart-quantity', [ClientCartController::class, 'update_cart_quantity']);
// Route::post('/update-cart', [ClientCartController::class], 'update_cart');
Route::post('/save-cart', [ClientCartController::class, 'save_cart']);
// Route::post('/add-cart-ajax', [ClientCartController::class], 'add_cart_ajax');
Route::get('/show-cart', [ClientCartController::class, 'show_cart']);
// Route::get('/gio-hang', [ClientCartController::class], 'gio_hang');
Route::get('/delete-to-cart/{rowId}', [ClientCartController::class, 'delete_to_cart']);
// Route::get('/del-product/{session_id}', [ClientCartController::class], 'delete_product');
// Route::get('/del-all-product', [ClientCartController::class], 'delete_all_product');

//Thanh toán
Route::get('/payment', [ClientPaymentController::class, 'index']);

//Lịch sử thanh toán
Route::get('/historyPayment', [ClientPaymentController::class, 'history']);

//Đăng nhập / đăng ký
Route::get('/signInSignUp', [ClientSigningController::class, 'index']);
Route::post('/registercustomer', [ClientSigningController::class, 'registercustomer'])->name('checkregis');
Route::post('/login-customer', [ClientSigningController::class, 'logincustomer']);
Route::get('/logout-customer', [ClientSigningController::class, 'logoutcustomer']);

//Thông báo thanh toán thành công
Route::get('/successpayment', [ClientPaymentController::class, 'success']);

//Đổi mật khẩu
Route::get('/accountPasswordChange/{customer_id}', [ClientAccountController::class, 'passwordChange']);


// BackEnd

Auth::routes();

Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware(['guest:admin'])->group(function () {
        Route::post('/check', [AdminController::class, 'checklogin'])->name('check');
        Route::view('/admin_login', 'admin_login')->name('admin_login');
    });
    Route::middleware(['auth:admin'])->group(function () {

        Route::view('/dashboard', 'admin.dashboard')->name('dashboard');
        Route::post('/logout', [AdminController::class, 'logout'])->name('logout');

        //QL sản phẩm
        Route::get('/all-product', [ProductController::class, 'index']);
        Route::get('/add-product', [ProductController::class, 'add_product']);

        //QL NXB
        Route::get('/all-brand', [BrandController::class, 'index']);
        Route::get('/add-brand', [BrandController::class, 'add_brand']);

        //QL loại sản phẩm
        Route::get('/all-category', [CategoryController::class, 'index']);
        Route::get('/add-category', [CategoryController::class, 'add_category']);

        //QL khách hàng
        Route::get('/all-customer', [CustomerController::class, 'index']);
        Route::get('/add-customer', [CustomerController::class, 'add_customer']);
        Route::post('/addcustomer', [CustomerController::class, 'add_customer_button'])->name('checkaddcustomer');
        // Route::get('/edit-customer', [CustomerController::class, 'edit_customer']);
        Route::get('/edit-customer/{customer_id}', [CustomerController::class, 'geteditcustomer']);
        Route::post('posteditcustomer', [CustomerController::class, 'posteditcustomer']);
        Route::get('/delete-customer/{customer_id}', [CustomerController::class, 'deletecustomer']);
        Route::get('/change-status-customer/customer_id={customer_id}&status={status}', [CustomerController::class, 'changeStatus']);
        Route::get('/findcustomer', [CustomerController::class, 'findcustomer'])->name('web.findcustomer');

        //QL user
        Route::get('/all-user', [UserController::class, 'index']);
        Route::get('/add-user', [UserController::class, 'add_user']);

        //QL đơn hàng
        Route::get('/all-order', [OrderController::class, 'index']);
        Route::get('/view-order', [OrderController::class, 'show_order']);
    });
});


// // Route::name('admin.')->namespace('Admin')->prefix('admin')->group(function () {

// //     Route::namespace('Auth')->middleware('guest:admin')->group(function () {
// //         //login route
// //         Route::get('/login', 'LoginController@login')->name('login');
// //         Route::post('/login', 'LoginController@processLogin');
// //     });

// //     Route::namespace('Auth')->middleware('auth:admin')->group(function () {

// //         Route::post('/logout', function () {
// //             Auth::guard('admin')->logout();
// //             return redirect()->action([
// //                 LoginController::class,
// //                 'login'
// //             ]);
// //         })->name('logout');
// //     });
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
