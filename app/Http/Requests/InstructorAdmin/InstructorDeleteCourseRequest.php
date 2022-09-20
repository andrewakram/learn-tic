<?php

namespace App\Http\Requests\InstructorAdmin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InstructorDeleteCourseRequest extends FormRequest
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
        ];
    }
}
