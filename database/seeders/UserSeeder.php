<?php

namespace Database\Seeders;

use App\Models\TeacherApppintment;
use App\Models\TeacherInfo;
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
        for ($i=1; $i < 6; $i++) {
            User::create([
                'type' => "user",
                'active' => 1,
                'name' => "user".$i,
                'email' => "user".$i.'@gmail.com',
                'phone' => "123456".$i,
                'password' => bcrypt('123456')
            ]);
        }

        for ($i=1; $i < 4; $i++) {
            $user = User::create([
                'type' => "teacher",
                'active' => 1,
                'name' => "teacher".$i,
                'email' => "teacher".$i.'@gmail.com',
                'phone' => "654321".$i,
                'password' => bcrypt('123456')
            ]);
            TeacherInfo::create([
                'teacher_id' => $user->id,
                'full_name' =>"teacher".$i ."teacher".$i ."teacher".$i,
                'national_id' => rand(10000000,99999999),
                'residence_id' => rand(10000000,99999999),
                'qualifications' => "test test test".$i,
                'university' => "test".$i . "University",
                'learn_type' => "remote",
                'categoey_id' => 1,
                'years_of_exper' => 5,
                'desctiption' => "Lorem ipsum dolor sit amet conse ctetur adipi sicing elit. Aut animi sed labo rum. Nam esse ipsum ab mole stias rem corr upti moles tiae expe dita hic aspe riores eius, vitae unde neces sitat ibus, mai ore bland itiis magni.                ".$i,
                'inquiry_cost_normal' => 100,
                'inquiry_cost_urgent' => 200
            ]);
            TeacherApppintment::create([
                'teacher_id' => $user->id,
                'from' => "01:00",
                'to' => "05:00",
                'day' => $i

            ]);
        }
    }
}
