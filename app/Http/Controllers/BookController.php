<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){

        $list = Book::paginate(2);

        return view("form", ["list"=>$list]);
    }
    
    public function save(Request $request){
        $book = Book::create($request->all());
        #dd($book);
        return redirect()->back();
    }
    
}
