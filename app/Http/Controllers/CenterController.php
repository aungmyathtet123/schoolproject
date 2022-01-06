<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Center;
class CenterController extends Controller
{
    public function index($id)
    {
        $centers=Center::where('township_id',$id)->get();
        return view('admin/center.index',compact('centers','id'));
    }
    public function create($id)
    {
        return view('admin/center.create',compact('id'));
    }

    public function store(Request $request)
    {
        $center=new Center();
        $center->name=$request->name;
        $center->township_id=$request->township_id;
        $center->save();
        return redirect()->back();

    }

    public function edit($id)
    {
      $center=Center::find($id);
      return view('admin/center.edit',compact('center'));
    }

    public function update(Request $request,$id)
    {
        $center=Center::find($id);
        $center->name=$request->name;
        $center->township_id=$request->township_id;
        $center->save();
        return redirect()->route('center.index',$request->township_id);
    }

    public function destroy($center)
    {

       $center=Center::find($center);
       $center->delete();
       return redirect()->back();
    }
}
