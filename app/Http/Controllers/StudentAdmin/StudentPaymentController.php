<?php

namespace App\Http\Controllers\StudentAdmin;

use App\Http\Requests\InstructorAdmin\InstructorAddCourseRequest;
use App\Http\Requests\InstructorAdmin\InstructorDeleteCourseRequest;
use App\Http\Requests\InstructorAdmin\InstructorEditCourseRequest;
use App\Http\Requests\InstructorAdmin\InstructorIndexCourseRequest;
use App\Models\Chat;
use App\Models\City;
use App\Models\Course;
use App\Models\Exam;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Stage;
use App\Models\User;
use App\Models\Category;
use App\Models\TeacherInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Validator;

class StudentPaymentController extends Controller
{
    public function index(Request $request)
    {
        $user = auth()->user();

        $data['payments'] = Payment::orderBy('id','desc')
            ->where('user_id',$user->id)
            ->orWhere('email',$user->email)
            ->get();

        return view('StudentAdmin.pages.payments',compact('data'));
    }


}
