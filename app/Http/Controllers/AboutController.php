<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use Illuminate\Support\Facades\File;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts=About::all();
        return view ('admin/about.index',compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin/about.create');

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
        $request->image->move(public_path('about'), $imageName);
        $abouts=new About();

        $abouts->image=$imageName;

        $abouts->description=$request->description;

        $abouts->save();
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
        $about=About::find($id);
        return view('admin/about.edit',compact('about'));
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

           $abouts=About::find($id);
           $abouts->address=$request->address;
           $abouts->email=$request->email;
            if($request->hasFile('image')){
                File::delete($abouts->image);
                $abouts->image=$imageName;
            }else{
                $abouts->image=$abouts->image;
            }
            $abouts->phone=$request->phone;
            $abouts->description=$request->description;
            $abouts->facebooklink=$request->facebooklink;
            $abouts->instagramlink=$request->instagramlink;
            $abouts->save();
            return redirect()->route('about.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about=About::find($id);
        $about->delete();
        return redirect()->back();
    }
}
