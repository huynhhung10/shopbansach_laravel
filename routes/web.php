<?php

use App\Http\Controllers\AdminController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
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

Route::get('/', function () {
    return view('welcome');
});




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
