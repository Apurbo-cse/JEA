<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\UserController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [FrontendController::class, 'index'])->name('index');

// About View
Route::get('about',[FrontendController::class, 'about'])->name('about');

// Engineers View
Route::group(['prefix'=>'engineers'], function (){
    Route::get('msc',[FrontendController::class, 'msc'])->name('msc');
    Route::get('bsc',[FrontendController::class, 'bsc'])->name('bsc');
    Route::get('bsc-diploma',[FrontendController::class, 'bsc_diploma'])->name('bsc_diploma');
    Route::get('diploma',[FrontendController::class, 'diploma'])->name('diploma');
});

// Route::group(['prefix'=>'profile'], function (){
//     Route::get('/my-profile',[FrontendController::class, 'index'])->name('index');
// });


Route::get('/gallery', [FrontendController::class, 'gallery'])->name('gallery');


// Route::middleware('auth')->group(function () {
//     Route::resource('user', UserController::class);
//  });


Route::group(['prefix' => '/', 'as' => 'web.', 'middleware' => ['auth']], function () {
    Route::get('/home', [FrontendController::class, 'index'])->name('index');
    Route::resource('profile', UserController::class);
});



// Route::get('/profile', function () {
//     return view('user-dashboard');
// })->middleware(['auth'])->name('user.dashboard');

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
