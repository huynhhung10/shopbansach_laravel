<?php

namespace App\Http\Controllers;

use Brian2694\Toastr\Facades\Toastr;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.all_user');
    }

    public function add_user()
    {
        return view('admin.add_user');
    }
}
