<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::resource('/users', UserController::class);

//task
Route::get('/task', [TaskController::class, 'index'])->name('tasks');
Route::get('/task/create', [TaskController::class, 'create'])->name('create_task');
Route::post('/task/save', [TaskController::class, 'store'])->name('save_task');
Route::get('/task/show/{taskId}', [TaskController::class, 'show'])->name('task_show');
Route::get('/task/edit/{taskId}', [TaskController::class, 'edit'])->name('edit_task');
Route::put('/task/update/{taskId}', [TaskController::class, 'update'])->name('update_task');
Route::delete('/task/delete/{taskId}', [TaskController::class, 'destroy'])->name('delete_task');
