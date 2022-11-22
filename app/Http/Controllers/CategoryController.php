<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Brian2694\Toastr\Facades\Toastr;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{

    public function store(Request $request)
    {
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
        
        if ( $request->status) {
            $request->status = 1;
        } else {
            $request->status = 0;
        }
        $category->status = $data['status'];
        $category->save();
        return redirect()->back();
    }

    public function edit_category()
    {
        return view('admin.edit_category');
    }

    public function geteditcategory($category_id)
    {
        $cate = Category::find($category_id);
        return view('admin.edit_category', ['cate' => $cate]);
        
    }
    public function deletecategory($category_id)
    {
        $cate = Category::find($category_id);
        $cate->delete();
        return redirect('admin/all-category')->with('delete-success', 'Xóa thành công!!!');
    }

    public function index(){
        $category = Category::latest()->get();
       
        return view('admin.all_category', ['category'=>$category]);
        //return view('admin.all_category');
    }

    public function add_category()
    {
        return view('admin.add_category');
    }
    public function posteditcategory(Request $request)
    {

        $cate = Category::find($request->category_id);
        $cate->category_name = $request->category_name;
    
        if ($request->status) {
            $cate->status = 1;
        } else {
            $cate->status = 0;
        }
        $cate->save();

        return redirect('admin/all-category')->with('edit-success', 'Sửa thành công!!!');
    }
    public function changeStatus($category_id, $status)
    {
        $cate = Category::find($category_id);
        $cate->status = $status;
        $cate->save();
        return response()->json(['status' => 'success', 'trangthai' => $cate->status]);
    }
    function findcategory(Request $request)
    {
       
        $search = $request->get('search_query');
        if ($search != '') {
            $category = Category::where(function ($query) use ($search) {
                $query->where('category_name', 'like', '%' . $search . '%');
            })->paginate(2);
            $category->appends(['search_query' => $search]);
        } else {
            $category = Category::paginate(2);
        }
        return view('admin.all_category')->with('category', $category);
    }

}
