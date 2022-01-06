<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Course;
use App\Item;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sliders=Slider::skip(1)->take(5)->get();
        $courses=Course::all();
        $services=Item::where('category_id',1)->get();
        $managements=Item::where('category_id',2)->skip(1)->take(5)->get();
        $news=Item::where('category_id',3)->skip(1)->take(5)->get();
        return view ('user.index',compact('sliders','courses','services','managements','news'));
    }
}
