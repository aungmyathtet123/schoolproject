<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Category;
use App\Township;
use Illuminate\Support\Facades\File;
class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::all();
        $courses=Item::orderBy('id','desc')->paginate('8');
      return view('admin/item.index',compact('categories','courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $categories=Category::all();
        // return view('admin/course.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $imageName =$request->image->getClientOriginalName();
        $request->image->move(public_path('courses'), $imageName);
        $courses=new Item();
        $courses->name=$request->name;
        $courses->description=$request->description;
        $courses->image=$imageName;
        $courses->category_id=$request->category_id;
        $courses->save();

        // $townshipid=$request->township_id;

        //     $courses->township()->sync($townshipid);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories=Category::all();
        $course=Item::find($id);
        return view('admin/item.edit',compact('course','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->hasFile('image')){
            $imageName = $request->image->getClientOriginalName();
            $request->image->move(public_path('courses'), $imageName);
           }

           $course=Item::find($id);
           $course->name=$request->name;
            $course->description=$request->description;
            if($request->hasFile('image')){
                File::delete($course->image);
                $course->image=$imageName;
            }else{
                $course->image=$course->image;
            }
            $course->category_id=$request->category_id;
            $course->save();
            return redirect()->route('showdata',$request->category_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function showdata($id)
    {

        $categories=Category::all();
        $courses=Item::where('category_id',$id)->get();
        return view('admin/item.index',compact('id','categories','courses'));

    }

    public function getdata($id)
    {
        $townships=Township::all();
        $categories=Category::all();
        return view('admin/item.create',compact('id','categories','townships'));

    }


}
