<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;

class TaskController extends Controller
{

    public function __construct()
    {
            $this->middleware('auth')->except(['index']);
            $this->middleware('can:isAdmin')->only(['store','update','edit','create']);
    }

    function index(){

        $task=Task::All();
        return view(RouteServiceProvider::HOME,compact('task'));
    }
    public function create(){

        return view('pages.create');
}
    function store(Request $request){

    $task = new Task();
    $task->Task = $request->Task;
    $task->save();
    if( $task->save()){
    return redirect('task');
    }
    }
}
