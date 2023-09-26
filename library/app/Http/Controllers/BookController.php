<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function index()
    {
        $book = response()->json(Book::all());
        return $book;
    }
    public function show($id)
    {
        $book = response()->json(Book::find($id));
        return $book;
    }
    public function destroy($id)
    {
        Book::find($id)->delete();
        return redirect('/book/list');
    }

    public function store(Request $request)
    {
        $book = new Book();
        $book->author = $request->author;
        $book->title = $request->title;
        $book->pieces = $request->pieces;
        $book->save();
        return redirect('/book/list');
    }
    public function update(Request $request, $id)
    {
        $book=Book::find($id);
        $book->author = $request->author;
        $book->title = $request->title;
        $book->pieces = $request->pieces;
        $book->save();
        return redirect('/book/list');
    }

    /*public function editview ($id){
        $book = Book::find ($id); 
        return view('books.edit', ['book' => $book]);
    }
    public function listview(){
        $book = Book::all(); 
        return view('books.list', ['book' => $book]);
    } 
    public function newView(){
        $book = Book::all(); 
        return view ('books.new', ['book' => $book]); 
    }
    */
}

