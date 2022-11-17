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
        $productASC6 = Product::with('category')->orderBy('product_id', 'ASC')->paginate(6);
        $cateName = 'Tất cả';
        return view('client.selling')->with(compact(
            'categoryASC',
            'productASC6',
            'cateName'
        ));
    }

    public function viewOnCategory($category_id){
        $categoryASC = Category::orderBy('category_id', 'ASC')->get();
        $productASC6 = Product::with('category')->orderBy('product_id', 'ASC')->where('category_id', $category_id)->paginate(6);
        $cateName = 'search';
        if($category_id != 'search'){
            $cateName = $categoryASC->where('category_id', $category_id)->first()->category_name;
            return view('client.selling')->with(compact(
                'categoryASC',
                'productASC6',
                'cateName'
            ));
        }
        return $this->search();
        
    }

    public function viewProduct($product_id){
        $categoryASC = Category::orderBy('category_id', 'ASC')->get();
        $product = Product::with('category')->orderBy('product_id', 'ASC')->where('product_id', $product_id)->first();

        return view('client.productDetail')->with(compact(
            'categoryASC',
            'product',
        ));
    }

    public function search(){
        $categoryASC = Category::orderBy('category_id', 'ASC')->get();
        $tukhoa = $_GET['tukhoa'];
        $option = $_GET['search-option'];
        if($option == 0){
            $productASC6 = Product::with('category')->orderBy('product_id', 'ASC')->where('product_name', 'LIKE', '%'.$tukhoa.'%')->take(6)->get();
        }else{
            $productASC6 = Product::with('category')->orderBy('product_id', 'ASC')->where('category_id', $option)->where('product_name', 'LIKE', '%'.$tukhoa.'%')->take(6)->get();
        }
        $cateName = $tukhoa;


        return view('client.selling')->with(compact(
            'categoryASC',
            'productASC6',
            'tukhoa',
            'cateName'
        ));
    }


    public function viewOnBrand($brand_id){
        $categoryASC = Category::orderBy('category_id', 'ASC')->get();
        $productASC6 = Product::with('category')->orderBy('product_id', 'ASC')->where('category_id', $brand_id)->paginate(6);
        $cateName = 'search';
        if($brand_id != 'search'){
            $cateName = $categoryASC->where('category_id', $brand_id)->first()->category_name;
            return view('client.selling')->with(compact(
                'categoryASC',
                'productASC6',
                'cateName'
            ));
        }
        return $this->search();
        
    }
    
}
