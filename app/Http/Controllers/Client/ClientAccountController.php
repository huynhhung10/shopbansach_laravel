<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Category;
use App\Models\Product;
class ClientAccountController extends Controller
{
    public function index(){
        $categoryASC = Category::orderBy('category_id', 'ASC')->get();
        
        return view('client.accountInfo')->with(compact(
            'categoryASC',
        ));
    }

    public function passwordChange(){
        $categoryASC = Category::orderBy('category_id', 'ASC')->get();

        return view('client.accountPasswordChange')->with(compact(
            'categoryASC'
        ));
    }
    
}
