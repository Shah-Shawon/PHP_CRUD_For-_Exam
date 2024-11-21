<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Http\Controllers\books;

class BookController extends Controller
{
    //index controller
    public function index(){
       $books = Book::paginate(10);
       return view("books.index")
        ->with('books',$books);
    }

    //for showing book information
    public function show($id){
        $book = Book::find($id);
        return view('books.show')
        ->with('book',$book);
    }
    //for adding new book
    public function create(){
        return view('books.create');
    }
    //for store book information
    public function store(Request $request){


        $rules=[
            'title'=> 'required',
            'author'=> 'required',
            'isbn'=> 'required|digits:13',
            'price'=> 'required|numeric|min:0',
           'stock'=> 'required|integer|min:0',
        ];

        $request->validate($rules);

        $book = new Book();
        $book->title = $request->title;
        $book->author = $request->author;
        $book->isbn = $request->isbn;
        $book->price = $request->price;
        $book->stock = $request->stock;
        $book->save();

        //return redirect()->route('books.index');
        return redirect()->route('books.show' ,$book->id);



    }
}
