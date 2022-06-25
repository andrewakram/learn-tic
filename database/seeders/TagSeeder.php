<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
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
                'link' => 'https://www.google.com/',
                'title_ar' => 'Tag1',
                'title_en' => 'Tag1',
            ],
            [
                'link' => 'https://www.google.com/',
                'title_ar' => 'Tag2',
                'title_en' => 'Tag2',
            ],
            [
                'link' => 'https://www.google.com/',
                'title_ar' => 'Tag3',
                'title_en' => 'Tag3',
            ],
            [
                'link' => 'https://www.google.com/',
                'title_ar' => 'Tag4',
                'title_en' => 'Tag4',
            ],
            [
                'link' => 'https://www.google.com/',
                'title_ar' => 'Tag5',
                'title_en' => 'Tag5',
            ],
            [
                'link' => 'https://www.google.com/',
                'title_ar' => 'Tag6',
                'title_en' => 'Tag6',
            ],
            [
                'link' => 'https://www.google.com/',
                'title_ar' => 'Tag7',
                'title_en' => 'Tag7',
            ],
            [
                'link' => 'https://www.google.com/',
                'title_ar' => 'Tag8',
                'title_en' => 'Tag8',
            ],
            [
                'link' => 'https://www.google.com/',
                'title_ar' => 'Tag9',
                'title_en' => 'Tag9',
            ],


        ];
        foreach ($data as $get) {
            Tag::updateOrCreate($get);
        }
    }
}
