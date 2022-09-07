<?php

namespace App\Http\Controllers\InstructorAdmin;

use App\Models\Chat;
use App\Models\City;
use App\Models\Course;
use App\Models\Exam;
use App\Models\Order;
use App\Models\User;
use App\Models\Category;
use App\Models\TeacherInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InstructorCourseController extends Controller
{
    public function index()
    {
        $userId =auth()->user()->id;

        $data['courses'] = Course::where('teacher_id',$userId)
            ->select('id','teacher_id','title_' . getLang() . '  as title',
            'body_' . getLang() . '  as body',
            'price_before' , 'price_after'
        )->get();

        return view('InstructorAdmin.pages.instructor_courses',compact('data'));
    }

    public function add()
    {
        return view('InstructorAdmin.pages.instructor_add_course');
    }

}
