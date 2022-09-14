<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name['en'] = 'Yemeni Honey';
        $name['ar'] = 'عسل يمني';
        $category =
            [
            'id' => 1,
            'name' => $name,
            'description_en' => 'Yemeni Honey',
            'description_ar' => 'عسل يمني',
        ];
        Category::create($category);

        $name['en'] = 'Yemeni Coffee';
        $name['ar'] = 'قهوة يمنية';
        $category =
            [
            'id' => 2,
            'name' => $name,
            'description_en' => 'Best coffee in the world',
            'description_ar' => 'افخر انواع القهوة في العالم',
        ];
        Category::create($category);

        $name['en'] = 'Fruites';
        $name['ar'] = 'فواكه';
        $category =
            [
            'id' => 3,
            'name' => $name,
            'description_en' => 'Yemeni fruites',
            'description_ar' => 'الفواكه اليمنية',
        ];
        Category::create($category);

        $name['en'] = 'Spices';
        $name['ar'] = 'بهارات';
        $category =
            [
            'id' => 4,
            'name' => $name,
            'description_en' => 'Yemeni spices',
            'description_ar' => 'بهارات يمنية',
        ];
        Category::create($category);

        $name['en'] = 'Sidr Honey';
        $name['ar'] = 'عسل سدر';
        $category =
            [
            'id' => 5,
            'parent_id' => 1,
            'name' => $name,
            'description_en' => 'Yemeni sidr honey',
            'description_ar' => 'عسل سدر يمني',
        ];
        Category::create($category);

        $name['en'] = 'Grade 1 Yemeny Honey';
        $name['ar'] = 'عسل يمني درجة اولى';
        $category =
            [
            'id' => 6,
            'parent_id' => 1,
            'name' => $name,
            'description_en' => 'Grade 1 Yemeni Honey',
            'description_ar' => 'عسل يمني درجة اولى',
        ];
        Category::create($category);

        $name['en'] = 'Mocha Coffee';
        $name['ar'] = 'قهوة المخأ';
        $category =
            [
            'id' => 7,
            'parent_id' => 2,
            'name' => $name,
            'description_en' => 'Yemeni Mocha coffee the best in the world',
            'description_ar' => 'اجود انواع القهوة في العالم',
        ];
        Category::create($category);

    }

    public function run2()
    {
        $name['en'] = 'Electronics';
        $name['ar'] = 'الكترونيات';
        $category =
            [
            'id' => 1,
            'name' => $name,
            'description_en' => 'Electronics',
            'description_ar' => 'فئة الالكترونيات',
        ];
        Category::create($category);

        $name['en'] = 'Men';
        $name['ar'] = 'رجالي';
        $category =
            [
            'id' => 2,
            'name' => $name,
            'description_en' => 'Men clothes',
            'description_ar' => 'ملابس رجالية',
        ];
        Category::create($category);

        $name['en'] = 'Women';
        $name['ar'] = 'نسائي';
        $category =
            [
            'id' => 3,
            'name' => $name,
            'description_en' => 'Women clothes',
            'description_ar' => 'ملابس نسائية',
        ];
        Category::create($category);

        $name['en'] = 'Kids';
        $name['ar'] = 'ولادي';
        $category =
            [
            'id' => 4,
            'name' => $name,
            'description_en' => 'Kids clothes',
            'description_ar' => 'ملابس ولادي',
        ];
        Category::create($category);

        $name['en'] = 'Accessories';
        $name['ar'] = 'مستلزمات';
        $category =
            [
            'id' => 5,
            'parent_id' => 1,
            'name' => $name,
            'description_en' => 'Men, Women, Kids accessories',
            'description_ar' => 'مستلزمات رجالي نسائي ولادي',
        ];
        Category::create($category);

        $name['en'] = 'Shoes';
        $name['ar'] = 'احذية';
        $category =
            [
            'id' => 6,
            'name' => $name,
            'description_en' => 'Shoes store',
            'description_ar' => 'متجر الاحذية',
        ];
        Category::create($category);
    }
}