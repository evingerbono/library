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
        $kategoria = new Book();
        $kategoria->id = $request->id;
        $kategoria->Elnevezés = $request->Elnevezés;
        $kategoria->save();
        return redirect('/kategoria/list');
    }
    public function update(Request $request, $id)
    {
        $kategoria=Book::find($id);
        $kategoria->id = $request->id;
        $kategoria->Elnevezés = $request->Elnevezés;
        $kategoria->save();
        return redirect('/kategoria/list');
    }

    public function editview ($id){
        $kategoria = Book::find ($id); 
        return view('kategoriak.edit', ['kategoria' => $kategoria]);
    }
    public function listview(){
        $kategoria = Book::all(); 
        return view('kategoriak.list', ['kategoria' => $kategoria]);
    } 
    public function newView(){
        $book = Book::all(); 
        return view ('kategoriak.new', ['kategoria' => $book]); 
    }
}

