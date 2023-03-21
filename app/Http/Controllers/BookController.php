<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;



class BookController extends Controller
{

public function getAllBooks() {
    return response()->json(Book::join('authors', 'author_id', '=', 'authors.id')->select('books.id','title','published_date','name')->get());
}

public function getOneBook($id) {
    return response()->json(Book::find($id));
}

public function createBook(Request $request) {
    // validate
    $this->validate($request, [
    'title' => 'required',
    'author_id' => 'required|integer',
    'published_date' => 'required|date'
    ]);
    $book = Book::create($request->all());
     return response()->json($book, 201);
}

public function updateBook(Request $request) {
    $book = Book::findOrFail($id);
    $book->update($request->all());
    return response()->json($book, 200);
}

public function deleteBook($id) {
    Book::findOrFail($id)->delete();
    return response('Deleted successfully', 200);
}
}