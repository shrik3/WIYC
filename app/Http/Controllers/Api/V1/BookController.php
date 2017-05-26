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
            $book['base_price'] = 'x';
            $book['img']=url('images/'.$book['img']);
        }
        $response = [];
        $response['totalCount'] = count($books);
        $response['list'] = $books;
        return str_replace("\\/" , "/" , json_encode($response));
        return $response;

    }
}
