<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  one to one
    public function hasOne()
    {
        $data = Promotion::find(1)->HasOneStudent ;
        return $data  ;
    }


    //  one to many
    public function hasMany()
    {
        $data = Promotion::find(1)->HasManyStudent ;
        return $data  ;
    }


}
