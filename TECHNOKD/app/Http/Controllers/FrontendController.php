<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function homepage(){
        return view('frontend.index');
    }
    public function detail($slug){
        $postdetail =post::where('slug',$slug)->first();
        return view('frontend.detail',compact('postdetail'));
    }
    public function category($cat_id){
        $posts = post::where('cat_id',$cat_id)->get();
        return view('frontend.category',compact('posts'));
    }
}
