<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
