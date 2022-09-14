<?php

namespace Database\Seeders;

use App\Models\OrderProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $order_products = [
            [
                'order_id' => 1,
                'product_id' => 1,
                'quantity' => 3,
                'price' => '45.00',
            ],
            [
                'order_id' => 1,
                'product_id' => 2,
                'quantity' => 1,
                'price' => '23.50',
            ],
            [
                'order_id' => 1,
                'product_id' => 3,
                'quantity' => 2,
                'price' => '13.50',
            ],
            [
                'order_id' => 2,
                'product_id' => 1,
                'quantity' => 2,
                'price' => '45.00',
            ],
            [
                'order_id' => 3,
                'product_id' => 4,
                'quantity' => 1,
                'price' => '13.50',
            ],
            [
                'order_id' => 3,
                'product_id' => 5,
                'quantity' => 1,
                'price' => '0.00',
            ],
        ];
        foreach ($order_products as $op)
            OrderProduct::create($op);
    }
}