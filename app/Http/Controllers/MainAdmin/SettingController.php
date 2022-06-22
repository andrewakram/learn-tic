<?php

namespace App\Http\Controllers\MainAdmin;

use App\Http\Requests\MainAdmin\Setting\SettingIndexRequest;
use App\Http\Requests\MainAdmin\Setting\SettingUpdateRequest;
use App\Models\Setting;
use Illuminate\Routing\Controller;

class SettingController extends Controller
{
    public function index(SettingIndexRequest $request)
    {
        $validator = $request->validated();
        if (!is_array($validator) && $validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        $data = Setting::get();
        return view('MainAdmin.pages.settings.settings', compact('data'));
    }

    public function update(SettingUpdateRequest $request)
    {
        $inputs = $request->validated();
        Setting::setMany($inputs);
        session()->flash('success', 'تم التعديل بنجاح');
        return back();
    }


}
