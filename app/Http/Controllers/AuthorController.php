<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
use Illuminate\Http\Request;
use App\Author;
use Session;
class AuthorController extends Controller
{
    public function listAllAuthors() {
        $authors = Author::all();
        return view("authors.list", ["authors" => $authors]);
    }

    public function showFormAddAuthor(){
        return view("authors.add");
    }

    public function createAuthor(Request $request){
        $author = new Author();
        $author->name = $request->input("name");
        $author->save();
        return redirect(route("author.list"));
    }

    public function showFormEditAuthor(Request $request, $id){
        $author = Author::find($id);
        return view("authors.edit", ["author" => $author]);
    }

    public function updateAuthor(Request $request, $id){
        $author = Author::find($id);
        $author->name = $request->input("name");
        $author->save();
        return redirect(route("author.list"));
    }

    public function showFormDeleteAuthor(Request $request, $id){
        $author = Author::find($id);
        if (empty($author)){
            echo "loi";
        }else{
            return view("authors.delete", ["author" => $author]);
        }


    }

    public function deleteAuthor(Request $request, $id){

        $author = Author::with('books')->find($id);
        $count = $author->books()->count();
        if ($count >0 ){
            Session::flash('thongbao', 'Không Xóa Được Do Tác Giả Đã Có Sách');
            return redirect(route("author.list"));
        }
        else{
            $author->delete();
            return redirect(route("author.list"));
        }
    }

}
