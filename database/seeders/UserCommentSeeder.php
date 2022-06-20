<?php

namespace Database\Seeders;

use App\Models\UserComment;
use Illuminate\Database\Seeder;

class UserCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i < 4; $i++) {
            UserComment::create([
                'title_ar'=> $i.$i.'احمد محمود',
                'title_en'=> $i.$i.'Ahmed Mahmoud' ,
                'body_ar'=> $i.$i.'لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه ... بروشور او فلاير على سبيل المثال ... او نماذج مواقع انترنت ...',
                'body_en'=> $i.$i.'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s',
                'user_type'=> 'user'
            ]);
            UserComment::create([
                'title_ar'=> $i.$i.'هاني علي',
                'title_en'=> $i.$i.'Hany Ali' ,
                'body_ar'=> $i.$i.'لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه ... بروشور او فلاير على سبيل المثال ... او نماذج مواقع انترنت ...',
                'body_en'=> $i.$i.'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s',
                'user_type'=> 'teacher'
            ]);
        }
    }
}
