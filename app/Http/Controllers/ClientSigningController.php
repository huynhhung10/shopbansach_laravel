<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientSigningController extends Controller
{
    public function index(){
        return view('client.signInSignUp');
    }
    
}
