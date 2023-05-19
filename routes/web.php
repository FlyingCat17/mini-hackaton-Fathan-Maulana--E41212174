<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\CarTypeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PekerjaanController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\PostCategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'guest'], function () {
    Route::group(['prefix' => '/auth'], function () {
        Route::get('/login', [LoginController::class, 'index'])->name('login.create');
        Route::post('/login', [LoginController::class, 'store'])->name('login.store');

        Route::get('/register', [RegisterController::class, 'create'])->name('register.create');
        Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
        Route::get('/logout', [LoginController::class, 'abort']);
    });
});


Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::post('/logout', [LoginController::class, 'destroy'])->name('logout.destroy');
    Route::get('/logout', [LoginController::class, 'abort']);

    Route::prefix('/posts')->group(function () {
        Route::get('/', [PostController::class, 'index'])->name('posts.index');
    });

    Route::prefix('/post-category')->group(function () {
        Route::get('/', [PostCategoryController::class, 'index'])->name('post-category.index');
        Route::get('/create', [PostCategoryController::class, 'create'])->name('post-category.create');
        Route::post('/store', [PostCategoryController::class, 'store'])->name('post-category.store');
        Route::get('/{id}/edit', [PostCategoryController::class, 'edit'])->name('post-category.edit');
        Route::put('/{id}/update', [PostCategoryController::class, 'put'])->name('post-category.put');
        Route::delete('/{id}/destroy', [PostCategoryController::class, 'destroy'])->name('post-category.destroy');
    });

    Route::prefix('car')->as('car.')->group(function () {
        Route::prefix('type')->as('type.')->group(function(){
            Route::get('/', [CarTypeController::class, 'index'])->name('index');
            Route::get('/create', [CarTypeController::class, 'create'])->name('create');
            Route::post('/store', [CarTypeController::class, 'store'])->name('store');
            Route::get('/{id}/edit', [CarTypeController::class, 'edit'])->name('edit');
            Route::put('/{id}/update', [CarTypeController::class, 'put'])->name('put');
            Route::delete('/{id}/destroy', [CarTypeController::class, 'destroy'])->name('destroy');
        });

        Route::get('/', [CarController::class, 'index'])->name('index');
        Route::get('/create', [CarController::class, 'create'])->name('create');
        Route::post('/store', [CarController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [CarController::class, 'edit'])->name('edit');
        Route::put('/{id}/update', [CarController::class, 'put'])->name('put');
        Route::delete('/{id}/destroy', [CarController::class, 'destroy'])->name('destroy');
    });

    Route::get('/dropzone', [PostController::class, 'dropzone'])->name('dropzone.index');
    Route::post('/dropzone', [PostController::class, 'dropzoneStore'])->name('dropzone.store');
});

Route::get('/pendidikan', [PendidikanController::class, 'index'])->name('pendidikan.index');
Route::get('/pekerjaan', [PekerjaanController::class, 'index'])->name('pekerjaan.index');

Route::get('/test', function () {
    return view('admin.layouts.bootstrap.app');
});
