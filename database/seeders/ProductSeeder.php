<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $name['en'] = 'Honey Sidr grade 1';
        $name['ar'] = 'عسل سدر يمني درجة اولى';
        $product =
            [
            'id' => 1,
            'name' => $name,
            'category_id' => 1,
            'brand_id' => 1,
            'excerpt' => 'عسل سدر يمني درجة اولى من افضل مزارع العسل اليمني',
            'stock' => 5,
            'price' => 45,
            'buy_price' => 35,
            'description' => 'عسل سدر يمني درجة اولى من افضل مزارع العسل اليمني',
        ];
        Product::create($product);

        $name['en'] = 'Royal Sidr Honey';
        $name['ar'] = 'عسل سدر ملكي يمني';
        $product =
            [
            'id' => 2,
            'name' => $name,
            'category_id' => 1,
            'brand_id' => 2,
            'excerpt' => 'عسل سدر ملكي يمني درجة اولى من افضل مزارع العسل اليمني',
            'stock' => 5,
            'price' => 100,
            'buy_price' => 90,
            'description' => 'عسل سدر ملكي يمني درجة اولى من افضل مزارع العسل اليمني',
        ];
        Product::create($product);

        $name['en'] = 'Firaz natural Honey';
        $name['ar'] = 'عسل فرز اصلي';
        $product =
            [
            'id' => 3,
            'name' => $name,
            'category_id' => 1,
            'brand_id' => 1,
            'excerpt' => 'عسل فرز يمني معاسل المذاق الشافي',
            'stock' => 5,
            'price' => 100,
            'buy_price' => 90,
            'description' => 'عسل فرز يمني معاسل المذاق الشافي من افضل مزارع العسل اليمني',
        ];
        Product::create($product);

        $name['en'] = 'Mocha Yemeni Coffee';
        $name['ar'] = 'قهوة المخأ اليمنية';
        $product =
            [
            'id' => 4,
            'name' => $name,
            'category_id' => 2,
            'brand_id' => 3,
            'excerpt' => 'اجود انواع القهوة في العالم',
            'stock' => 10,
            'price' => '13.5',
            'buy_price' => 10,
            'description' => "Best coffee in the world",
        ];
        Product::create($product);

        $name['en'] = 'Yemeni Coffee beans';
        $name['ar'] = 'البن اليمني الفاخر';
        $product =
            [
            'id' => 5,
            'name' => $name,
            'category_id' => 2,
            'brand_id' => 3,
            'excerpt' => 'البن اليمني الفاخر',
            'stock' => 10,
            'price' => '13.5',
            'buy_price' => 10,
            'description' => "Best coffee beans in the world",
        ];
        Product::create($product);

        $name['en'] = 'Fresh Figs';
        $name['ar'] = 'تين طازج';
        $product =
            [
            'id' => 6,
            'name' => $name,
            'category_id' => 3,
            'brand_id' => 4,
            'excerpt' => 'التين اليمني الفاخر',
            'stock' => 10,
            'price' => '23.5',
            'buy_price' => 20,
            'description' => "Best Yemeni figs enriches with vitamins",
        ];
        Product::create($product);

        $name['en'] = 'colored Sanaa grapes';
        $name['ar'] = 'عنب صنعاني';
        $product =
            [
            'id' => 7,
            'name' => $name,
            'category_id' => 3,
            'brand_id' => 4,
            'excerpt' => 'عنب صنعاني يمني',
            'stock' => 10,
            'price' => '13.5',
            'buy_price' => 10,
            'description' => "grapes <strong>fresh</strong> fruit",
        ];
        Product::create($product);

        $name['en'] = 'Prickly pear';
        $name['ar'] = 'تين شوكي يمني';
        $product =
            [
            'id' => 8,
            'name' => $name,
            'category_id' => 3,
            'brand_id' => 4,
            'excerpt' => 'Prickly pear',
            'stock' => 10,
            'price' => '50',
            'buy_price' => '100.00',
            'description' => 'Yemeni prickly pear',
        ];
        Product::create($product);

        $name['en'] = 'Dry grape';
        $name['ar'] = 'زبيب يمني عاصمي';
        $product =
            [
            'id' => 9,
            'name' => $name,
            'category_id' => 3,
            'brand_id' => 4,
            'excerpt' => 'زبيب يمني درجة اولى',
            'stock' => 10,
            'price' => '50',
            'buy_price' => '100.00',
            'description' => 'زبيب يمني درجة اولى جميع الانواع',
        ];
        Product::create($product);

        $name['en'] = 'Cinnamon';
        $name['ar'] = 'القرفة';
        $product =
            [
            'id' => 10,
            'name' => $name,
            'category_id' => 4,
            'brand_id' => 5,
            'excerpt' => 'القرفة اليمنية',
            'stock' => 10,
            'price' => '50',
            'buy_price' => '120.00',
            'description' => 'قرفة يمني درجة اولى',
        ];
        Product::create($product);

    }
}