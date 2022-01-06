<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Township;
use App\Category;

class TownshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $township=new Township();
        $township->name=$request->name;
        $township->city_id=$request->city_id;
        $township->save();
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
        $township=Township::find($id);
        return view('admin/township.edit',compact('township'));
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
        $township=Township::find($id);
            $township->name=$request->name;
            $township->city_id=$request->city_id;
            $township->save();
            return redirect()->route('townshipdata',$request->city_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $township=Township::find($id);
        $township->delete();
        return redirect()->back();
    }

    public function townshipdata($id)
    {

       return view('admin/township.create',compact('id'));
    }

    public function showdata($id)
    {
       $townships=Township::where('city_id',$id)->get();
       return view('admin/township.index',compact('id','townships'));
    }
}
