<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
    //
    public function index(){
        $books = \App\Book::all();
        foreach($books as $book){
            $book['img']=url('images'.$book['img']);
        }
        return $books;

    }
}
