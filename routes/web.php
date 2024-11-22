<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get("/",[BookController::class,'index'])->name('books.index');
Route::get('books/show/{id}', [BookController::class, 'show'] )->name('books.show');
//for creating a new book
Route::get('books/create', [BookController::class, 'create'])->name('books.create') ;
//for storing a new book data into the database
Route::post('/books', [BookController::class, 'store'])->name('books.store') ;

Route::get('books/edit/{id}', [BookController::class, 'edit'])->name('books.edit') ;
Route::post('books/update', [BookController::class,'update'])->name('books.update') ;

