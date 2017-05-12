<?php

namespace  App\Traits ;

trait StatusTools{

    public function get_order_status($status_id){
        $status = [
            -2 => 'deleted',
            -1 => 'failed',
            0  => 'unpaid',
            1  => 'paid',
            2  => 'pending',
            3  => 'finished',

        ];

        return $status[$status_id];
    }

    public function complete_order_info($orders){
        foreach($orders as $order){
            $book = \App\Book::find($order->sISBN);
            $order->img = $book->img;
            $order->bookname = $book->name;
            $order->bookinfo = $book->info;
            $order->status = $this->get_order_status($order->status);
        }
        return $orders;
    }
}
