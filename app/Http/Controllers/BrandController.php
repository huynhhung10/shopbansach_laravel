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
                'brand_name' => 'required|max:255',
                'brand_content' => 'required|max:255',

            ],
        );

        $brand = new Brand();
        $brand->brand_name = $data['brand_name'];
        $brand->brand_content = $data['brand_content'];
        // if ($request->hasFile('brand_logo')) {
        //     $file = $request->file('brand_logo');
        //     $filename = $file->getClientOriginalName('brand_logo');
        //     $file->move('/frontend/img/products/', $filename);
        //     $brand->brand_logo = $filename;
        // }

        if ($request->brand_status) {
            $brand->brand_status = 1;
        } else {
            $brand->brand_status = 0;
        }
        $brand->save();
        Toastr::success('Success', 'Thêm NXB thành công!');
        return redirect('admin/all-brand');
    }

    public function index()
    {
        $brands = Brand::orderBy('created_at', 'DESC')->paginate(5);
        return view('admin.all_brand',   ['brands' => $brands]);
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
        Toastr::success('Success', 'Xóa thành công!');
        return redirect('admin/all-brand');
    }
    public function posteditbrand(Request $request)
    {
        $brand = Brand::find($request->brand_id);
        $brand->brand_name = $request->brand_name;
        $brand->brand_content = $request->brand_content;
        if ($request->brand_status) {
            $brand->brand_status = 1;
        } else {
            $brand->brand_status = 0;
        }

        if ($request->file('brand_logo') != null) {
            $file = $request->file('brand_logo');
            $filename = $file->getClientOriginalName('brand_logo');
            $file->move('/frontend/img/products/', $filename);
            $brand->brand_logo = $filename;
        }


        $brand->save();
        Toastr::success('Success', 'Chỉnh sửa thành công!');
        return redirect('admin/all-brand');
    }

    public function changeStatus($brand_id, $brand_status)
    {
        $brand = Brand::find($brand_id);
        $brand->brand_status = $brand_status;
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
            $brand = Brand::orderBy('created_at', 'DESC')->paginate(5);
        }
        return view('admin.all_brand')->with('brand', $brand);
    }
}
