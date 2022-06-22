<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\City;
use App\Models\Course;
use App\Models\CourseCity;
use App\Models\CourseLesson;
use App\Models\CourseSection;
use App\Models\User;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teacher = User::where('type','teacher')->get();
        $category = Category::get();
        $city = City::first();

        $data = [
            [
                'teacher_id' => $teacher[0]->id,
                'category_id' => $category[0]->id,
                'title_ar' => '1كورس لغة عربية',
                'title_en' => '1Arabic Lang Course',
                'body_ar' => '1لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه ... بروشور او فلاير على سبيل المثال ... او نماذج مواقع انترنت ...',
                'body_en' => '1Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s',
                'price_before' => '2000',
                'price_after' => '1800',
                'points' => 180,
                'course_time' => 5,
            ],
            [
                'teacher_id' => $teacher[0]->id,
                'category_id' => $category[0]->id,
                'title_ar' => '2كورس لغة عربية',
                'title_en' => '2Arabic Lang Course',
                'body_ar' => '2لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه ... بروشور او فلاير على سبيل المثال ... او نماذج مواقع انترنت ...',
                'body_en' => '2Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s',
                'price_before' => '2000',
                'price_after' => '1800',
                'points' => 180,
                'course_time' => 5,
            ],
            [
                'teacher_id' => $teacher[1]->id,
                'category_id' => $category[1]->id,
                'title_ar' => '1كورس لغة انجليزية',
                'title_en' => '1English Lang Course',
                'body_ar' => ' 3لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه ... بروشور او فلاير على سبيل المثال ... او نماذج مواقع انترنت ...',
                'body_en' => '3Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s',
                'price_before' => '2000',
                'price_after' => '1800',
                'points' => 180,
                'course_time' => 5,
            ],
            [
                'teacher_id' => $teacher[1]->id,
                'category_id' => $category[1]->id,
                'title_ar' => '2كورس لغة انجليزية',
                'title_en' => '2English Lang Course',
                'body_ar' => '  4لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه ... بروشور او فلاير على سبيل المثال ... او نماذج مواقع انترنت ...',
                'body_en' => '4Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s',
                'price_before' => '2000',
                'price_after' => '1800',
                'points' => 180,
                'course_time' => 5,
            ],
            [
                'teacher_id' => $teacher[2]->id,
                'category_id' => $category[2]->id,
                'title_ar' => '1كورس لغة فرنسية',
                'title_en' => '1France Lang Course',
                'body_ar' => '  5لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه ... بروشور او فلاير على سبيل المثال ... او نماذج مواقع انترنت ...',
                'body_en' => '5Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s',
                'price_before' => '2000',
                'price_after' => '1800',
                'points' => 180,
                'course_time' => 5,
            ],
            [
                'teacher_id' => $teacher[2]->id,
                'category_id' => $category[2]->id,
                'title_ar' => '2كورس لغة فرنسية',
                'title_en' => '2France Lang Course',
                'body_ar' => '  6لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه ... بروشور او فلاير على سبيل المثال ... او نماذج مواقع انترنت ...',
                'body_en' => '6Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s',
                'price_before' => '2000',
                'price_after' => '1800',
                'points' => 180,
                'course_time' => 5,
            ],

        ];
        foreach ($data as $get) {
            $course = Course::updateOrCreate($get);
            CourseCity::create([
                'category_id'=> $get['category_id'],
                'teacher_id'=> $get['teacher_id'],
                'city_id'=> $city->id,
                'course_id' => $course->id
            ]);
            /////////////////sections
            $course_section1 = CourseSection::create([
                'teacher_id'=> $get['teacher_id'],
                'course_id'=> $course->id,
                'title_ar'=> "القسم الاول " . $get['title_ar'],
                'title_en' => "first Section "  . $get['title_en']
            ]);
            $course_section2 = CourseSection::create([
                'teacher_id'=> $get['teacher_id'],
                'course_id'=> $course->id,
                'title_ar'=> "القسم الثاني " . $get['title_ar'],
                'title_en' => "second Section "  . $get['title_en']
            ]);
            ///////////////////////////
            //////////////course lessons
            CourseLesson::create([
                'teacher_id'=> $get['teacher_id'],
                'course_id'=> $course->id,
                'section_id'=> $course_section1->id,
                'title_ar'=> "الدرس الاول " . $get['title_ar'],
                'title_en'=> "first lesson "  . $get['title_en'],
                'link'=> "google.com",
                'file' => null
            ]);
            CourseLesson::create([
                'teacher_id'=> $get['teacher_id'],
                'course_id'=> $course->id,
                'section_id'=> $course_section2->id,
                'title_ar'=> "الدرس الثاني " . $get['title_ar'],
                'title_en'=> "second lesson "  . $get['title_en'],
                'link'=> "google.com",
                'file' => null
            ]);
            ////////////////////////////
        }
    }
}
