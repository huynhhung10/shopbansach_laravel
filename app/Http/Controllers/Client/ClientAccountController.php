<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClientAccountController extends Controller
{
    public function index(){
        return view('client.accountInfo');
    }

    public function passwordChange(){
        return view('client.accountPasswordChange');
    }
    
}
