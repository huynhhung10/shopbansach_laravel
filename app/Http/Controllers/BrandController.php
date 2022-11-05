<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandController extends Controller
{

    public function store(Request $request){
        $data = $request->validate(
            [
                'brand_name' => 'required|unique:category_name|max:255',
                'brand_content' => 'required|max:255',
                'brand_logo' => 'required',
                'brand_status' => 'required',
            ],
            [
                'brand_name.required' => 'Không được để trống nhá',
                'brand_content.required' => 'Không được để trống nhá',
                'brand_logo.required' => 'Không được để trống nhá',
                'brand_status.required' => 'Không được để trống nhá',
            ]
        );

        $brand = new Category();
        $brand->brandName = $data['brand_name'];
        $brand->brandContent = $data['brand_content'];
        $brand->brandLogo = $data['brand_logo'];
        $brand->brandStatus = $data['brand_status'];
        $brand->save();

        return redirect()->back();
    }

    public function index()
    {
        return view('admin.all_brand');
    }

    public function add_brand()
    {
        return view('admin.add_brand');
    }
}
