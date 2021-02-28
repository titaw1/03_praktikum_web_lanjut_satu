<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
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
Route::get('/',  [HomeController::class,'home']);

Route::prefix('category')->group(function () {
    Route::get('/{id}', [ProductController::class,'product']);
});

Route::get('/news/{id?}', [NewsController::class, 'news']);

Route::prefix('program')->group(function () {
    Route::get('/{id}', [ProgramController::class,'program']);
});

Route::get('/about-us',  [AboutController::class,'about']);

Route::resource('contact', ContactController::class);
