<?php

namespace Database\Seeders;

use App\Models\Stage;
use Illuminate\Database\Seeder;

class StageSeeder extends Seeder
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
                'title_ar' => 'المرحلة الاولي',
                'title_en' => 'First Stage',
            ],
            [
                'title_ar' => 'المرحلة الثانية',
                'title_en' => 'Second Stage',
            ],
            [
                'title_ar' => 'المرحلة الثالثة',
                'title_en' => 'Third Stage',
            ]
        ];
        foreach ($data as $get) {
            Stage::updateOrCreate($get);
        }
    }
}
