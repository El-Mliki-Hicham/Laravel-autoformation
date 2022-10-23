<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidationController extends Controller
{
  public function store(Request $request){
    $request->validate([
        'Nom'=>["required","alpha_dash",'unique:contact,Nom'],
        'Email'=>["required","email"],
        'Phone'=>["required","numeric"]
    ]);
  }
}
