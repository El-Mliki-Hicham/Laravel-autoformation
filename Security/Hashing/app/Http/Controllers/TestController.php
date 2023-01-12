<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function hashing(Request $request){
       $code= $request->code;
        return $code;
    }
}
