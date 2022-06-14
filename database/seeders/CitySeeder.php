<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
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
                'title_ar' => 'الدمام',
                'title_en' => 'Dammam',
            ],
            [
                'title_ar' => 'جدة',
                'title_en' => 'Jeddah',
            ],
            [
                'title_ar' => 'الرياض',
                'title_en' => 'Riyadh',
            ],


        ];
        foreach ($data as $get) {
            City::updateOrCreate($get);
        }
    }
}
