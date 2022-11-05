<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Category;
use App\Models\Product;

class ClientSellingController extends Controller
{
    public function index(){
        //header, home
        $categoryASC = Category::orderBy('category_id', 'ASC')->get();

        $productASC6 = Product::all();

        return view('client.selling')->with(compact(
            'categoryASC',
            'productASC6'
        ));
    }
    
}
