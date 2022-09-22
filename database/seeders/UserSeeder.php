<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = [
            'id' => 1,
            'name' => 'Admin',
            'slug' => 'admin',
            'email' => 'admin@halamart.biz',
            'password' => bcrypt('halamart'),
            'remember_token' => null,
            'profile_photo_path' => 'profile.jpg',
            'email_verified_at' => \Carbon\Carbon::now(),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ];
        $ad = User::create($admin);
        $ad->assignRole('Admin');

        $customer = [
            'id' => 2,
            'name' => 'Najib Ahmed',
            'slug' => 'najib-ahmed',
            'email' => 'customer@halamart.biz',
            'password' => bcrypt('halamart'),
            'remember_token' => null,
            'profile_photo_path' => 'profile.jpg',
            'email_verified_at' => \Carbon\Carbon::now(),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ];
        $cu = User::create($customer);
        $cu->assignRole('Customer');
    }
}