<?php

use Illuminate\Database\Seeder;
use App\Models\OrderModel;
use Illuminate\Support\Facades\DB;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $order = new OrderModel();
        $order->orders_id       = "1";
        $order->users_id        = "1";
        $order->qty_total       = "2";
        $order->price_total     = "50000";
        $order->save();
    }
}
