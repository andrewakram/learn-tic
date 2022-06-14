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
        $data = [
            [
                'title_ar' => 'لغة عربية',
                'title_en' => 'Arabic Lang',
            ],
            [
                'title_ar' => 'لغة انجليزية',
                'title_en' => 'English Lang',
            ],
            [
                'title_ar' => 'لغة فرنسية',
                'title_en' => 'France Lang',
            ],


        ];
        foreach ($data as $get) {
            Category::updateOrCreate($get);
        }
    }
}
