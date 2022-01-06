<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GroupCompany;
use Illuminate\Support\Facades\File;

class GroupcompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groupcompanies=GroupCompany::all();
        return view ('admin/groupcompany.index',compact('groupcompanies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin/groupcompany.create');
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
        $request->image->move(public_path('company'), $imageName);
        $groupcompany=new GroupCompany();
        $groupcompany->name=$request->name;
        $groupcompany->image=$imageName;
        $groupcompany->description=$request->description;

        $groupcompany->save();
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
        $groupcompany=Groupcompany::find($id);
        return view('admin/groupcompany.edit',compact('groupcompany'));
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
            $request->image->move(public_path('company'), $imageName);
           }

           $groupcompany=Groupcompany::find($id);
           $groupcompany->name=$request->name;

            if($request->hasFile('image')){
                File::delete($groupcompany->image);
                $groupcompany->image=$imageName;
            }else{
                $groupcompany->image=$groupcompany->image;
            }

            $groupcompany->description=$request->description;

            $groupcompany->save();
            return redirect()->route('groupcompany.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $groupcompany=Groupcompany::find($id);
        $groupcompany->delete();
        return redirect()->back();
    }
}
