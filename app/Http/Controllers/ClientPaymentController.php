<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientPaymentController extends Controller
{
    public function index(){
        return view('client.payment');
    }

    public function success(){
        return view('client.successpayment');
    }

    public function history(){
        return view('client.paymentHistory');
    }
    
}
