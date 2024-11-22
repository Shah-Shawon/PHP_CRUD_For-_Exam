@extends('layout', ['title' => 'Home'])

    @section('page-content')
    <h2>Book List</h2>

    <div class="row mt-2">

        <div class="col-lg-10">
            Scarch Functionality
        </div>

        <div class="col-lg-2">
            <p class="text-end">
                <a href="{{route('books.create')}}" class="btn btn-primary">Add Book</a>
            </p>
        </div>

    </div>




    <table class ='table table-striped'>
        <tr>
        <th>ID </th>
        <th>Title</th>
        <th>Author</th>
        <th>ISBN</th>
        <th>Stock</th>
        <th>Price</th>
        <th>Action</th>

        </tr>

        @foreach ($books as $book)
            <tr>
                <td>{{$book->id}}</td>
                <td>{{$book->title}}</td>
                <td>{{$book->author}}</td>
                <td>{{$book->isbn}}</td>
                <td>{{$book->stock}}</td>
                <td>{{$book->price}}</td>
                <td>
                    <a href="{{url('books/'.'show/'.$book->id)}}"> View </a>
                    <a href="{{url('books/'.'edit/'.$book->id)}}"> Edit </a>
        
                    <form method="post" action="{{route('books.destroy' )}}" onsubmit="return confirm ('Are you sure to delete this book ?') ">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="id" value="{{$book->id}}">
                    <input type="submit" value="Delete" class="btn btn-link"></input>
                    </form>

                </td>
            </tr>

        @endforeach

    </table>
    {{$books->links()}}
    @endsection
