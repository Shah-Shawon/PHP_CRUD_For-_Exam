<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get("books",[BookController::class,'index'])->name('books.index');
Route::get('books/show/{id}', [BookController::class, 'show'] );
