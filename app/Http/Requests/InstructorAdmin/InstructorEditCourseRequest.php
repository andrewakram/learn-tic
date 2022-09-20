<?php

namespace App\Http\Requests\InstructorAdmin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InstructorEditCourseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {

        if(Auth::guard('web')->user())
            return true;
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(Request $request)
    {
        $userId =auth()->user()->id;
        return [
            'course_id' => 'required|exists:courses,id',
            'category_id' => 'required|exists:categories,id',
            'title_ar' => 'required|min:3|max:50',
            'title_en' => 'required|min:3|max:50',
            'body_ar' => 'required|min:3|max:900000',
            'body_en' => 'required|min:3|max:900000',
            'price_before' => 'sometimes',
            'price_after' => 'required',
            'points' => 'required|numeric',
            'course_time' => 'required|numeric',
            'image' => 'sometimes|mimes:jpg,jpeg,png,bmp,tiff,PNG|max:4096',
            'stage_id' => 'required|exists:stages,id',
        ];
    }
}
