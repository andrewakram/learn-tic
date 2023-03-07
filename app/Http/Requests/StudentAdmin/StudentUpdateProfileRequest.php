<?php

namespace App\Http\Requests\StudentAdmin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentUpdateProfileRequest extends FormRequest
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
            'name' => 'required|min:3|max:30',
            'image' => 'sometimes|mimes:jpg,jpeg,png,bmp,tiff |max:4096',
            'email' => 'sometimes|unique:users,email,'.$userId,
            'phone' => 'sometimes|unique:users,phone,'.$userId,
        ];
    }
}
