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

class InstructorProfileController extends Controller
{
    public function myProfile()
    {
        $userId =auth()->user()->id;

        $data['courese_count'] = Course::where('teacher_id',$userId)->count();
        $data['orders_reviews_count'] = Order::where('teacher_id',$userId)->count();
        $data['exams_count'] = Exam::where('teacher_id',$userId)->count();
        $data['messages_count'] = Chat::where('sender_id',$userId)->groupby('sender_id')->count();

        return view('InstructorAdmin.pages.home',compact('data'));
    }

}
