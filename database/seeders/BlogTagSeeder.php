<?php

namespace Database\Seeders;

use App\Models\BlogTag;
use Illuminate\Database\Seeder;

class BlogTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            [
                'name' => [
                    'en' => 'Marketing',
                    'ar' => 'التسويق',
                ],
            ],
            [
                'name' => [
                    'en' => 'Yemen',
                    'ar' => 'اليمن',
                ],
            ],
            [
                'name' => [
                    'en' => 'Halamart',
                    'ar' => 'هــلا مارت',
                ],
            ],
            [
                'name' => [
                    'en' => 'Trading',
                    'ar' => 'التجارة',
                ],
            ],
            [
                'name' => [
                    'en' => 'Money',
                    'ar' => 'المال',
                ],
            ],
            [
                'name' => [
                    'en' => 'Bussiness',
                    'ar' => 'الأعمال',
                ],
            ],
            [
                'name' => [
                    'en' => 'Shipping',
                    'ar' => 'الشحن',
                ],
            ],
            [
                'name' => [
                    'en' => 'Software',
                    'ar' => 'البرامجيات',
                ],
            ],
            [
                'name' => [
                    'en' => 'Services',
                    'ar' => 'الخدمات',
                ],
            ],
            [
                'name' => [
                    'en' => 'Transportation',
                    'ar' => 'المواصلات',
                ],
            ],
        ];
        foreach ($tags as $tag) {
            BlogTag::create($tag);
        }

    }
}