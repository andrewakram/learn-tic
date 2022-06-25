<?php

namespace App\Http\Requests\MainAdmin\Blog;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if(Auth::guard('admin')->user())
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
        return [
            'row_id' => 'required|exists:blogs,id',
            'date' => 'required',
            'image' => 'sometimes|image|mimes:png,jpg,jpeg',
            'title_ar' => 'required|min:3|max:191',
            'title_en' => 'required|min:3|max:191',
            'description_ar' => 'required|min:3',
            'description_en' => 'required|min:3',
        ];
    }
}
