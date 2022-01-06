<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Township;
use App\Type;
use Illuminate\Support\Facades\File;
class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses=Course::orderby('id','desc')->get();
       return view('admin/course.index',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $townships=Township::all();
        $types=Type::all();
        return view('admin/course.create',compact('townships','types'));
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
        $request->image->move(public_path('items'), $imageName);
        $courses=new Course();
        $courses->name=$request->name;
        $courses->description=$request->description;
        $courses->image=$imageName;


        $courses->date=$request->date;
        $courses->time=$request->time;
        $courses->availableuser=$request->availableuser;
        $courses->section=$request->section;
        $courses->fees=$request->fees;
        $courses->type_id=$request->type_id;
        $courses->save();
        $townshipid=$request->township_id;

            $courses->township()->sync($townshipid);

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

        $course=Course::find($id);
        $township=$course->township->pluck('id');
        $townshipid=$township->implode(',');
        return view('admin/course.edit',compact('course','townshipid'));
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
            $request->image->move(public_path('items'), $imageName);
           }

           $courses=Course::find($id);
           $courses->name=$request->name;
            $courses->description=$request->description;
            if($request->hasFile('image')){
                File::delete($courses->image);
                $courses->image=$imageName;
            }else{
                $courses->image=$courses->image;
            }
            $courses->date=$request->date;
            $courses->time=$request->time;
            $courses->availableuser=$request->availableuser;
            $courses->section=$request->section;
            $courses->fees=$request->fees;
            $courses->type_id=$request->type_id;
            $courses->save();
            $townshipid=$request->township_id;

                $courses->township()->sync($townshipid);
            return redirect()->route('course.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course=Course::find($id);
        $course->delete();
        $course->township()->detach($course);
        return redirect()->back();
    }




}
