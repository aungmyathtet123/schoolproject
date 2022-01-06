<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\City;
class AdminController extends Controller
{
    public function index()
    {

        $categories=Category::all();
        $cities=City::all();
        return view('admin.home',compact('categories','cities'));
    }

}
