<?php

namespace App\Http\Controllers;

use App\Models\divcontroller;
use Illuminate\Http\Request;

class DivcontrollerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $passdata = divcontroller::all();
        return view('index',compact('passdata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $save= new divcontroller();
        $save->title=$request->title;
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('upload/students/',$filename);
            $save->image= $filename;
        }
        $save->text=$request->text;
        $save->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\divcontroller  $divcontroller
     * @return \Illuminate\Http\Response
     */
    public function show(divcontroller $divcontroller)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\divcontroller  $divcontroller
     * @return \Illuminate\Http\Response
     */
    public function edit(divcontroller $divcontroller)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\divcontroller  $divcontroller
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, divcontroller $divcontroller)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\divcontroller  $divcontroller
     * @return \Illuminate\Http\Response
     */
    public function destroy(divcontroller $divcontroller)
    {
        //
    }
}
