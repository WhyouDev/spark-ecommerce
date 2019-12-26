<?php

use Illuminate\Database\Seeder;
use App\Models\OrderDetailModel;
use Illuminate\Support\Facades\DB;

class OrderDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orderdetail = new OrderDetailModel();
        $orderdetail->orders_id       = "1";
        $orderdetail->products_id     = "1";
        $orderdetail->sub_qty         = "2";
        $orderdetail->price_subtotal  = "25000";
        $orderdetail->save();
    }
}
