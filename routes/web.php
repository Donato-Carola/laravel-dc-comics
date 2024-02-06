<?php

use App\Http\Controllers\Guest\ComicController as GuestComicController ;
use App\Http\Controllers\Admin\ComicController as AdminComicController ;
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


Route::get('/', function () { return view('pages.home');
})->name('pages.home');


//Route::resource('comics', ComicController::class);

Route::get('/comics', [GuestComicController::class, 'index'])->name('Guest.comics.index');
Route::get('/comics/create', [GuestComicController::class, 'create'])->name('Guest.comics.create');
Route::post('/comics', [GuestComicController::class, 'store'])->name('Guest.comics.store');


Route::get('/comics/{id}', [GuestComicController::class, 'show'])->name('Guest.comics.show');
