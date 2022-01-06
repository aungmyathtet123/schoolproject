<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Slider;
use App\Course;
use App\Township;
use App\Center;
use App\City;
use App\Timetable;
use App\Item;
use App\Type;
use App\About;
use App\GroupCompany;
use App\Contact;

class UserController extends Controller
{
    public function index()
    {
        $sliders=Slider::skip(1)->take(5)->get();
        $courses=Course::all();
        $services=Item::where('category_id',1)->get();
        $managements=Item::where('category_id',2)->skip(1)->take(5)->get();
        $news=Item::where('category_id',3)->skip(1)->take(5)->get();
        return view ('user.index',compact('sliders','courses','services','managements','news'));
    }

    public function course(Request $request,$id)
    {


        $courses=Course::where('id',$id)->get();
        $townships=Township::all();


        return view('user.course',compact('courses','townships','id'));
    }

    public function singlecourse(Request $request,$id)
    {

            // dd($id);
        $types=Type::all();
        $townships=Township::all();
        $centers=Center::all();
        $courses=Course::where('id',$id)->get();

       return view('user.singlecourse',compact('townships','centers','id','courses','types'));
    }

    public function filter(Request $request)
{

    $id=$request->course_id;
    $townships=Township::all();
    $id=$request->filterby;
    $township=Township::find($id);
    $courses=$township->course;

    return view('user.course',compact('courses','townships','id'));
}
public function search(Request $request)
{
    $id=$request->course_id;

    $townships=Township::all();
    $search=$request->s ?? '';
    if($search) $search.='%';
    $courses=Course::where('name','like',"%$search")->get();
    return view('user.course',compact('courses','townships','id'));
}

// public function type(Request $request)
// {

//     $id=$request->course_id;
//     $townships=Township::all();

//     $townships=Township::where('city_id',$id)->get();
//     $centers=Center::all();
//     $courses=Course::where('type_id',$id)->get();

//     return view('user.singlecourse',compact('townships','centers'));
// }
public function center(Request $request)
{
    $id=$request->course_id;
    $tid=$request->township;
    $townships=Township::all();
    $centers=Center::where('township_id',$tid)->get();
    $township=Township::find($tid);
    $courses=$township->course;
    $types=Type::all();


    return view('user.singlecourse',compact('townships','centers','id','courses','types'));
}

public function department()
{
    $department=Item::where('category_id', 4)->first();

    return view('user.department',compact('department'));
}

public function singledepartment($id)
{
    $singledepartments=Item::where('id',$id)->get();
    return view('user.singledepartment',compact('singledepartments'));
}

public function facility()
{

    return view('user.facility');
}
public function singlefacility($id)
{
    $singlefacilities=Item::where('id',$id)->get();
    return view('user.singlefacility',compact('singlefacilities'));
}

public function about()
{
   $abouts=About::all();
   $groupcompanies=GroupCompany::all();
   $managements=Item::where('category_id',2)->get();
   return view('user.about',compact('abouts','groupcompanies','managements'));
}

public function service($id)
{
    $services=Item::where('id',$id)->get();
    return view('user.service',compact('services'));
}

public function news($id)
{
    $news=Item::where('id',$id)->get();
    return view('user.new',compact('news'));
}
public function contact()
{
    $contacts=Contact::all();
    return view('user.contact',compact('contacts'));
}

}
