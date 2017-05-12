<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\StatusTools;


class OrderController extends Controller
{
    use StatusTools;
    //
    public function index(){
        $orders = \App\Order::orderBy('id','DESC')->get();
        $orders = $this->complete_order_info($orders);
        return view('admin/order/index')->withOrders($orders);
    }

    public function mark_as_paid($id){
        $order = \App\Order::find($id);
        $order->status = 1;
        if($order->save()){
            return redirect('admin/order/');
        } else {
            return redirect()->back()->withInput()->withErrors('保存失败！');
        }
    }

    public function delete($id){
        $order = \App\Order::find($id);
        $book = \App\Book::find($order->sISBN);
        if($order->status==0||$order->status==1){
            $book->amount = $book->amount + $order->amount;
            $order->status = -1;
        }

        if($order->status == 2){
            $order->status = -1;
        }

        if($order->status==3){
            return redirect()->back()->withInput()->withErrors('cannot delete a finished order！');
        }


        if($order->save()&&$book->save()){
            return redirect('admin/order/');
        } else {
            return redirect()->back()->withInput()->withErrors('保存失败！');
        }
    }

    public function mark_as_pended($id){
        $order = \App\Order::find($id);
        $order->status = 2;
        if($order->save()){
            return redirect('admin/order/');
        } else {
            return redirect()->back()->withInput()->withErrors('保存失败！');
        }
    }
}
