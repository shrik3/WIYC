<?php

namespace  App\Traits ;

trait StatusTools{

    public function get_order_status($status_id){
        $status = [
            -1 => 'failed',
            0  => 'unpaid',
            1  => 'pending',
            2  => 'finished',

        ];

        return $status[$status_id];
    }
}
