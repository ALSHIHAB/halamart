<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slides = array(
            "slider/slider1.jpg",
            "slider/slider2.jpg",
            "slider/slider3.jpg",
            "slider/slider4.jpg",
        );

        $settings = [
            [
                'name' => 'name_en',
                'value' => 'Halamart',
            ],
            [
                'name' => 'name_ar',
                'value' => 'هـلا مارت',
            ],
            [
                'name' => 'description_en',
                'value' => 'eCommerce website, multilingual, build with top-notch technology. Copyright: Halamart',
            ],
            [
                'name' => 'description_ar',
                'value' => 'متجر الكتروني متعدد اللغات مبني على احدث التقنيات. جميع الحقوق محفوظة - هــلا مارت',
            ],
            [
                'name' => 'keywords_en',
                'value' => 'halamart, eCommerce website, multilingual, Halamart, halamart, Malaysia, Kuala Lumpor',
            ],
            [
                'name' => 'keywords_ar',
                'value' => 'متجر، هــلا مارت منتجات متنوعة، ماليزيا، كوالالمبور',
            ],

            [
                'name' => 'email',
                'value' => 'contact@halamart.biz',
            ],
            [
                'name' => 'contact',
                'value' => '601139370239',
            ],
            [
                'name' => 'country_en',
                'value' => 'Malaysia',
            ],
            [
                'name' => 'country_ar',
                'value' => 'ماليزيا',
            ],
            [
                'name' => 'city_en',
                'value' => 'Kuala Lumpur',
            ],
            [
                'name' => 'city_ar',
                'value' => 'كوالالمبور',
            ],
            [
                'name' => 'post_code',
                'value' => '53000',
            ],
            [
                'name' => 'logo_en',
                'value' => 'halamart-red.png',
            ],
            [
                'name' => 'logo_ar',
                'value' => 'halamart-red-ar.png',
            ],
            [
                'name' => 'logo_transparent_en',
                'value' => 'halamart-white.png',
            ],
            [
                'name' => 'logo_transparent_ar',
                'value' => 'halamart-white-ar.png',
            ],
            [
                'name' => 'icon',
                'value' => 'favicon.png',
            ],
            [
                'name' => 'currency_en',
                'value' => 'YR',
            ],
            [
                'name' => 'currency_ar',
                'value' => 'ريال',
            ],
            [
                'name' => 'layout',
                'value' => 'basic',
            ],
            [
                'name' => 'whatsapp',
                'value' => '601139370239',
            ],
            [
                'name' => 'facebook',
                'value' => 'https://facebook/sindebad',
            ],
            [
                'name' => 'twitter',
                'value' => 'https://twitter/sindebad',
            ],
            [
                'name' => 'youtube',
                'value' => 'https://youtube/sindebad',
            ],
            [
                'name' => 'instagram',
                'value' => 'https://instagram/sindebad',
            ],
            [
                'name' => 'slider_images',
                'value' => json_encode($slides),
            ],
            [
                'name' => 'category_max_items',
                'value' => '8',
            ],
            [
                'name' => 'category_row_cells',
                'value' => '4',
            ],
            [
                'name' => 'trending_max_items',
                'value' => '8',
            ],
            [
                'name' => 'copy_right_en',
                'value' => 'Halamart. All rights reserved.',
            ],
            [
                'name' => 'copy_right_ar',
                'value' => 'هــلا مارت. جميع الحقوق محفوظة',
            ],
            [
                'name' => 'branches',
                'value' => json_encode([
                    [
                        'name' => 'Yemen, Ibb',
                        'address' => 'Main office, Taiz street, Ibb, Yemen',
                        'contact' => '04776333',
                        'email' => 'branch@company.com',
                    ],
                    [
                        'name' => 'Yemen, Taiz',
                        'address' => 'Taiz branch, General street, Yemen, Taiz',
                        'contact' => '04776333',
                        'email' => 'branch@company.com',
                    ],
                    [
                        'name' => 'Yemen, Sanaa',
                        'address' => 'Sanaa branch, Hadda street, Sanaa, Yemen',
                        'contact' => '04776333',
                        'email' => 'branch@company.com',
                    ],
                    [
                        'name' => 'Yemen, Aden',
                        'address' => 'Aden branch, beach street, Yemen, Aden',
                        'contact' => '04776333',
                        'email' => 'branch@company.com',
                    ],
                ]),
            ],
        ];
        Setting::insert($settings);
    }
}