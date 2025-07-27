<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

//Route::middleware('auth')->group(function () {
  //  Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
    //Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
//});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

     Route::get('/tasks', [TaskController::class, 'index'])->name('dashboard');

     Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');

     Route::patch('/tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');
     
     Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');


});
