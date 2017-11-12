<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdoptionController extends Controller
{

    //
    public function index(){
        return view('adoption.index')->withTest('test123test');
    }

    public function create(){
        return view('adoption.create');
    }

    public function store(Request $request){
        $user_id = Auth::user()->id;
        $this->validate($request, [
            'detail' => 'required',
            'contact' => 'required',
            'title' => 'required',
            'category' => 'required',
            'vaccination' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $book = new \App\Book;
        $book->name = $request->get('name');
        $book->sISBN = $request->get('sISBN');
        $book->info = $request->get('info');
        $book->amount = $request->get('amount');
        $book->base_price = $request->get('base_price');
        $book->sale_price = $request->get('sale_price');
        $book->brief = $request->get('brief');
        $book->img = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'),$book->img);

        if ($book->save()) {
            return redirect('admin/book');
        } else {
            return redirect()->back()->withInput()->withErrors('保存失败！');
        }


    }

}
