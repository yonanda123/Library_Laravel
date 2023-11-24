<?php

use App\Http\Controllers\BookshelfController;
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
Route::get('/', function () {
    return view('welcome');
});
Route::get('/bookshelf', [BookshelfController::class, 'index'])->name('bookshelf');
Route::get('/bookshelf-entry', [BookshelfController::class, 'create'])->name('createBookshelf');
Route::post('/bookshelf-entry', [BookshelfController::class, 'store'])->name('storeBookshelf');
Route::get('/bookshelf-edit/{id}', [BookshelfController::class, 'edit'])->name('editBookshelf');
Route::post('/bookshelf-edit/{id}', [BookshelfController::class, 'update'])->name('updateBookshelf');
Route::get('/bookshelf-delete/{id}', [BookshelfController::class, 'delete'])->name('deleteBookshelf');
Route::get('/bookshelf-destroy/{id}', [BookshelfController::class, 'destroy'])->name('destroyBookshelf');
Route::get('/bookshelf-print', [BookshelfController::class, 'print'])->name('printBookshelf');

Route::get('/book', [BookController::class, 'index'])->name('book');
Route::get('/book-entry', [BookController::class, 'create'])->name('createBook');
Route::post('/book-entry', [BookController::class, 'store'])->name('storeBook');
Route::get('/book-edit/{id}', [BookController::class, 'edit'])->name('editBook');
Route::post('/book-edit/{id}', [BookController::class, 'update'])->name('updateBook');
Route::get('/book-delete/{id}', [BookController::class, 'delete'])->name('deleteBook');
Route::get('/book-destroy/{id}', [BookController::class, 'destroy'])->name('destroyBook');
Route::get('/book-print', [BookController::class, 'print'])->name('printBook');
