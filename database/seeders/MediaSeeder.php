<?php

namespace Database\Seeders;

use App\Models\Media;
use Illuminate\Database\Seeder;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // categories media
        $name['en'] = 'Yemeni Honey';
        $name['ar'] = 'العسل اليمني';
        $media =
            [
            'id' => 1,
            'name' => $name,
            'path' => 'categories/Yemeni-honey.jpg',
            'size' => '34000',
            'type' => 'Category',
            'item_id' => 1, //category id
            'description' => 'Yemeni Honey image',
        ];
        Media::create($media);

        $name['en'] = 'Yemeni coffee';
        $name['ar'] = 'القهوة اليمنية';
        $media =
            [
            'id' => 2,
            'name' => $name,
            'path' => 'categories/Yemeni-coffee.jpg',
            'size' => '34000',
            'type' => 'Category',
            'item_id' => 2,
            'description' => 'Coffee category image',
        ];
        Media::create($media);

        $name['en'] = 'Fruites';
        $name['ar'] = 'فواكه';
        $media =
            [
            'id' => 3,
            'name' => $name,
            'path' => 'categories/fruites.jpg',
            'size' => '34000',
            'type' => 'Category',
            'item_id' => 3,
            'description' => 'Yemeni fruites category image',
        ];
        Media::create($media);

        $name['en'] = 'Spices';
        $name['ar'] = 'البهارات';
        $media =
            [
            'id' => 4,
            'name' => $name,
            'path' => 'categories/spices.jpg',
            'size' => '34000',
            'type' => 'Category',
            'item_id' => 4,
            'description' => 'Yemeni spices category image',
        ];
        Media::create($media);

        //Brands media
        $name['en'] = 'halamart';
        $name['ar'] = 'هلا مارت';
        $media =
            [
            'id' => 5,
            'name' => $name,
            'path' => 'brands/halamart-red.png',
            'size' => '34000',
            'type' => 'Brand',
            'item_id' => 1,
            'description' => 'halamart image',
        ];
        Media::create($media);

        $name['en'] = 'Alshifaa honey';
        $name['ar'] = 'عسل الشفاء';
        $media =
            [
            'id' => 6,
            'name' => $name,
            'path' => 'brands/alshifaa.png',
            'size' => '34000',
            'type' => 'Brand',
            'item_id' => 2,
            'description' => 'alshifaa honey image',
        ];
        Media::create($media);

        $name['en'] = 'Moka';
        $name['ar'] = 'موكا';
        $media =
            [
            'id' => 7,
            'name' => $name,
            'path' => 'brands/moka.png',
            'size' => '34000',
            'type' => 'Brand',
            'item_id' => 3,
            'description' => 'moka image',
        ];
        Media::create($media);

        $name['en'] = 'Romman';
        $name['ar'] = 'رمان';
        $media =
            [
            'id' => 8,
            'name' => $name,
            'path' => 'brands/romman.png',
            'size' => '34000',
            'type' => 'Brand',
            'item_id' => 4,
            'description' => 'romman image',
        ];
        Media::create($media);

        $name['en'] = 'Spices hadhramout';
        $name['ar'] = 'بهارات حضرموت';
        $media =
            [
            'id' => 9,
            'name' => $name,
            'path' => 'brands/spices.png',
            'size' => '34000',
            'type' => 'Brand',
            'item_id' => 5,
            'description' => 'Spices image',
        ];
        Media::create($media);

        //products media
        $name['en'] = 'Honey sidr Yemeni';
        $name['ar'] = 'عسل سدر يمني';
        $media =
            [
            'id' => 10,
            'name' => $name,
            'path' => 'products/honey-sidr.jpg',
            'size' => '34000',
            'type' => 'Product',
            'item_id' => 1, //product id
            'description' => 'Yemeni Sidr honey',
        ];
        Media::create($media);

        $name['en'] = 'Royal sidr Yemeni';
        $name['ar'] = 'عسل سدر ملكي يمني';
        $media =
            [
            'id' => 11,
            'name' => $name,
            'path' => 'products/royal-sidr.jpg',
            'size' => '34000',
            'type' => 'Product',
            'item_id' => 2, //product id
            'description' => 'Yemeni royal Sidr honey',
        ];
        Media::create($media);

        $name['en'] = 'Firaz Yemeni Honey';
        $name['ar'] = 'عسل فرز يمني';
        $media =
            [
            'id' => 12,
            'name' => $name,
            'path' => 'products/firaz-honey.jpg',
            'size' => '34000',
            'type' => 'Product',
            'item_id' => 3, //product id
            'description' => 'Yemeni firaz honey',
        ];
        Media::create($media);

        $name['en'] = 'Mocha coffee';
        $name['ar'] = 'قهوة المخأ';
        $media =
            [
            'id' => 13,
            'name' => $name,
            'path' => 'products/mocha-coffee.jpg',
            'size' => '34000',
            'type' => 'Product',
            'item_id' => 4,
            'description' => 'mocha coffee product',
        ];
        Media::create($media);

        $name['en'] = 'Yemeni coffee beans';
        $name['ar'] = 'البن اليمني الفاخر';
        $media =
            [
            'id' => 14,
            'name' => $name,
            'path' => 'products/yemen-coffee-beans.jpg',
            'size' => '34000',
            'type' => 'Product',
            'item_id' => 5,
            'description' => 'yemeni coffee beans product',
        ];
        Media::create($media);

        $name['en'] = 'fresh figs';
        $name['ar'] = 'تين';
        $media =
            [
            'id' => 15,
            'name' => $name,
            'path' => 'products/figs.jpg',
            'size' => '34000',
            'type' => 'Product',
            'item_id' => 6,
            'description' => 'figs image',
        ];
        Media::create($media);

        $name['en'] = 'fresh grapes';
        $name['ar'] = 'عنب طازج';
        $media =
            [
            'id' => 16,
            'name' => $name,
            'path' => 'products/grapes.jpg',
            'size' => '34000',
            'type' => 'Product',
            'item_id' => 7,
            'description' => 'grapes image',
        ];
        Media::create($media);

        $name['en'] = 'prickly pear';
        $name['ar'] = 'الخدمات';
        $media =
            [
            'id' => 17,
            'name' => $name,
            'path' => 'products/prickly-pear.jpg',
            'size' => '34000',
            'type' => 'Product',
            'item_id' => 8,
            'description' => 'prickly pear image',
        ];
        Media::create($media);

        $name['en'] = 'dry grapes';
        $name['ar'] = 'زبيب يمني';
        $media =
            [
            'id' => 18,
            'name' => $name,
            'path' => 'products/dry-grape.jpg',
            'size' => '34000',
            'type' => 'Product',
            'item_id' => 9,
            'description' => 'زبيب يمني',
        ];
        Media::create($media);

        $name['en'] = 'cinnamon';
        $name['ar'] = 'قرفة';
        $media =
            [
            'id' => 19,
            'name' => $name,
            'path' => 'products/cinnamon.jpg',
            'size' => '34000',
            'type' => 'Product',
            'item_id' => 10,
            'description' => 'قرفة',
        ];
        Media::create($media);

    }
}