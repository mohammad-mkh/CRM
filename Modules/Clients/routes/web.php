<?php

use Illuminate\Support\Facades\Route;
use Modules\Clients\App\Http\Controllers\ClientsController;

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

Route::group(["middleware"=>["auth"]], function () {
    Route::get("clients/filter/{filter?}",[ClientsController::class,'filter'])->name("clients.filter");
    Route::resource('clients', ClientsController::class)->names('clients');
});
