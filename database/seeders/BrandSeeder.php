<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name['en'] = 'Almathaq alshafi';
        $name['ar'] = 'المذاق الشافي';
        $brand = [
            'id' => 1,
            'name' => $name,
            'description_en' => 'almathaq-alshafi for honey Company',
            'description_ar' => 'شركة المذاق الشافي للعسل',
        ];
        Brand::create($brand);

        $name['en'] = 'Alshifaa';
        $name['ar'] = 'الشفاء';
        $brand = [
            'id' => 2,
            'name' => $name,
            'description_en' => 'alshifaa honey Company',
            'description_ar' => 'شركة الشفاء للعسل',
        ];
        Brand::create($brand);

        $name['en'] = 'Moka';
        $name['ar'] = 'موكا';
        $brand = [
            'id' => 3,
            'name' => $name,
            'description_en' => 'Moka Yemen Coffee Brand',
            'description_ar' => 'قهوة المخأ اليمنية',
        ];
        Brand::create($brand);

        $name['en'] = 'Romman';
        $name['ar'] = 'رمان';
        $brand = [
            'id' => 4,
            'name' => $name,
            'description_en' => 'Romman',
            'description_ar' => 'رمان',
        ];
        Brand::create($brand);

        $name['en'] = 'Spices hadhramout';
        $name['ar'] = 'بهارات حضرموت';
        $brand = [
            'id' => 5,
            'name' => $name,
            'description_en' => 'Spices hadhramout',
            'description_ar' => 'بهارات حضرموت',
        ];
        Brand::create($brand);
    }
}