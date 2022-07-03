<?php

namespace App\Http\Controllers\MainAdmin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Course;
use App\Models\Exam;
use Carbon\Carbon;
use Yajra\DataTables\Facades\DataTables;

class HomeController extends Controller
{
    public function index()
    {
        //counts for first row in page ....
        //first card
        $data['supervisors'] = Admin::where('type','admin')->select('id')->count();
        $data['instructors'] = 0;
        $data['students'] = 0;

        return view('MainAdmin.pages.home',
            compact('data'));
    }

    public function getDataCoursesLast7Days()
    {
        $date = Carbon::now()->subDays(7);
        $model = Course::query()->where('created_at', '>=', $date);

        return DataTables::eloquent($model)
            ->addIndexColumn()
            ->addColumn('select',function ($row){
                return '<div class="form-check form-check-sm form-check-custom form-check-solid me-3 ">
                    <input class="form-check-input checkboxes" type="checkbox"  value="'.$row->id.'" />
                </div>';
            })
            ->editColumn('image', function ($row) {
                return '<a class="symbol symbol-50px"><span class="symbol-label" style="background-image:url(' . $row->image . ');"></span></a>';
            })
            ->editColumn('price_before', function ($row) {
                if($row->price_before){
                    return '<b class="badge badge-success">'.$row->price_before.'</b>';
                }else{
                    return "-";
                }
            })
            ->editColumn('price_after', function ($row) {
                if($row->price_after){
                    return '<b class="badge badge-success">'.$row->price_after.'</b>';
                }else{
                    return "-";
                }
            })
            ->editColumn('points', function ($row) {
                if($row->points){
                    return '<b class="badge badge-dark">'.$row->points.'</b>';
                }else{
                    return '<b class="badge badge-dark"> 0 </b>';
                }
            })
            ->editColumn('course_time', function ($row) {
                if($row->course_time){
                    return '<b class="badge badge-dark">'.$row->course_time.' / ساعة'.'</b>';
                }else{
                    return '<b class="badge badge-dark"> أقل من ساعة</b>';
                }
            })
            ->editColumn('rate', function ($row) {
                if($row->rate){
                    return '<b class="badge badge-info">'.$row->rate.'</b>';
                }else{
                    return '<b class="badge badge-info"> 0 </b>';
                }
            })
            ->addColumn('teacher', function ($row) {
                if($row->teacher){
                    $user_name = $row->teacher->name;
                    $user_email = $row->teacher->email;
                    return '<a href="'.route('admin.instructors.edit',[$row->teacher_id]).'" target="_blank" class="" title="'.$user_email.'">
                            '.$user_name.'
                        </a>';
                }else{
                    return "-";
                }
            })
            ->addColumn('category', function ($row) {
                if($row->category){
                    $title = $row->category->title_ar;
                    return '<a href="'.route('admin.categories.edit',[$row->category_id]).'" target="_blank" class="" title="'.$title.'">
                            '.$title.'
                        </a>';
                }else{
                    return "-";
                }
            })

            ->editColumn('created_at', function ($row) {
                return Carbon::parse($row->created_at)->translatedFormat("Y-m-d (H:i) A");
            })
            ->addColumn('actions', function ($row) {
                $buttons = '';
                $buttons .= '<a href="' . route('admin.courses.courseSections', [$row->id]) . '" class="btn btn-primary btn-circle btn-sm m-1" target="_blank" title="عرض التفاصيل">
                            <i class="fa fa-eye"></i>
                        </a>';

                return $buttons;
            })
            ->rawColumns(['actions','select','image',
                'price_before','price_after','points',
                'course_time','rate',
                'teacher','category','created_at'])
            ->make();
    }

    public function getDataCoursesExamsLast7Days()
    {
        $date = Carbon::now()->subDays(7);
        $model = Exam::query()->where('created_at', '>=', $date);

        return DataTables::eloquent($model)
            ->addIndexColumn()
            ->addColumn('select',function ($row){
                return '<div class="form-check form-check-sm form-check-custom form-check-solid me-3 ">
                    <input class="form-check-input checkboxes" type="checkbox"  value="'.$row->id.'" />
                </div>';
            })
            ->editColumn('total', function ($row) {
                if($row->total){
                    return '<b class="badge badge-success">'.$row->total.'</b>';
                }else{
                    return '<b class="badge badge-success"> 0 </b>';
                }
            })
            ->editColumn('no_of_questions', function ($row) {
                if($row->no_of_questions){
                    return '<b class="badge badge-info">'.$row->no_of_questions.'</b>';
                }else{
                    return '<b class="badge badge-info"> 0 </b>';
                }
            })
            ->addColumn('teacher', function ($row) {
                if($row->teacher){
                    $user_name = $row->teacher->name;
                    $user_email = $row->teacher->email;
                    return '<a href="'.route('admin.instructors.edit',[$row->teacher_id]).'" target="_blank" class="" title="'.$user_email.'">
                            '.$user_name.'
                        </a>';
                }else{
                    return "-";
                }
            })
            ->addColumn('course', function ($row) {
                if($row->course){
                    $course_title = $row->course->title_ar;
                    return '<a href="'.route('admin.courses.courseSections', [$row->id]).'" target="_blank" class="" title="'.$course_title.'">
                            '.$course_title.'
                        </a>';
                }else{
                    return "-";
                }
            })
            ->addColumn('actions', function ($row) {
                $buttons = '';
                $buttons .= '<a href="' . route('admin.courses.courseExamQuestions', [$row->id]) . '" class="btn btn-primary btn-circle btn-sm m-1" target="_blank" title="أسئلة الإمتحان">
                            <i class="fa fa-eye"></i>
                        </a>';

                return $buttons;
            })
            ->rawColumns(['actions','total','no_of_questions',
                'teacher', 'course','select'])
            ->make();
    }
}
