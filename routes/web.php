<?php

use App\Http\Controllers\Category\CreateController as CategoryCreateController;
use App\Http\Controllers\Category\StoreController as CategoryStoreController;
use App\Http\Controllers\Category\DestroyController as CategoryDestroyController;
use App\Http\Controllers\Category\ShowController as CategoryShowController;


use App\Http\Controllers\Task\CreateController;
use App\Http\Controllers\Task\DestroyController;
use App\Http\Controllers\Task\EditController;
use App\Http\Controllers\Task\IndexController;
use App\Http\Controllers\Task\SearchController;
use App\Http\Controllers\Task\ShowController;
use App\Http\Controllers\Task\StoreController;
use App\Http\Controllers\Task\UpdateController;
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
    Route::get('/tasks/{task}', ShowController::class)->name('task.show');
    Route::get('/tasks/{task}/edit', EditController::class)->name('task.edit');
    Route::patch('/tasks/{task}', UpdateController::class)->name('task.update');
    Route::delete('/tasks/{task}', DestroyController::class)->name('task.delete');
});

Route::group(['namespace' => 'App\Http\Controllers\Category'], function() {
    Route::get('/category/create', CategoryCreateController::class)->name('category.create');
    Route::get('/category/{category}', CategoryShowController::class)->name('category.show');
    Route::post('/category', CategoryStoreController::class)->name('category.store');
    Route::delete('/category{category}', CategoryDestroyController::class)->name('category.delete');
});

