<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Brian2694\Toastr\Facades\Toastr;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    public function add_product()
    {
        $category = Category::latest()->get();
        return view('admin.add_product', ['category' => $category]);
    }
    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'product_name' => 'required|unique:category_name|max:255',
                'product_content' => 'required|max:255',
                'product_price' => 'required',
                'product_author' => 'required|max:255',
                'product_img' => 'required',
                'product_quantity' => 'required',
                'status' => 'required',
            ],
            [
                'product_name.required' => 'Không được để trống nhá',
                'product_content.required' => 'Không được để trống nhá',
                'product_price.required' => 'Không được để trống nhá',
                'product_author.required' => 'Không được để trống nhá',
                'product_img' => 'Không được để trống nhá',
                'product_quantity.required' => 'Không được để trống nhá',
                'status' => 'Không được để trống nhá'
            ]
        );

        $product = new Category();
        $product->productName = $data['product_name'];
        $product->productContent = $data['product_content'];
        $product->productPrice = $data['product_price'];
        $product->productAuthor = $data['product_author'];
        $product->productImg = $data['product_img'];
        $product->productQuantity = $data['product_quantity'];
        $product->productStatus = $data['status'];
        $product->save();

        return redirect()->back();
    }

    public function index()
    {
        return view('admin.all_product');
    }

    // public function add_product(){
    //     return view('admin.add_product');
    // }
}
