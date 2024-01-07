<?php

use App\Models\Task;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });



// Route::get('/', function () use ($tasks) {
//     return view('index', [
//         'tasks' => $tasks
//     ]);
// })->name('tasks.index');

Route::get('/tasks', function (){
    return view('index', ['tasks' => Task::latest()->where('completed', true)->get()]);
})->name('tasks.index');

Route::view('/tasks/create', 'create')
    ->name('tasks.create');

Route::get('/tasks/{id}', function ($id) {

    return view('show', ['task' => Task::findOrFail($id)]);
})->name('tasks.show');

Route::post('tasks', function (Request $request) {
    $data = $request->validate([
        'title' => 'required|max:255',
        'description' => 'required',
        'long_description' => 'required'
    ]);

    $task = new Task;
    $task->title = $data['title'];
    $task->description = $data['description'];
    $task->long_description = $data['long_description'];

    $task->save();
    return redirect()->route('tasks.show', ['id' => $task->id])
        ->with('success', 'Task created successfully !');

})->name('tasks.store');


// Route::get('/test', function () {
//     return 'Hello';
// })->name('hello');

// Route::get('/hallo', function () {
//     return redirect()->route('hello');
// });

// Route::get('/greet/{name}', function ($name) {
//     return 'Hi '. $name . '!';
// });

// Route::fallback(function () {
//     return "Still got somewhere!";
// });

// GET
// POST
// PUT
// DELETE

