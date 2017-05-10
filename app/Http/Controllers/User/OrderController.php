<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{

    public function index(){
        $name = Auth::user()->name;
        $results = \App\Order::where('user_name',$name)->get();
        return $results;
    }

    //
    public function new_order($ISBN){
        $name = Auth::user()->name;
        // return 'creating a new order for '.$name.' book isbn is '.$ISBN;
        return view('order/create')->withBook(\App\Book::find($ISBN));
    }

    public function store_order($ISBN , Request $request){
        $name = Auth::user()->name;
        $book = \App\Book::find($ISBN);

        $this->validate($request, [
            'name' => 'required|max:255',
            'address' => 'required',
            'tel' => 'required|numeric',
            'amount' => 'integer',
        ]);

        // check storage and return error page if lacking storage;
        $amount = $request->get('amount');
        if($book->amount < $amount){
            return redirect()->back()->withInput()->withErrors('库存不足！ 目前库存： '.$book->amount);
        }

        $order = new \App\Order;
        $order->true_name = $request->get('name');
        $order->amount = $amount;
        $order->tel = $request->get('tel');
        $order->address = $request->get('address');
        $order->note = $request->get('note');
        if(!$order->note){
            $order->note = 'default' ;
        }
        $order->sISBN = $ISBN;
        $order->status = 0;
        $order->user_name = $name;
        $order->price_per = $book->sale_price;


        if ($order->save()) {
            $book->amount = $book->amount - $amount;
            $book->save();
            return redirect('my/order');
        } else {
            return redirect()->back()->withInput()->withErrors('保存失败！');
        }




        return ;
    }
}
