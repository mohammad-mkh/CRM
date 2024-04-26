<?php

use Illuminate\Support\Facades\Route;
use Modules\Tasks\App\Http\Controllers\TasksController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group([], function () {
    Route::get("tasks/filter/{filter?}",[TasksController::class,'filter'])->name("tasks.filter");
    Route::resource('tasks', TasksController::class)->names('tasks');
});
