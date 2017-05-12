<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    //
    public function new($ISBN){
        return  view('comment/create')->withBook(\App\Book::find($ISBN))->withComments(\App\Comment::where('sISBN',$ISBN)->orderBy('id','DESC')->get());
    }

    public function store($ISBN,Request $request){
        $user_name = Auth::user()->name;
        $comment = new \App\Comment;
        $comment->user_name = $user_name;
        $comment->sISBN = $ISBN;
        $comment->title = $request->get('title');
        $comment->content = $request->get('content');
        if ($comment->save()){
            return redirect('/book/'.$ISBN);
        }else {
            return 'failed';
        }
    }
}
