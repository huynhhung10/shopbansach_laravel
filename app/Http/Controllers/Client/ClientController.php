<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use PhpParser\Node\Expr\Cast;

class ClientController extends Controller
{
    

    public function index(){
        //header, home
        $categoryASC = Category::orderBy('category_id', 'ASC')->get();

        //home
        $productASC4 = Product::orderBy('product_id', 'ASC')->limit(4)->get();
        $productDESC4 = Product::orderBy('product_id', 'DESC')->limit(4)->get();
        $productASC8 = Product::orderBy('product_id', 'ASC')->limit(8)->get();


        return view('client.home')->with(compact(
            'categoryASC',
            'productASC4', 
            'productDESC4',
            'productASC8'
        ));
    }
    
}
