<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;

class BookController extends Controller
{
 public function showAllBooks() {
    return response()->json(Book::join('authors', 'author_id', '=', 'authors.id')->select('Books.id', 'title')->get()); 
 }

 public function showOneBook($id) {
    return response()->json(Book::find($id)); 

}
}

