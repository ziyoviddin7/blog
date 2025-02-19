<?php

use App\Http\Controllers\Task\CreateController;
use App\Http\Controllers\Task\IndexController;
use App\Http\Controllers\Task\StoreController;
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

Route::group(['namespace' => 'App\Http\Controllers\Task'], function() {
    Route::get('/tasks', IndexController::class)->name('task.index');
    Route::get('/tasks/create', CreateController::class)->name('task.create');

    Route::post('/tasks', StoreController::class)->name('task.store');
});

