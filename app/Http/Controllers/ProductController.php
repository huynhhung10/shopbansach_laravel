<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('admin.all_product');
    }

    public function add_product(){
        return view('admin.add_product');
    }
}
