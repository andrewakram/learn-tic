<?php

namespace Database\Seeders;

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
       $this->call(CategorySeeder::class);
       $this->call(CitySeeder::class);
       $this->call(UserSeeder::class);
       $this->call(AdminSeeder::class);
       $this->call(BlogSeeder::class);
       $this->call(CourseSeeder::class);
       $this->call(ExamSeeder::class);
       $this->call(UserCommentSeeder::class);
       $this->call(SettingSeeder::class);
       $this->call(PageSeeder::class);
       $this->call(TagSeeder::class);
        $this->call(StageSeeder::class);
    }
}
