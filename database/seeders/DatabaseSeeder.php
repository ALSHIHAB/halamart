<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogPostTag;
use App\Models\BlogTag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();


        $this->call([
            RolesAndPermissionsSeeder::class,
            UserSeeder::class,
            BrandSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
            ProductDisplaySeeder::class,
            UserFavouritesSeeder::class,
            MediaSeeder::class,
            SettingsSeeder::class,
            BlogCategorySeeder::class,
            BlogSeeder::class,
            BlogTagSeeder::class,
            StatusSeeder::class,
            ShippingSeeder::class,
            PaymentSeeder::class,
            OrderSeeder::class,
            OrderProductSeeder::class,
            InvoiceSeeder::class,
            ContactsSeeder::class,
            MessageSeeder::class,
        ]);
        BlogPostTag::factory(10)->create();
    }
}