<?php

namespace App\Http\Requests\MainAdmin\Page;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageUpdateRequest extends FormRequest
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
            'row_id' => 'required|exists:pages,id',
            'type' => 'required|in:about,terms,frozen',
            'title_ar' => 'required',
            'title_en' => 'required',
            'body_ar' => 'required',
            'body_en' => 'required',
            'image' => 'sometimes|image|mimes:png,jpg,jpeg',
        ];
    }
}
