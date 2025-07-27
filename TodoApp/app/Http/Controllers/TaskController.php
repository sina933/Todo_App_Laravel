<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index(){

        $tasks=Task::auth()->user()->tasks;
        return view('tasks.index',compact('tasks'));
    }
}
