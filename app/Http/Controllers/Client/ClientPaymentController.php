<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Category;
use App\Models\Product;
use App\Models\Brand;

class ClientPaymentController extends Controller
{
    public function index(){
        return view('client.payment');
    }

    public function check(){
        //header, home
        $categoryASC = Category::orderBy('category_id', 'ASC')->get();
        $brandASC = Brand::orderBy('brand_id', 'ASC')->get();

        return view('client.checkpayment')->with(compact(
            'categoryASC',
            'brandASC'
        ));
    }

    public function success(){
        return view('client.successpayment');
    }

    public function history(){
        //header, home
        $categoryASC = Category::orderBy('category_id', 'ASC')->get();
        $brandASC = Brand::orderBy('brand_id', 'ASC')->get();

        return view('client.paymentHistory')->with(compact(
            'categoryASC',
            'brandASC'
        ));
    }
    
}
