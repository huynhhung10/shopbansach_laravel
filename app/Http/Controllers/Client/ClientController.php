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
        $productASC4 = Product::with('category')->orderBy('product_id', 'ASC')->limit(4)->get();
        $productDESC4 = Product::with('category')->orderBy('product_id', 'DESC')->limit(4)->get();
        $productASC8 = Product::with('category')->orderBy('product_id', 'ASC')->limit(8)->get();

        return view('client.home')->with(compact(
            'categoryASC',
            'productASC4', 
            'productDESC4',
            'productASC8',
        ));
    }

    public function viewAllProduct(){
        $categoryASC = Category::orderBy('category_id', 'ASC')->get();
        $productASC6 = Product::orderBy('product_id', 'ASC')->paginate(6);
        return view('client.selling')->with(compact(
            'categoryASC',
            'productASC6',
        ));
    }

    public function viewOnCategory($category_id){
        $categoryASC = Category::orderBy('category_id', 'ASC')->get();
        $productASC6 = Product::orderBy('product_id', 'ASC')->where('category_id', $category_id)->paginate(6);

        return view('client.selling')->with(compact(
            'categoryASC',
            'productASC6',
        ));
    }

    public function viewProduct($product_id){
        $categoryASC = Category::orderBy('category_id', 'ASC')->get();
        $product = Product::orderBy('product_id', 'ASC')->where('product_id', $product_id)->first();

        return view('client.productDetail')->with(compact(
            'categoryASC',
            'product',
        ));
    }
    
}
