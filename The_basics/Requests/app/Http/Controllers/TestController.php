<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    
    function index(Request $request){
        $name = $request->input("name");
        return view('index',compact("name"));
    }
    function findId(Request $request,$id){

        if($id < 1){
        $name = $request->input("name");
        return "Hello $name";
    }
    }
}
