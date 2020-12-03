<?php

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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
Route::get('/about', [\App\Http\Controllers\AboutController::class, 'index']);
Route::get('/juu', [\App\Http\Controllers\PostController::class, 'index']);
Route::get('/juu/{post}', [\App\Http\Controllers\PostController::class, 'show'])->name('juu.show');
Route::get('/portfolio', [\App\Http\Controllers\PortfolioController::class, 'index']);
Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'index']);
Route::post('/contact', [\App\Http\Controllers\ContactController::class, 'store']);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
