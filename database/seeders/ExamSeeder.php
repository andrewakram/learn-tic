<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\Course;
use App\Models\Exam;
use App\Models\Question;
use App\Models\User;
use Illuminate\Database\Seeder;

class ExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teacher = User::where('type','teacher')->first();
        $courses = Course::get();
        foreach ($courses as $key => $course) {
            $exam = Exam::create([
                'teacher_id' => $course->teacher_id,
                'course_id' => $course->id,
                'total' => ($key+1) . '00',
                'no_of_questions' => 3,
                'title_ar' => ' الاختبار الاول '. $course->title_ar,
                'title_en' => 'first exam ' . $course->title_en,
            ]);
            ///////////questions
            $q1 = Question::create([
                'exam_id' => $exam->id,
                'course_id' => $exam->course_id,
                'mark' => 30,
                'title_ar' => 'ما خو السؤال الاول؟',
                'title_en' => 'what is the first question?',
            ]);
            Answer::create([
                'exam_id' => $exam->id,
                'question_id' => $q1->id,
                'answer' => 1,
                'title_ar' => 'الاجابة 1',
                'title_en' => 'answer 1',
            ]);
            Answer::create([
                'exam_id' => $exam->id,
                'question_id' => $q1->id,
                'answer' => 0,
                'title_ar' => 'الاجابة 2',
                'title_en' => 'answer 2',
            ]);




            $q2 = Question::create([
                'exam_id' => $exam->id,
                'course_id' => $exam->course_id,
                'mark' => 30,
                'title_ar' => 'ما خو السؤال الثاني؟',
                'title_en' => 'what is the second question?',
            ]);
            Answer::create([
                'exam_id' => $exam->id,
                'question_id' => $q2->id,
                'answer' => 1,
                'title_ar' => 'الاجابة 1',
                'title_en' => 'answer 1',
            ]);
            Answer::create([
                'exam_id' => $exam->id,
                'question_id' => $q2->id,
                'answer' => 0,
                'title_ar' => 'الاجابة 2',
                'title_en' => 'answer 2',
            ]);



            $q3 = Question::create([
                'exam_id' => $exam->id,
                'course_id' => $exam->course_id,
                'mark' => 30,
                'title_ar' => 'ما خو السؤال الثالث؟',
                'title_en' => 'what is the third question?',
            ]);
            Answer::create([
                'exam_id' => $exam->id,
                'question_id' => $q3->id,
                'answer' => 1,
                'title_ar' => 'الاجابة 1',
                'title_en' => 'answer 1',
            ]);
            Answer::create([
                'exam_id' => $exam->id,
                'question_id' => $q3->id,
                'answer' => 0,
                'title_ar' => 'الاجابة 2',
                'title_en' => 'answer 2',
            ]);
            ////////////////////////////////

        }

    }
}
