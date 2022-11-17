<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{

    public function store(Request $request){
        $data = $request->validate(
            [
                'category_name' => 'required|unique:tbl_category|max:255',
                
            ],
            [
                'category_name.required' => 'Tên danh mục phải có nhé',
                
            ]
        );
        $data = $request->all();

        $category = new Category();
        $category->category_name = $data['category_name'];
        //$category->status = $data['status'];
        
        if ($category->status->status) {
            $category->status = 1;
        } else {
            $category->status = 0;
        }
        $category->save();
        return redirect()->back();
    }

    public function index(){
        return view('admin.all_category');
    }

    public function add_category(){
        return view('admin.add_category');
    }

    public function changeStatus($category_id, $status)
    {
        $cate = Category::find($category_id);
        $cate->status = $status;
        $cate->save();
        return response()->json(['status' => 'success', 'trangthai' => $cate->status]);
    }
}
