<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    //index controller
    public function index(){
       $books = Book::all();
       return view("books.index")
        ->with('books',$books);
    }

    //for showing book information
    public function show($id){
        $book = Book::find($id);
        return view('books.show')
        ->with('book',$book);
    }
}
