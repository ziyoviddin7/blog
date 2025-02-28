<?php

use App\Http\Controllers\Category\CreateController as CategoryCreateController;
use App\Http\Controllers\Category\StoreController as CategoryStoreController;
use App\Http\Controllers\Category\DestroyController as CategoryDestroyController;
use App\Http\Controllers\Category\ShowController as CategoryShowController;

use App\Http\Controllers\Task\CreateController;
use App\Http\Controllers\Task\DestroyController;
use App\Http\Controllers\Task\EditController;
use App\Http\Controllers\Task\IndexController;
use App\Http\Controllers\Task\ShowController;
use App\Http\Controllers\Task\StoreController;
use App\Http\Controllers\Task\UpdateController;
use App\Http\Controllers\User\LoginController;
use App\Http\Controllers\User\RegisterController;

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


Route::group(['namespace' => 'App\Http\Controllers\User'], function() {
    Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('user.register');
    Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

    Route::get('/login', [LoginController::class, 'create'])->middleware('guest')->name('user.login');
    Route::post('/login', [LoginController::class, 'store'])->middleware('guest');
    Route::post('/logout', [LoginController::class, 'destroy'])->middleware('auth')->name('user.logout');
});


Route::group(['namespace' => 'App\Http\Controllers\Task'], function() {
    Route::get('/tasks', IndexController::class)->middleware('auth')->name('task.index');
    Route::get('/tasks/create', CreateController::class)->middleware('auth')->name('task.create');

    Route::post('/tasks', StoreController::class)->middleware('auth')->name('task.store');
    Route::get('/tasks/{task}', ShowController::class)->middleware('auth')->name('task.show');
    Route::get('/tasks/{task}/edit', EditController::class)->middleware('auth')->name('task.edit');
    Route::patch('/tasks/{task}', UpdateController::class)->middleware('auth')->name('task.update');
    Route::delete('/tasks/{task}', DestroyController::class)->middleware('auth')->name('task.delete');
});

Route::group(['namespace' => 'App\Http\Controllers\Category'], function() {
    Route::get('/category/create', CategoryCreateController::class)->middleware('auth')->name('category.create');
    Route::get('/category/{category}', CategoryShowController::class)->middleware('auth')->name('category.show');
    Route::post('/category', CategoryStoreController::class)->middleware('auth')->name('category.store');
    Route::delete('/category{category}', CategoryDestroyController::class)->middleware('auth')->name('category.delete');
});


