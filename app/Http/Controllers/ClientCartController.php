<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientCartController extends Controller
{
    public function index(){
        return view('client.cart');
    }
    
}
