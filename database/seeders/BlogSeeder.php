<?php

namespace Database\Seeders;

use App\Models\Blog;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //protected $fillable = ['admin_id','date','image',
        //        'title_ar','title_en','description_ar','description_en'];

        for ($i=1; $i < 6; $i++) {
            Blog::create([
                'admin_id' => 1 ,
                'date' => Carbon::now() ,
                'title_ar'=> $i.$i.'لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم',
                'title_en'=> $i.$i.'Lorem Ipsum is simply dummy text' ,
                'description_ar'=> $i.$i.'لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه ... بروشور او فلاير على سبيل المثال ... او نماذج مواقع انترنت ...',
                'description_en'=> $i.$i.'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'
            ]);
        }

    }
}
