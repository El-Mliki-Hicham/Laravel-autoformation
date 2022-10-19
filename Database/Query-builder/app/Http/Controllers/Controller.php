<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index()
    {
//Database Get 
        $user = DB::table('contacts')->get();
 
        return view('index',compact('user'));
    }

// Database where  
    public function FindId($id)
    {
        $user = DB::table('contacts')->where("id",$id)->get();
        
        return view('userId',compact('user'));
    }

//Database select first row 
    public function FindName()
    {
        $user = DB::table('contacts')->first();
        return $user->Nom;
    }

//Database OrderBy
    public function orderBy()
    {   
        $user = DB::table('contacts')->orderBy("Nom")->get();
 
        return view('index',compact('user'));
    }

// Database select
    public function select()
    {
        $user = DB::table('contacts')
        ->select('Nom','id')
        ->get();
 
        return view('index',compact('user'));
    }
   

// Database inner join
    public function join(){
        $users = DB::table('users')
            ->join('contacts', 'users.id', '=', 'contacts.user_id')
            ->select('*')
            ->get();
            return view('index',compact('user'));
    }

// Database left join
    public function LeftJoin(){
        $users = DB::table('users')
            ->leftJoin('contacts', 'users.id', '=', 'contacts.user_id')
            ->select('*')
            ->get();
            return view('index',compact('user'));
    }

// Database right join
    public function RightJoin(){
        $users = DB::table('users')
            ->rightJoin('contacts', 'users.id', '=', 'contacts.user_id')
            ->select('*')
            ->get();
            return view('index',compact('user'));
    }
    //cross join
}
