<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\User;

class TaskController extends Controller
{
    public function index(){

        $tasks=Task::auth()->user()->tasks;
        return view('tasks.index',compact('tasks'));
    }

    public function store(Request $request){

        $request->validate(['title'=>'required|string|max:255']);
        auth()->user()->tasks()->create(['title'=>$request->title]);
    }

    return redirect()->route('tasks.index');
}
