<?php

namespace App\Http\Controllers\MainAdmin;

use App\Http\Requests\MainAdmin\Page\PageIndexRequest;
use App\Http\Requests\MainAdmin\Page\PageUpdateRequest;
use App\Models\MealType;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class PageController extends Controller
{
    public function index(PageIndexRequest $request)
    {
        $validator = $request->validated();
        if (!is_array($validator) && $validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        return view('MainAdmin.pages.pages.index');
    }

    public function edit(PageIndexRequest $request,$id)
    {
        $validator = $request->validated();
        if (!is_array($validator) && $validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $row = Page::findOrFail($id);
        if (!$row){
            session()->flash('error', 'الحقل غير موجود');
            return redirect()->back();
        }
        $type = $row->type;
        return view('MainAdmin.pages.pages.edit',compact('row','type'));
    }

    public function update(PageUpdateRequest $request)
    {
        $validator = $request->validated();
        if (!is_array($validator) && $validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $row = Page::whereId($request->row_id)->first();
        $row->update($request->except('row_id','_token','image'));
        if ($request->has('image') && is_file($request->image)){
            $row->update([ 'image' => $request->image ]);
        }
        $row->save();

        session()->flash('success', 'تم التعديل بنجاح');
        return back();
    }

    public function getData()
    {
        $model = Page::query();

        return DataTables::eloquent($model)
            ->addIndexColumn()
            ->editColumn('image',function ($row){
                return '<a class="symbol symbol-50px"><span class="symbol-label" style="background-image:url('.$row->image.');"></span></a>';
            })
            ->addColumn('actions', function ($row) use ($auth){
                $buttons = '';
                    $buttons .= '<a href="'.route('admin.pages.edit',[$row->id]).'" class="btn btn-primary btn-circle btn-sm m-1" title="تعديل">
                            <i class="fa fa-edit"></i>
                        </a>';
                return $buttons;
            })
            ->rawColumns(['actions','image'])
            ->make();

    }
}
