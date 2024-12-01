<?php

use App\Models\Task;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;


Route::get('/',function(){
    return redirect()->route('tasks.index');
});

Route::get('/tasks', function (){
    return view('index',[
        'tasks' => Task::latest()->get()
    ]);
})->name('tasks.index');

Route::view('/tasks/create','create')->name('tasks.create');

Route::get('tasks/{id}', function($id){
    return view('show',[
        'task' => Task::findOrFail($id)
    ]);
})->name('tasks.show');

Route::post('/tasks', function(Request $request){
    dd($request->all());
})->name('tasks.store');

Route::fallback(function(){
    return 'Still';
});
