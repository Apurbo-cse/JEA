<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

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
Route::get('/gallery', [FrontendController::class, 'gallery'])->name('gallery');





Route::group(['prefix' => '/', 'as' => 'web.', 'middleware' => ['auth']], function () {

    Route::get('/profile', [FrontendController::class, 'index'])->name('index');

});




// Route::get('/profile', function () {
//     return view('user-dashboard');
// })->middleware(['auth'])->name('user.dashboard');

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
