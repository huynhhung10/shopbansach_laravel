<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Order;
use App\Models\Customer;
use Brian2694\Toastr\Facades\Toastr;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    public function add_product()
    {
        $category = Category::latest()->get();
        $brand = Brand::latest()->get();
        return view('admin.add_product', ['category' => $category],  ['brand' => $brand]);
    }
    // public function add_product1(){

    //     $brand = Brand::latest()->get();
    //     return view('admin.add_product', ['brand'=>$brand]);
    // }
    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'product_name' => 'required|unique:tbl_product|max:255',
                'product_author' => 'required|max:255',
                'product_content' => 'required|max:255',
                //'image' => 'required   |image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:min_width=100&dimensions=min_height=100,max_width=1000,max_height=1000',
                'product_img' => 'required',
                'product_brand' => 'required',
                'product_category' => 'required',
                'product_quantity' => 'required',
                'product_price' => 'required',
                'product_brand' => 'required',
                'product_category' => 'required',

            ],

        );

        $product = new Product();
        if ($request->product_featured) {
            $product->product_featured = 1;
        } else {
            $product->product_featured = 0;
        }
        if ($request->status) {
            $product->status = 1;
        } else {
            $product->status = 0;
        }

        //$product->product_name = $request->product_name;
        $product->product_name = $data['product_name'];
        $product->product_content = $data['product_content'];
        $product->product_price = $data['product_price'];
        $product->product_author = $data['product_author'];
        $product->brand_id = $data['product_brand'];
        $product->category_id = $data['product_category'];
        // them sach truyen
        // $get_image = $data['image'];
        if ($request->hasFile('product_img')) {
            $file = $request->file('product_img');
            $filename = $file->getClientOriginalName('product_img');
            $file->move('frontend/img/products', $filename);
            $product->product_img = './frontend/img/products/' . $filename;
            //$product->product_img =  $filename;
        }

        $product->product_quantity = $data['product_quantity'];
        //$product->product_featured = $data['product_featured'];
        //$product->status = $data['status'];

        $product->save();
        Toastr::success('Success', 'Thêm sản phẩm thành công!');
        return redirect('admin/all-product');
    }

    public function index()
    {
        //$products = Product::paginate(5);
        $products = Product::orderBy('created_at', 'DESC')->paginate(5);

        return view('admin.all_product', ['products' => $products]);
        //return view('admin.all_product');
    }
    // public function edit_product()
    // {

    //     return view('admin.edit_product');
    // }
    public function geteditproduct($product_id)
    {
        $category = Category::latest()->get();
        $brand = Brand::latest()->get();

        // $brandName = $brand->where('brand_id', $brand_id)->first()->brand_name;
        //, ['category' => $category], ['brand' => $brand]

        // $product = Product::find($product_id);
        // // $brand1 =  Brand::find($product->brand_id);
        // // $brandName = $brand1->brand_name;

        // return view(
        //     'admin.edit_product',
        //     ['product' => $product],
        //     ['brand' => $brand],
        //     ['category' => $category]
        // );
        //['brand1' => $brand1]);
        $product = Product::with('brand')->with('category')->find($product_id);
        return view('admin.edit_product')->with('product', $product)->with('brand', $brand)->with('category', $category);
    }
    public function deleteproduct($product_id)
    {
        $product = Product::find($product_id);
        $product->delete();
        Toastr::success('Success', 'Xóa thành công!');
        return redirect('admin/all-product');
    }
    public function posteditproduct(Request $request)
    {

        $product = Product::find($request->product_id);
        $product->product_name = $request->product_name;
        $product->product_content = $request->product_content;
        $product->product_price = $request->product_price;
        $product->product_author = $request->product_author;
        $product->brand_id =  $request->product_brand;
        $product->category_id = $request->product_category;

        // them sach truyen
        // $get_image = $data['image'];
        // $get_image = $request->image;
        // $path = 'public/uploads/images';
        // $get_name_image = $get_image->getClientOriginalName();
        // $name_image = current(explode('.', $get_name_image));
        // $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
        // $get_image->move($path, $new_image);
        // $product->product_img = $new_image;


        if ($request->hasFile('product_img')) {
            $file = $request->file('product_img');
            $filename = $file->getClientOriginalName('product_img');
            $file->move('frontend/img/products', $filename);
            $product->product_img = $filename;
        }


        $product->product_quantity =  $request->product_quantity;
        //$product->product_featured = $data['product_featured'];
        //$product->status = $data['status'];
        if ($request->product_featured) {
            $product->product_featured = 1;
        } else {
            $product->product_featured = 0;
        }
        if ($request->status) {
            $product->status = 1;
        } else {
            $product->status = 0;
        }
        Toastr::success('Success', 'Chỉnh sửa thành công!');
        $product->save();

        return redirect('admin/all-product');
    }
    public function changeStatus($product_id, $status)
    {
        $product = Product::find($product_id);
        $product->status = $status;
        $product->save();
        return response()->json(['status' => 'success', 'trangthai' => $cus->status]);
    }
    function findproduct(Request $request)
    {

        $search = $request->get('search_query');
        if ($search != '') {
            $products = Product::where(function ($query) use ($search) {
                $query->where('product_name', 'like', '%' . $search . '%');
            })->paginate(5);
            $products->appends(['search_query' => $search]);
        } else {
            $products = Product::orderBy('created_at', 'DESC')->paginate(5);
        }
        return view('admin.all_product')->with('products', $products);
    }


    // public function add_product(){
    //     return view('admin.add_product');
    // }
    // public function countdashboard()
    // {

    //     $product = Product::all()->count();
    //     $order = Order::all()->count();
    //     $brand = Brand::all()->count();
    //     $customers = Customer::all()->count();
    //     //$customer = Customer::paginate(2);
    //     //$c_pro=0;
    //     // foreach($products as $key => $product)
    //     // $c_pro++;
    //     // endforeach

    //     return view(
    //         'admin.dashboard',
    //         ['brand' => $brand],
    //         ['order' => $order],
    //         ['product' => $product],
           
    //         ['customers' => $customers]
            
    //     );
    // }

}
