<?php

namespace App\Http\Controllers\InstructorAdmin;

use App\Http\Requests\InstructorAdmin\InstructorUpdateProfileRequest;
use App\Models\Chat;
use App\Models\Course;
use App\Models\Exam;
use App\Models\Order;
use App\Models\User;
use App\Models\Category;
use App\Models\TeacherInfo;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

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

    public function personalProfile()
    {
        $userId =auth()->user()->id;

        $data['instructor'] = User::whereId($userId)->first();
        $data['instructor_coueses_count'] = Course::where('teacher_id',$userId)->count();
        $data['instructor_rate_count'] = Order::where('teacher_id',$userId)->count();
        $data['instructor_students_count'] = Order::where('teacher_id',$userId)->count();

        return view('InstructorAdmin.pages.personal_profile',compact('data'));
    }

    public function personalProfileEdit()
    {
        $userId =auth()->user()->id;

        $data['instructor'] = User::whereId($userId)->first();
        $data['instructor_coueses_count'] = Course::where('teacher_id',$userId)->count();
        $data['instructor_rate_count'] = Order::where('teacher_id',$userId)->count();
        $data['instructor_students_count'] = Order::where('teacher_id',$userId)->count();
        $data['categories'] = Category::select('id','title_' . getLang() . '  as title')->get();

        return view('InstructorAdmin.pages.personal_profile_edit',compact('data'));
    }

    public function personalProfileUpdate(InstructorUpdateProfileRequest $request)
    {
        $validator = $request->validated();
        if (!is_array($validator) && $validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $userId =auth()->user()->id;
        $user = User::findOrFail($userId);

        $user->name = $request->full_name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        if(isset($request->password) && isset($request->new_password) &&
            isset($request->new_password2) && ($request->new_password == $request->new_password2)  &&
            Hash::check($request->password,$user->password)
        ){
            $user->password = $request->new_password;
        }
        if(isset($request->image)){
            $user->image = $request->image;
        }
        $user->save();
        TeacherInfo::where('teacher_id',$userId)->update([
            'full_name' => $request->full_name,
            'categoey_id' => $request->categoey_id,
            'national_id' => $request->national_id,
            'residence_id' => $request->residence_id,
            'qualifications' => $request->qualifications,
            'university' => $request->university,
            'learn_type' => $request->learn_type,
            'years_of_exper' => $request->years_of_exper,
            'inquiry_cost_normal' => $request->inquiry_cost_normal,
            'inquiry_cost_urgent' => $request->inquiry_cost_urgent,
            'desctiption' => $request->desctiption,
        ]);

        session()->flash('success', 'تم التعديل بنجاح');
        return back();
    }

}
