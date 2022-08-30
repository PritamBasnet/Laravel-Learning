<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $TakeCategoryData= category::all();
        return view('backend.pages.category.index',compact('TakeCategoryData'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $CategoryData= new category();
        $CategoryData->name=$request->name;
        $CategoryData->slug=$request->slug;
        $CategoryData->status=$request->status;
        $CategoryData->save();
        return redirect()->back()->with('status','Category Added successfully');
        // return redirect()->view('backend.pages.category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categroyFind=category::findorfail($id);
        return view('backend.pages.category.edit',compact('categroyFind'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $categroyFind=category::findorfail($id);
        $categroyFind->name=$request->name;
        $categroyFind->slug=$request->slug;
        $categroyFind->status=$request->status;
        $categroyFind->update();
        return redirect()->back()->with('status','Category Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $DeleteCategory= category::findorfail($id);
        // dd($DeleteCategory);
        $DeleteCategory->delete();
        return back()->with('status' , 'Deleted  successfully!!');
    }
    public function categorystatus($id){
        $category = Category::findorfail($id);
        if($category != null){
            if($category->status == 'active'){
                $category->status = 'inactive';
            }else{
                $category->status = 'active';
            }
            $category->save();
            return back()->with('success','Status Updated Succesfully !');
        }else{
            return back()->with('error','Sorry category Didnot Found.');
        }
    }
}
