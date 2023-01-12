<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TestController extends Controller
{
    function hashing(Request $request){
        $hashedPassword=Hash::make($request->code);
        if (Hash::check('code', $hashedPassword)) {
           $code='sucess';
        }
        else{
            $code = "error";
        }

        return view("hashing",compact("code"));
    }
}
