<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Order;
use App\Models\Customer;

class ProductController extends Controller
{
    public function add_product(){
        $category = Category::latest()->get();
        $brand = Brand::latest()->get();
        return view('admin.add_product', ['category'=>$category],  ['brand'=>$brand]);
        
    }
    // public function add_product1(){
        
    //     $brand = Brand::latest()->get();
    //     return view('admin.add_product', ['brand'=>$brand]);
    // }
    public function store(Request $request){
        $data = $request->validate(
            [
                'product_name' => 'required|unique:category_name|max:255',
                'product_author' => 'required|max:255',
                'product_content' => 'required|max:255',                               
                //'image' => 'required   |image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:min_width=100&dimensions=min_height=100,max_width=1000,max_height=1000',
                'image' => 'required',
                'product_brand' => 'required',
                'product_category' => 'required',
                'product_quantity' => 'required',
                'product_price' => 'required',
                
            ],
            [
                'product_name.required' => 'Không được để trống nhá',
                'product_content.required' => 'Không được để trống nhá',
                'product_price.required' => 'Không được để trống nhá',
                'product_author.required' => 'Không được để trống nhá',
                'product_img' => 'Không được để trống nhá',
                'product_quantity.required' => 'Không được để trống nhá',
                
            ]
        );

        $product = new Product();
        $product->product_name = $data['product_name'];
        $product->product_content = $data['product_content'];
        $product->product_price = $data['product_price'];
        $product->product_author = $data['product_author'];
        // them sach truyen
        // $get_image = $data['image'];
        $get_image = $request->image;
        $path='public/uploads/images';
        $get_name_image = $get_image->getClientOriginalName();
        $name_image = current(explode('.',$get_name_image));
        $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
        $get_image->move($path, $new_image);
        $product->product_img = $new_image;

        $product->product_quantity = $data['product_quantity'];
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

        $product->save();

        return redirect()->back()->with('success', 'Thêm vào thành công!');
    }

    public function index(){
        $products = Product::latest()->get();
       
        return view('admin.all_product', ['product'=>$products]);
        //return view('admin.all_product');
    }
    public function edit_product()
    {
        return view('admin.edit_product');
    }
    public function geteditproduct($product_id)
    {
        $product = Product::find($product_id);
        return view('admin.edit_product', ['product' => $product]);
        
    }
    public function deleteproduct($product_id)
    {
        $product = Product::find($product_id);
        $product->delete();
        return redirect('admin/all-product')->with('delete-success', 'Xóa thành công!!!');
    }
    public function posteditproduct(Request $request)
    {

        $product = Product::find($request->product_id);
        $product->product_name = $data['product_name'];
        $product->product_content = $data['product_content'];
        $product->product_price = $data['product_price'];
        $product->product_author = $data['product_author'];
        // them sach truyen
        // $get_image = $data['image'];
        $get_image = $request->image;
        $path='public/uploads/images';
        $get_name_image = $get_image->getClientOriginalName();
        $name_image = current(explode('.',$get_name_image));
        $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
        $get_image->move($path, $new_image);
        $product->product_img = $new_image;

        $product->product_quantity = $data['product_quantity'];
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

        $product->save();

        return redirect('admin/all-product')->with('edit-success', 'Sửa thành công!!!');
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
            $product = Product::where(function ($query) use ($search) {
                $query->where('product_name', 'like', '%' . $search . '%');
            })->paginate(2);
            $product->appends(['search_query' => $search]);
        } else {
            $product = Product::paginate(2);
        }
        return view('admin.all_product')->with('product', $product);
    }
    

    // public function add_product(){
    //     return view('admin.add_product');
    // }
    public function countdashboard(){
        
        $product = Product::latest()->get();
        $order = Order::latest()->get();
        //$customer = Customer::latest()->get();
        $customer = Customer::paginate(2);
        //$c_pro=0;
        // foreach($products as $key => $product)
        // $c_pro++;
        // endforeach

        

        return view('admin.dashboard', ['product'=>$product],  ['order'=>$order],  ['customer'=>$customer]);
    }


}
