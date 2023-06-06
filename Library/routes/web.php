<?php

use App\Http\Controllers\AuthorController;
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

Route::redirect('/','/book');
Route::get('/book', [BooksController::class, 'index'])->name('index');
Route::get('/book/crea', [BooksController::class, 'create'])->name('create');
Route::post('/book/salva', [BooksController::class, 'save'])->name('save');
Route::get('/book/{book}/dettagli', [BooksController::class, 'show'])->name('show');

Route::get('/book/{book}/modifica', [BooksController::class, 'edit'])->name('edit');
Route::put('/book/{book}/aggiorna', [BooksController::class, 'update'])->name('update');
Route::delete('/book/{book}', [BooksController::class, 'destroy'])->name('destroy');

/*
Route::resource('book', BooksController::class, [

    'names' => [
      'index' => 'index',
      'store' => 'store',
      'create' => 'create',
      'show' => 'show',
      'edit' => 'edit',
      'update' => 'update',
      'destroy' => 'destroy',
    ]
  ]);
*/
//Route::resource('book', BooksController::class);

Route::resource('author', AuthorController::class);