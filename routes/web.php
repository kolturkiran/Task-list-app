<?php

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;
use Illuminate\Support\Facades\Route;




Route::get('/tasks', function () {
    return view('index', [
      'tasks'=> Task::latest()->paginate(7)
    ]);
})->name('tasks.index');

Route::get('/tasks/create', function(){
  return view('create');
})->name('tasks.create');

Route::delete('tasks/{task}/delete', function(Task $task, TaskRequest $request) {
  $task->delete();
  return redirect()->route('tasks.index')
  ->with('success', 'Task deleted successfully!');
})->name('tasks.destroy');

Route::get('/tasks/{task}/edit', function(Task $task){
  return view('edit', ['task'=>$task]);
})->name('tasks.edit');

Route::put('tasks/{task}', function(Task $task, TaskRequest $request) {
  $task->update($request->validated());
  return redirect()->route('tasks.show', ['task' => $task])
  ->with('success', 'Task updated successfully!');
})->name('tasks.update');

Route::get('/tasks/{task}', function(Task $task) {
    return view('show', ['task' => $task]);
})->name('tasks.show');

Route::post('tasks', function(TaskRequest $request) {
  $task = Task::create($request->validated());

  return redirect()->route('tasks.show', ['task' => $task->id])
  ->with('success', 'Task created successfully!');
})->name('tasks.store');

Route::fallback(function(){
    return "Still got somewhere!";
});