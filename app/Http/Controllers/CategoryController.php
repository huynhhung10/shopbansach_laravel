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

        );
        $data = $request->all();

        $category = new Category();
        $category->category_name = $data['category_name'];
        //$category->status = $data['status'];

        if ($request->status) {
            $category->status = 1;
        } else {
            $category->status = 0;
        }

        $category->save();
        Toastr::success('Success', 'Thêm danh mục thành công!');
        return redirect('admin/all-category');
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
        Toastr::success('Success', 'Xóa thành công!');
        return redirect('admin/all-category');
    }

    public function index()
    {
        $category = Category::orderBy('created_at', 'DESC')->paginate(5);

        return view('admin.all_category', ['category' => $category]);
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
        Toastr::success('Success', 'Chỉnh sửa thành công!');

        return redirect('admin/all-category');
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
            })->paginate(5);
            $category->appends(['search_query' => $search]);
        } else {
            $category = Category::orderBy('created_at', 'DESC')->paginate(5);
        }
        return view('admin.all_category')->with('category', $category);
    }
}
