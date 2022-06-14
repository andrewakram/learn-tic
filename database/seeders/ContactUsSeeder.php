<?php

namespace Database\Seeders;

use App\Models\ContactUs;
use Illuminate\Database\Seeder;

class ContactUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'user1',
                'email' => 'user1@gmail.com',
                'phone' => '1234567',
                'message' => 'Lorem Ipsum is simply dummy text1111',
            ],
            [
                'name' => 'user2',
                'email' => 'user2@gmail.com',
                'phone' => '12345672',
                'message' => 'Lorem Ipsum is simply dummy text2222',
            ],
            [
                'name' => 'user3',
                'email' => 'user3@gmail.com',
                'phone' => '1234563',
                'message' => 'Lorem Ipsum is simply dummy text3333',
            ],


        ];
        foreach ($data as $get) {
            ContactUs::updateOrCreate($get);
        }
    }
}
