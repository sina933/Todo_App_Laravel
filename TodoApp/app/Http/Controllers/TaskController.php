<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\User;

class TaskController extends Controller
{
    public function index(){

        $tasks=auth()->user()->tasks;
        return view('tasks.index',compact('tasks'));
    }

    public function store(Request $request){

        $request->validate(['title'=>'required|string|max:255']);
        auth()->user()->tasks()->create(['title'=>$request->title]);
        return redirect()->route('dashboard');
    }

    public function update(Request $request,Task $task){

        if($task->user_id!=auth()->user()->id){
            abort(403);
        }

        $request->validate([
            'is_complete' => 'nullable|boolean',
        ]);

        $task->is_complete = $request->input('is_complete', false);
        $task->save();
        return redirect()->route('dashboard')->with('success', 'تسک با موفقیت به‌روزرسانی شد.');

        
    }
    public function destroy(Task $task){
        
        $task->delete();
        
        return redirect()->route('dashboard')->with('success', 'کار با موفقیت حذف شد.');
        


    }




    }



    

