<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\GalleryController;
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

Route::get('/dashboard', function () {
    return view('admin.home.home');
})->middleware(['auth'])->name('admin.dashboard');


Route::group(['prefix' => 'dashboard/', 'as' => 'admin.', 'middleware' => ['auth']], function () {

    Route::resource('slider', SliderController::class);
    Route::resource('gallery', GalleryController::class);


    Route::group(['prefix' => 'category/', 'as' => 'category.'], function () {
        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::get('create', [CategoryController::class, 'create'])->name('create');
        Route::get('edit', [CategoryController::class, 'edit'])->name('edit');
    });

});
