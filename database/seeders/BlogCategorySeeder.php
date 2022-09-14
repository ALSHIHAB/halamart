<?php

namespace Database\Seeders;

use App\Models\BlogCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name['en'] = 'Main';
        $name['ar'] = 'الرئيسية';
        $category =
            [
                'id' => 1,
                'name' => $name,
                'description_en' => 'Main Category',
                'description_ar' => 'الفئة الرئيسية',
            ];
        BlogCategory::create($category);

        $name['en'] = 'News';
        $name['ar'] = 'الأخبار';
        $category =
            [
                'id' => 2,
                'name' => $name,
                'description_en' => 'Our latest news',
                'description_ar' => 'آخر أخبار الشركة',
            ];
        BlogCategory::create($category);

        $name['en'] = 'Products';
        $name['ar'] = 'المنتجات';
        $category =
            [
                'id'   => 3,
                'name' => $name,
                'description_en' => 'products news',
                'description_ar' => 'اخبار المنتجات'
            ];
        BlogCategory::create($category);

        $name['en'] = 'Ads';
        $name['ar'] = 'اعلانات';
        $category =
            [
                'id'   => 4,
                'name' => $name,
                'description_en' => 'Ads, events, and promotions',
                'description_ar' => 'اعلانات، مناسبات، عروض، تخفيضات',
            ];
        BlogCategory::create($category);
    }
}