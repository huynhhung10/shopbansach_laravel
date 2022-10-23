<?php
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ClientSellingController;
use App\Http\Controllers\ClientProductDetailController;
use App\Http\Controllers\ClientCartController;
use App\Http\Controllers\ClientPaymentController;
use App\Http\Controllers\ClientSigningController;
use App\Http\Controllers\ClientAccountController;


use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;


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
Route::get('/',[ClientController::class, 'index']);

//Chi tiết sản phẩm
Route::get('/pDetail',[ClientProductDetailController::class, 'index']);

//Hiển thị những sản phẩm theo danh mục
Route::get('/selling',[ClientSellingController::class, 'index']);

//Thông tin cá nhân
Route::get('/accountInfo',[ClientAccountController::class, 'index']);

//Giỏ hàng
Route::get('/cart',[ClientCartController::class, 'index']);

//Thanh toán
Route::get('/payment',[ClientPaymentController::class, 'index']);

//Lịch sử thanh toán
Route::get('/historyPayment',[ClientPaymentController::class, 'history']);

//Đăng nhập / đăng ký
Route::get('/signInSignUp',[ClientSigningController::class, 'index']);

//Thông báo thanh toán thành công
Route::get('/successpayment',[ClientPaymentController::class, 'success']);








// BackEnd
Route::get('/admin',[AdminController::class, 'index']);
Route::get('/dashboard',[AdminController::class, 'show_dashboard']);
Route::post('/admin-dashboard',[AdminController::class, 'dashboard']);



//QL sản phẩm
Route::get('/all-product',[ProductController::class, 'index']);
Route::get('/add-product',[ProductController::class, 'add_product']);

//QL NXB
Route::get('/all-brand',[BrandController::class, 'index']);
Route::get('/add-brand',[BrandController::class, 'add_brand']);

//QL loại sản phẩm
Route::get('/all-category',[CategoryController::class, 'index']);
Route::get('/add-category',[CategoryController::class, 'add_category']);

//QL khách hàng
Route::get('/all-customer',[CustomerController::class, 'index']);
Route::get('/add-customer',[CustomerController::class, 'add_customer']);

//QL user
Route::get('/all-user',[UserController::class, 'index']);
Route::get('/add-user',[UserController::class, 'add_user']);

//QL đơn hàng
Route::get('/all-order',[OrderController::class, 'index']);
Route::get('/view-order',[OrderController::class, 'show_order']);


