<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Category;
use App\Models\Product;
use Brian2694\Toastr\Facades\Toastr;
use RealRashid\SweetAlert\Facades\Alert;

class ClientProductDetailController extends Controller
{
    public function index()
    {
        $categoryASC = Category::orderBy('category_id', 'ASC')->where('status', 1)->get();


        return view('client.productDetail')->with(compact(
            'categoryASC',
        ));;
    }
}
