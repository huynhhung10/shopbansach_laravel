<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Category;
use App\Models\Product;


class ClientSellingController extends Controller
{
    public function index()
    {
        //header, home
        $categoryASC = Category::orderBy('category_id', 'ASC')->where('status', 1)->get();
        $productASC6 = Product::orderBy('product_id', 'ASC')->limit(6)->get();

        return view('client.selling')->with(compact(
            'categoryASC',
            'productASC6'
        ));
    }
}
