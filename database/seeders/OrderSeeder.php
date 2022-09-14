<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shipping_address = [
            'street' => 'No. 14, Taiz street',
            'country' => 'Yemen',
            'state' => '',
            'city' => 'IBB',
            'post_code' => '40400',
        ];
        $orders = [
            [
                'code' => date('Y') . date('m') . date('d') . '00001',
                'user_id' => 1,
                'payment_id' => 1,
                'shipping_id' => 1,
                'shipping_cost' => 5,
                'shipping_address' => json_encode($shipping_address),
                'subtotal' => '185.5',
                'total' => '190.5',
                'email' => 'customer@example.com',
                'phone' => '001111111',
                'status_id' => 2,
            ],
            [
                'code' => date('Y') . date('m') . date('d') . '00002',
                'user_id' => 2,
                'payment_id' => 2,
                'shipping_id' => 2,
                'shipping_cost' => 10,
                'shipping_address' => json_encode($shipping_address),
                'subtotal' => '90',
                'total' => '100',
                'email' => 'orders@halamart.net',
                'phone' => '0022222222',
                'status_id' => 2,
            ],
            [
                'code' => date('Y') . date('m') . date('d') . '00003',
                'user_id' => 2,
                'payment_id' => 1,
                'shipping_id' => 2,
                'shipping_cost' => 10,
                'shipping_address' => json_encode($shipping_address),
                'subtotal' => '13.5',
                'total' => '23.5',
                'email' => '',
                'phone' => '',
                'status_id' => 1,
            ],
        ];
        foreach ($orders as $order) {
            Order::create($order);
        }

    }
}