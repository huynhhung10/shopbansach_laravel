<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClientSellingController extends Controller
{
    public function index(){
        return view('client.selling');
    }
    
}
