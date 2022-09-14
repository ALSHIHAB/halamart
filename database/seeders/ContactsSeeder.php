<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contact1 = [
            'first_name' => 'Najib',
            'last_name' => 'Ahmed',
            'email' => 'najib@halamart.com',
            'phone' => '01111111111',
            'subject' => 'Build new website',
            'message' => 'I want to build a new website for ecommerce with some customization and new features.',
            'ip' => '192.168.0.1',
            'is_read' => 1,
        ];
        Contact::create($contact1);
        $contact2 = [
            'first_name' => 'Shehab',
            'last_name' => 'Ahmed',
            'email' => 'customer@gmail.com',
            'phone' => '022222222222',
            'subject' => 'Does your website support RTL',
            'message' => 'I want to buy your website template and asking if does it supports RTL? Does it also responsive?',
        ];
        Contact::create($contact2);
    }
}