<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookController extends Controller {
    //

    public function index() {
        return view('admin/book/index')->withBooks(\App\Book::all());
    }

    public function create() {
        return view('admin/book/create');
    }

    public function show($id) {
        return "details for book " . $id;
    }

    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required|max:255',
            'ISBN' => 'required|unique:books|max:255',
            'info' => 'required',
            'amount' => 'required|integer',
            'base_price' => 'required|integer',
            'sale_price' => 'required|integer',
            'brief' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $book = new \App\Book;
        $book->name = $request->get('name');
        $book->ISBN = $request->get('ISBN');
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
