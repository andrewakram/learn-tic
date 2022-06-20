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
            [
                'title_ar' => ' التاريخ ',
                'title_en' => 'History',
            ],
            [
                'title_ar' => 'الرياضيات',
                'title_en' => 'Math',
            ],
            [
                'title_ar' => 'فيزياء',
                'title_en' => 'Physics',
            ],
            [
                'title_ar' => 'لغه المانية',
                'title_en' => 'Germany Lang',
            ],
            [
                'title_ar' => 'علوم الحاسب',
                'title_en' => 'computer science',
            ],
            [
                'title_ar' => ' جغرافيا',
                'title_en' => 'Geography',
            ],


        ];
        foreach ($data as $get) {
            Category::updateOrCreate($get);
        }
    }
}
