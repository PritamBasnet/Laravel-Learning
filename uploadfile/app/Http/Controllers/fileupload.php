<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fileupload extends Controller
{
    function index(Request $req){
        // return "Hello Controller";
        return $req->file('file')->store('docs');
    }
}
