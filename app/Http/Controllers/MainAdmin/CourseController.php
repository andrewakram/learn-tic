<?php

namespace App\Http\Controllers\MainAdmin;

use App\Http\Requests\MainAdmin\Course\CourseIndexRequest;
use App\Models\Course;
use App\Models\CourseLesson;
use App\Models\CourseSection;
use Carbon\Carbon;
use Illuminate\Routing\Controller;
use Yajra\DataTables\Facades\DataTables;

class CourseController extends Controller
{
    public function index(CourseIndexRequest $request)
    {
        $validator = $request->validated();
        if (!is_array($validator) && $validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        return view('MainAdmin.pages.courses.index');
    }

    public function getData()
    {
        $model = Course::query();

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

    public function courseSections(CourseIndexRequest $request,$course_id)
    {
        $validator = $request->validated();
        if (!is_array($validator) && $validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $course = Course::findOrFail($course_id);
        return view('MainAdmin.pages.courses.course-sections',compact('course'));
    }

    public function getCourseSectionsData($course_id)
    {
        $model = CourseSection::query()->where('course_id',$course_id);

        return DataTables::eloquent($model)
            ->addIndexColumn()
            ->addColumn('select',function ($row){
                return '<div class="form-check form-check-sm form-check-custom form-check-solid me-3 ">
                    <input class="form-check-input checkboxes" type="checkbox"  value="'.$row->id.'" />
                </div>';
            })
            ->addColumn('actions', function ($row) {
                $buttons = '';
                $buttons .= '<a href="' . route('admin.courses.courseLessons', [$row->id]) . '" class="btn btn-primary btn-circle btn-sm m-1" title="تعديل">
                            <i class="fa fa-eye"></i>
                        </a>';

                return $buttons;
            })
            ->rawColumns(['actions','select'])
            ->make();
    }

    public function courseLessons(CourseIndexRequest $request,$section_id)
    {
        $validator = $request->validated();
        if (!is_array($validator) && $validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $section = CourseSection::findOrFail($section_id);
        $course = Course::findOrFail($section->course_id);
        return view('MainAdmin.pages.courses.course-lessons',compact('course','section'));
    }

    public function getCourseLessonsData($section_id)
    {
        $model = CourseLesson::query()->where('section_id',$section_id);

        return DataTables::eloquent($model)
            ->addIndexColumn()
            ->addColumn('select',function ($row){
                return '<div class="form-check form-check-sm form-check-custom form-check-solid me-3 ">
                    <input class="form-check-input checkboxes" type="checkbox"  value="'.$row->id.'" />
                </div>';
            })
            ->addColumn('section', function ($row) {
                if($row->courseSection){
                    return '<b class="badge badge-info">'.$row->courseSection->title_ar.'</b>';
                }else{
                    return '<b class="badge badge-info">'.'-'.'</b>';
                }
            })
            ->addColumn('actions', function ($row) {
                $buttons = '';
                $buttons .= '<a href="' . route('admin.courses.courseLessons', [$row->id]) . '" class="btn btn-primary btn-circle btn-sm m-1" title="تعديل">
                            <i class="fa fa-eye"></i>
                        </a>';

                return $buttons;
            })
            ->rawColumns(['actions','section','select'])
            ->make();
    }


}
