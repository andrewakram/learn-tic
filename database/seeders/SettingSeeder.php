<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
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
                'key' => 'name_ar',
                'value' => 'Learn-Tic',

            ], [
                'key' => 'name_en',
                'value' => 'Learn-Tic',
            ],
            [
                'key' => 'address_ar',
                'value' => 'عنوان شركة Learn-Tic',
            ], [
                'key' => 'address_en',
                'value' => 'The address of Learn-Tic',
            ],
            [
                'key' => 'working_hours_ar',
                'value' => 'من 9 صباحاً الي 11 صباحاً',
            ], 
            [
                'key' => 'working_hours_en',
                'value' => 'From 9 am to 11 amً',
            ],
            [
                'key' => 'phone_1',
                'value' => '012345678',

            ], [
                'key' => 'phone_2',
                'value' => '0123456789',

            ], [
                'key' => 'email_1',
                'value' => 'LearnTic@gmail.com',

            ], [
                'key' => 'email_2',
                'value' => 'proten2_chef@gmail.com',

            ], [
                'key' => 'whatsapp',
                'value' => '01094641332',

            ], [
                'key' => 'facebook',
                'value' => 'https://www.facebook.com/',

            ], [
                'key' => 'twitter',
                'value' => 'https://www.twitter.com/',

            ], [
                'key' => 'instagram',
                'value' => 'https://www.instagram.com/',
            ], [
                'key' => 'snapchat',
                'value' => 'https://www.snapchat.com/',
            ], [
                'key' => 'youtube',
                'value' => 'https://www.youtube.com/',
            ],
            [
                'key' => 'default_location',
                'value' => '{"lat":"29.172909419416","lng":"47.76978786947689"}',
            ],

        ];
        foreach ($data as $get) {
            Setting::updateOrCreate($get);
        }
    }
}
