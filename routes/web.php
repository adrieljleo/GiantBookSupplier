<?php

use App\Http\Controllers\BookController;
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

Route::get('/', [BookController::class, 'index'])->name('home');

Route::get('/{bookid}/detail', [BookController::class, 'detail'])->name('detail');

Route::get('/category/{catid}', [BookController::class, 'cat'])->name('cat');

Route::get('/publisher', [BookController::class, 'publisher'])->name('pub');

Route::get('/contact', [BookController::class, 'contact'])->name('contact');