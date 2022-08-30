<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $TakePostData=post::all();
        return view('backend.pages.post.index',compact('TakePostData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.post.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $PostData=new post();
        $PostData->title=$request->title;
        $PostData->slug=Str::slug($request->slug,'-');
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('upload/images/',$filename);
            $PostData->image= $filename;
        }
        $PostData->description=$request->description;
        $PostData->cat_id=$request->cat_id;
        $PostData->status=$request->status;
        $PostData->save();
        return redirect()->back()->with('status','Post Added Sucess Fully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $PostDataFind=post::findorfail($id);
        return view('backend.pages.post.edit',compact('PostDataFind'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $postfind=post::findorfail($id);
        $postfind->title=$request->title;
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('upload/images/',$filename);
            $postfind->image= $filename;
        }
        $postfind->description=$request->description;
        $postfind->cat_id=$request->cat_id;
        $postfind->status=$request->status;
        $postfind->update();
        return redirect()->back()->with('status','Post Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $PostDelete=post::findorfail($id);
        $PostDelete->delete();
        return redirect()->back()->with('status','Post Deleted Successfully');
    }
    // Most important for post controller
    public function filter(Request $request){
        $TakePostData = post::where('title','like','%'.$request->search.'%')->orwhere('description','like','%'.$request->search.'%')->get();
        return view('backend.pages.post.index',compact('TakePostData'));
    }
}
