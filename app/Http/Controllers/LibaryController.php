<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;
use App\Category;
use App\Book;

class LibaryController extends Controller
{
    public function listAllBooks() {
        $books = Book::all();
        return view("list", ["books" => $books]);
    }


    public function showFormAddBooks() {
        $books = Book::all();
        $category = Category::all();
        return view("books.add", ["books"=>$books]);
    }
}
