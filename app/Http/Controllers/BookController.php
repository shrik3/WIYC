<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function index(){
        //return \App\Book::all();
        return view('book/index')->withBooks(\App\Book::all());
    }

    public function show($ISBN){
        // $book = \App\Book::with('comments')->find($ISBN);
        return  view('book/show')->withBook(\App\Book::find($ISBN))->withComments(\App\Comment::where('sISBN',$ISBN)->orderBy('id','DESC')->get());
    }
}
