<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;

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

Route::get('/', [BooksController::class, 'index'])->name('index');
Route::get('/crea', [BooksController::class, 'create'])->name('create');
Route::post('/salva', [BooksController::class, 'save'])->name('save');
Route::get('{book}/dettagli', [BooksController::class, 'show'])->name('show');
