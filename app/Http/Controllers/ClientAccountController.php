<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientAccountController extends Controller
{
    public function index(){
        return view('client.accountInfo');
    }

    public function passwordChange(){
        return view('client.accountPasswordChange');
    }
    
}