<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientSellingController extends Controller
{
    public function index(){
        return view('client.selling');
    }
    
}
