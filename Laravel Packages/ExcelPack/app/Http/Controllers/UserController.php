<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Imports\UsersImport;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return view('index',compact('user'));
    }

    public function export()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
    public function import(Request $request)
    {
        Excel::import(new UsersImport, $request->file);
        return redirect()->back();
    }
}
