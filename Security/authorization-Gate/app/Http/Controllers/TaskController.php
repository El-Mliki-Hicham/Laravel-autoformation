<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Access\Response as AccessResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Termwind\Components\Dd;

class TaskController extends Controller
{

    public function __construct()
    {
            // $this->middleware('can:isAdmin')->except(['index']);
            // $this->middleware('can:isAdmin')->only(['store','update','edit','create']);
        }

        function index(){

            $task=Task::All();
            return view(RouteServiceProvider::HOME,compact('task'));
        }
        public function create(){
            // $this->authorize("isAdmin");
        // Gate::allows("isAdmin")? AccessResponse::allow() : abort(403);

        return view('pages.create');
}
    function store(Request $request){
// dd( auth()->user()->id);
    $task = new Task();
    $task->Task = $request->Task;
    $task->users_id = auth()->user()->id;
    $task->save();
    if( $task->save()){
    return redirect('task');
    }
    }
}
