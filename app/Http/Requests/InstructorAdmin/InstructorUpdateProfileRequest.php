<?php

namespace App\Http\Requests\InstructorAdmin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InstructorUpdateProfileRequest extends FormRequest
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
            'categoey_id' => 'required|exists:categories,id',
            'full_name' => 'required|min:3|max:30',
            'image' => 'sometimes|mimes:jpg,jpeg,png,bmp,tiff |max:4096',
            'email' => 'sometimes|unique:users,email,'.$userId,
            'phone' => 'sometimes|unique:users,phone,'.$userId,
            'national_id' => 'required|min:3|max:36',
            'residence_id' => 'required|min:3|max:36',
            'university' => 'required|min:3|max:30',
            'qualifications' => 'required|in:PHD,Master,Bachlore,other',
            'learn_type' => 'required|in:remote,site',
            'years_of_exper' => 'required|numeric',
            'desctiption' => 'required|min:3|max:9999',
            'inquiry_cost_normal' => 'required|min:1|max:999',
            'inquiry_cost_urgent' => 'required|min:1|max:999',
        ];
    }
}
