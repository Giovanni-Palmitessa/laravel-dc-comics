<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\PageController;
use App\Http\Controllers\Guest\ComicController;

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

Route::get('/', [PageController::class, 'homepage'])->name('homepage');

Route::get('/comics', [ComicController::class, 'index'])->name('comics.index');

// per il restore del comic dopo l'eliminazione soft
Route::post('/comics/{comic}/restore', [ComicController::class, 'restore'])->name('comics.restore');

Route::resource('comics', ComicController::class);
