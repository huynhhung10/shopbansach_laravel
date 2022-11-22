<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Brand;

use PhpParser\Node\Expr\Cast;
use Brian2694\Toastr\Facades\Toastr;
use RealRashid\SweetAlert\Facades\Alert;

class ClientController extends Controller
{

    public function __construct()
    {
    }

    public function index()
    {
        //header, home
        $categoryASC = Category::orderBy('category_id', 'ASC')->where('status', 1)->get();
        $brandASC = Brand::orderBy('brand_id', 'ASC')->get();

        //home
        $productASC4 = Product::with('category')->with('brand')->where('status', 1)->orderBy('created_at', 'DESC')->limit(4)->get();
        $productDESC4 = Product::with('category')->with('brand')->where('status', 1)->orderBy('created_at', 'ASC')->limit(4)->get();
        $productASC8 = Product::with('category')->where('status', 1)->orderBy('product_id', 'ASC')->limit(8)->get();


        return view('client.home')->with(compact(
            'categoryASC',
            'productASC4',
            'productDESC4',
            'productASC8',
            'brandASC',
        ));
    }

    public function viewAllProduct()
    {
        //header, home
        $categoryASC = Category::orderBy('category_id', 'ASC')->where('status', 1)->get();
        $brandASC = Brand::orderBy('brand_id', 'ASC')->get();

        $productASC6 = Product::with('category')->where('status', 1)->with('brand')->orderBy('product_id', 'ASC')->paginate(6);
        $cateName = 'Tất cả';
        return view('client.selling')->with(compact(
            'categoryASC',
            'productASC6',
            'cateName',
            'brandASC',
        ));
    }

    public function viewOnCategory($category_id)
    {
        //header, home
        $categoryASC = Category::orderBy('category_id', 'ASC')->where('status', 1)->get();
        $brandASC = Brand::orderBy('brand_id', 'ASC')->get();

        $productASC6 = Product::with('category')->with('brand')->where('status', 1)->orderBy('product_id', 'ASC')->where('category_id', $category_id)->paginate(6);
        $cateName = 'search';
        if ($category_id != 'search') {
            $cateName = $categoryASC->where('category_id', $category_id)->first()->category_name;
            return view('client.selling')->with(compact(
                'categoryASC',
                'productASC6',
                'cateName',
                'brandASC',
            ));
        }
        return $this->search();
    }

    public function viewProduct($product_id)
    {
        //header, home
        $categoryASC = Category::orderBy('category_id', 'ASC')->where('status', 1)->get();
        $brandASC = Brand::orderBy('brand_id', 'ASC')->get();

        $product = Product::with('category')->with('brand')->orderBy('product_id', 'ASC')->where('product_id', $product_id)->first();

        return view('client.productDetail')->with(compact(
            'categoryASC',
            'product',
            'brandASC',
        ));
    }

    public function search()
    {
        //header, home
        $categoryASC = Category::orderBy('category_id', 'ASC')->where('status', 1)->get();
        $brandASC = Brand::orderBy('brand_id', 'ASC')->get();

        $tukhoa = $_GET['tukhoa'];
        $option = $_GET['search-option'];
        if ($option == 0) {
            $productASC6 = Product::with('category')->with('brand')->orderBy('product_id', 'ASC')->where('status', 1)->where('product_name', 'LIKE', '%' . $tukhoa . '%')->take(6)->get();
        } else {
            $productASC6 = Product::with('category')->with('brand')->orderBy('product_id', 'ASC')->where('status', 1)->where('category_id', $option)->where('product_name', 'LIKE', '%' . $tukhoa . '%')->take(6)->get();
        }
        $cateName = $tukhoa;


        return view('client.selling')->with(compact(
            'categoryASC',
            'productASC6',
            'tukhoa',
            'cateName',
            'brandASC',
        ));
    }


    public function viewOnBrand($brand_id)
    {
        //header, home
        $categoryASC = Category::orderBy('category_id', 'ASC')->where('status', 1)->get();
        $brandASC = Brand::orderBy('brand_id', 'ASC')->get();

        $productASC6 = Product::with('brand')->orderBy('product_id', 'ASC')->where('status', 1)->where('brand_id', $brand_id)->paginate(6);
        $cateName = 'search';
        if ($brand_id != 'search') {
            $cateName = $brandASC->where('brand_id', $brand_id)->first()->brand_name;
            return view('client.selling')->with(compact(
                'categoryASC',
                'productASC6',
                'cateName',
                'brandASC',
            ));
        }
        return $this->search();
    }
}
