<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Product;
use Brian2694\Toastr\Facades\Toastr;
use RealRashid\SweetAlert\Facades\Alert;

class BrandController extends Controller
{

    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'brand_name' => 'required|unique:category_name|max:255',
                'brand_content' => 'required|max:255',
                'brand_logo' => 'required',
                
            ],
            [
                'brand_name.required' => 'Không được để trống nhá',
                'brand_content.required' => 'Không được để trống nhá',
                'brand_logo.required' => 'Không được để trống nhá',
                
            ]
        );

        $brand = new Brand();
        if ($request->hasFile('brand_logo')) {
            $file = $request->file('brand_logo');
            $filename = $file->getClientOriginalName('brand_logo');
            $file->move('/frontend/img/products/', $filename);
            $brand->brand_logo = $filename;
        }

        $brand->brand_name = $data['brand_name'];
        $brand->brand_content = $data['brand_content'];
       
        if ($request->status) {
            $brand->brand_status = 1;
        } else {
            $brand->brand_status = 0;
        }
        $brand->save();

        return redirect()->back()->with('success', 'Thêm vào thành công!');
    }

    public function index()
    {
        $brand = Brand::latest()->get();
        return view('admin.all_brand',   ['brand'=>$brand]);
        //return view('admin.all_brand');
    }

    public function add_brand()
    {
        return view('admin.add_brand');
    }
    public function edit_brand()
    {
        return view('admin.edit_brand');
    }

    public function geteditbrand($brand_id)
    {
        $brand = Brand::find($brand_id);
        return view('admin.edit_brand', ['brand' => $brand]);
        
    }
    public function deletebrand($brand_id)
    {
        $brand = Brand::find($brand_id);
        $brand->delete();
        return redirect('admin/all-brand')->with('delete-success', 'Xóa thành công!!!');
    }
    public function posteditbrand(Request $request)
    {

        $brand = Brand::find($request->brand_id);
        if ($request->file('brand_logo') != null) {
            $file = $request->file('brand_logo');
            $filename = $file->getClientOriginalName('brand_logo');
            $file->move('/frontend/img/products/', $filename);
            $brand->brand_logo = $filename;
        }

        $brand->brand_name = $request->brand_name;
        $brand->brand_content = $request->brand_content;

       
       
        if ($request->status) {
            $brand->brand_status = 1;
        } else {
            $brand->brand_status = 0;
        }
        $brand->save();

        return redirect('admin/all-brand')->with('edit-success', 'Sửa thành công!!!');
    }

    public function changeStatus($brand_id, $status)
    {
        $brand = Customer::find($brand_id);
        $brand->brand_status = $status;
        $brand->save();
        return response()->json(['status' => 'success', 'trangthai' => $brand->brand_status]);
    }

    function findbrand(Request $request)
    {
        
        $search = $request->get('search_query');
        if ($search != '') {
            $brand = Brand::where(function ($query) use ($search) {
                $query->where('brand_name', 'like', '%' . $search . '%');
            })->paginate(2);
            $brand->appends(['search_query' => $search]);
        } else {
            $brand = Brand::paginate(2);
        }
        return view('admin.all_brand')->with('brand', $brand);
    }

}
