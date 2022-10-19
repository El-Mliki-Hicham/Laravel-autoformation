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
        $user = DB::table('contacts')->get();
 
        return view('index',compact('user'));
    }
    public function FindId($id)
    {
        $user = DB::table('contacts')->where("id",$id)->get();
        
        return view('userId',compact('user'));
    }
    public function FindName()
    {
        $user = DB::table('contacts')->first();
        return $user->Nom;
    }

    public function orderBy()
    {   
        $user = DB::table('contacts')->orderBy("Nom")->get();
 
        return view('index',compact('user'));
    }
    public function select()
    {
        $user = DB::table('contacts')
        ->select('Nom','id')
        ->get();
 
        return view('index',compact('user'));
    }
   
    public function join(){
        $users = DB::table('users')
            ->join('contacts', 'users.id', '=', 'contacts.user_id')
            ->select('users.*', 'contacts.phone', 'orders.price')
            ->get();
            return view('index',compact('user'));
    }
}
