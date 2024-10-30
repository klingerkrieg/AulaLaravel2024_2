<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller {

    public function index(){
        $list = Book::paginate(2);
        return view("form", 
                    ["book"=>new Book(),
                            "list"=>$list,
                            "bookTypes"=>Book::$bookTypes
                        ]);
    }
    
    public function save(Request $request){
        $book = Book::create($request->all());
        return redirect(route("edit", $book->id));
    }
    

    public function edit(Book $book){
        $list = Book::paginate(2);
        return view("form", 
                        ["book"=>$book,
                               "list"=>$list,
                               "bookTypes"=>Book::$bookTypes]);
    }
    
    public function update(Book $book, Request $request){
        $book->update($request->all());
        return back();
    }


    public function delete(Book $book){
        $book->delete();
        return redirect(route('new'));
    }
    
    
    
}
