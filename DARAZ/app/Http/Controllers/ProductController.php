<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $taking_data=product::all();
        return view('product.index',compact('taking_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product=new product();
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        if($request->hasfile('product_image')){
            $file = $request->file('product_image');
            $extension = $file->getClientOriginalExtension();
            $filename= time().'.'.$extension;
            $file->move('upload/products',$filename);
            $product->product_image=$filename;
        }
        $product->product_description = $request->product_description;
        $product->product_brand = $request->product_brand;
        $product->save();
        return redirect()->back()->with('status','Product Added Succesfully');
    }
    public function deletedata($id){
        $data=product::find($id);
        $data->delete();
        return view('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        //
    }
    public function PassData($id){
        $data=product::find($id);
        return view('product.edit',compact('data'));
    }
    Public function updatedata(Request $request){
        $updating = product::find($request->id);
        $updating->product_name = $request->product_name;
        $updating->product_price = $request->product_price;
        $updating->product_description = $request->product_description;
        $updating->product_brand = $request->product_brand;
        $updating->update();

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        //
    }
}
