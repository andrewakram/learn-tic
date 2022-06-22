<?php

namespace App\Http\Controllers\MainAdmin;

use App\Http\Requests\MainAdmin\Client\ClientIndexRequest;
use App\Http\Requests\MainAdmin\Client\ClientUpdateRequest;
use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class ClientController extends Controller
{
    public function index(ClientIndexRequest $request)
    {
        $validator = $request->validated();
        if (!is_array($validator) && $validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        return view('MainAdmin.pages.clients.index');
    }

    public function edit(ClientIndexRequest $request,$id)
    {
        $validator = $request->validated();
        if (!is_array($validator) && $validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        $row = User::findOrFail($id);
        if (!$row){
            session()->flash('error', 'الحقل غير موجود');
            return redirect()->back();
        }
        return view('admin.pages.clients.edit',compact('row'));
    }

    public function update(ClientUpdateRequest $request)
    {
        $validator = $request->validated();
        if (!is_array($validator) && $validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $row = User::whereId($request->row_id)->first();
        $row->update(['active' => $request->active , 'suspend' => $request->suspend]);
        $row->save();

        session()->flash('success', 'تم التعديل بنجاح');
        return redirect()->route('admin.clients');
    }

    public function getData()
    {
        $auth = Auth::guard('admin')->user();
        $model = User::query()->where('type','user');

        return DataTables::eloquent($model)
            ->addIndexColumn()
            ->addColumn('select',function ($row){
                return '<div class="form-check form-check-sm form-check-custom form-check-solid me-3 ">
                    <input class="form-check-input checkboxes" type="checkbox"  value="'.$row->id.'" />
                </div>';
            })
            ->editColumn('image',function ($row){
                return '<a class="symbol symbol-50px"><span class="symbol-label" style="background-image:url('.$row->image.');"></span></a>';
            })
            ->editColumn('active',function ($row){
                if ($row->active == 1){
                    return "<b class='badge badge-success'>مفعل</b>";
                }else{
                    return "<b class='badge badge-danger'>غير مفعل</b>";
                }
            })
            ->editColumn('suspend',function ($row){
                if ($row->suspend == 1){
                    return "<b class='badge badge-success'>موقوف</b>";
                }else{
                    return "<b class='badge badge-danger'>غير موفوف</b>";
                }
            })
            ->editColumn('points', function ($row) {
                if($row->points){
                    return '<b class="badge badge-dark">'.$row->points.'</b>';
                }else{
                    return '<b class="badge badge-dark"> 0 </b>';
                }
            })
            ->editColumn('created_at',function ($row){
                return Carbon::parse($row->created_at)->translatedFormat("Y-m-d (h:i) a");
            })
//            ->addColumn('select',function ($row){
//                return '<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
//                                        <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_products_table .form-check-input" value="'.$row->id.'" />
//                                    </div>';
//            })
            ->addColumn('actions', function ($row) use ($auth){
                $buttons = '';
//                if ($auth->can('sliders.update')) {
                    $buttons .= '<a href="'.route('admin.clients.edit',[$row->id]).'" class="btn btn-primary btn-circle btn-sm m-1" title="تعديل">
                            <i class="fa fa-edit"></i>
                        </a>';
//                }
//                if ($auth->can('sliders.delete')) {
//                    $buttons .= '<a href="'.route('admin.clients.orders',[$row->id]).'" class="btn btn-warning btn-sm btn-circle m-1" title="الطلبات">
//                            <i class="fa fa-cart-plus"></i>
//                        </a>';
//                }
//                $buttons .= '<a href="'.route('admin.clients.cancelRequests',[$row->id]).'" class="btn btn-danger btn-sm btn-circle m-1" title="طلبات الإلغاء">
//                            <i class="fa fa-recycle"></i>
//                        </a>';
                return $buttons;
            })
            ->rawColumns(['select','actions','image','active','points','suspend','created_at'])
            ->make();

    }


    public function userOrders($user_id)
    {
        $user_name = User::whereId($user_id)->select('name')->first()->name;
        return view('admin.pages.clients.orders',compact('user_id','user_name'));
    }

    public function getUserOrdersData($user_id)
    {
        $auth = Auth::guard('admin')->user();
        $model = Order::query()->orderBy('id','desc')->where('user_id',$user_id);

        return DataTables::eloquent($model)
            ->addIndexColumn()
            ->addColumn('user_name',function ($row){
                $user_name = $row->User->name;
                return '<a href="'.route('admin.clients.edit',[$row->user_id]).'" class="" title="العميل">
                            '.$user_name.'
                        </a>';
            })
            ->editColumn('created_at',function ($row){
                return Carbon::parse($row->created_at)->format("Y-m-d (H:i) A");
            })
            ->editColumn('status',function ($row){
                if($row->status == 'pending')
                    return "<b class='badge badge-warning'>قيد الموافقة</b>";
                elseif($row->status == 'accepted')
                    return "<b class='badge badge-success'>مقبول</b>";
                elseif($row->status == 'canceled')
                    return "<b class='badge badge-danger'>ملغي</b>";
                elseif($row->status == 'finished')
                    return "<b class='badge badge-info'>منتهي</b>";

            })
//            ->addColumn('select',function ($row){
//                return '<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
//                                        <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_products_table .form-check-input" value="'.$row->id.'" />
//                                    </div>';
//            })
            ->addColumn('actions', function ($row) use ($auth){
                $buttons = '';
//                if ($auth->can('sliders.update')) {
                $buttons .= '<a href="'.route('admin.orders.edit',[$row->id]).'" class="btn btn-success btn-circle btn-sm m-1" title="عرض التفاصيل">
                            <i class="fa fa-eye"></i>
                        </a>';
//                }
//                if ($auth->can('sliders.delete')) {
//                    $buttons .= '<a class="btn btn-danger btn-sm delete btn-circle m-1" data-id="'.$row->id.'"  title="حذف">
//                            <i class="fa fa-trash"></i>
//                        </a>';
//                }
                return $buttons;
            })
            ->rawColumns(['actions','user_name','created_at','status'])
            ->make();
    }

    public function userCancelRequests($user_id)
    {
        $user_name = User::whereId($user_id)->select('name')->first()->name;
        return view('admin.pages.clients.cancel_requests',compact('user_id','user_name'));
    }

    public function getCancelRequestsData($user_id)
    {
        $auth = Auth::guard('admin')->user();
        $orders = Order::where('user_id',$user_id)->pluck('id');
        $model = BankData::query()->orderBy('id','desc')->whereIn('order_id',$orders);

        return DataTables::eloquent($model)
            ->addIndexColumn()
            ->addColumn('user_name',function ($row){
                $user_name = $row->User->name;
                return '<a href="'.route('admin.clients.edit',[$row->user_id]).'" class="" title="العميل">
                            '.$user_name.'
                        </a>';
            })
            ->editColumn('created_at',function ($row){
                return Carbon::parse($row->created_at)->format("Y-m-d (H:i) A");
            })
            ->editColumn('status',function ($row){
                if($row->status == 'pending')
                    return "<b class='badge badge-warning'>قيد الموافقة</b>";
                elseif($row->status == 'accepted')
                    return "<b class='badge badge-success'>مقبول</b>";
                elseif($row->status == 'canceled')
                    return "<b class='badge badge-danger'>ملغي</b>";
                elseif($row->status == 'finished')
                    return "<b class='badge badge-info'>منتهي</b>";

            })
//            ->addColumn('select',function ($row){
//                return '<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
//                                        <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_products_table .form-check-input" value="'.$row->id.'" />
//                                    </div>';
//            })
            ->addColumn('actions', function ($row) use ($auth){
                $buttons = '';
//                if ($auth->can('sliders.update')) {
                $buttons .= '<a href="'.route('admin.orders.edit',[$row->id]).'" class="btn btn-success btn-circle btn-sm m-1" title="عرض التفاصيل">
                            <i class="fa fa-eye"></i>
                        </a>';
//                }
//                if ($auth->can('sliders.delete')) {
//                    $buttons .= '<a class="btn btn-danger btn-sm delete btn-circle m-1" data-id="'.$row->id.'"  title="حذف">
//                            <i class="fa fa-trash"></i>
//                        </a>';
//                }
                return $buttons;
            })
            ->rawColumns(['actions','user_name','created_at','status'])
            ->make();
    }

}
