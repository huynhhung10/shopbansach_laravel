<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Category;
use App\Models\Product;

class ClientPaymentController extends Controller
{
    public function index(){
        return view('client.payment');
    }

    public function check(){
        $categoryASC = Category::orderBy('category_id', 'ASC')->get();
        return view('client.checkpayment')->with(compact(
            'categoryASC'
        ));
    }

    public function success(){
        return view('client.successpayment');
    }

    public function history(){
        $categoryASC = Category::orderBy('category_id', 'ASC')->get();
        return view('client.paymentHistory')->with(compact(
            'categoryASC'
        ));
    }
    
}
