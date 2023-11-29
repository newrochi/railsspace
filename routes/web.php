<?php

use App\Http\Controllers\SiteController;
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

Route::get('/', [SiteController::class,'index'])->name('site.index');
Route::get('/about', [SiteController::class,'about'])->name('site.about');
Route::get('/help', [SiteController::class,'help'])->name('site.help');

/* Route::get('/site',[SiteController::class,'index']);
Route::get('/site/about',[SiteController::class,'about']);
Route::get('/site/help',[SiteController::class,'help']); */
