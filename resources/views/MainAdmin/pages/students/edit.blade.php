@extends('MainAdmin.index')

@section('style')
@endsection

@section('content')

    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->
        <div class="toolbar" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <!--begin::Page title-->
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                     data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                     class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <!--begin::Title-->
                    <h1 class="d-flex align-items-center fw-bolder fs-3 my-1" style="color: #5482d5">
                        تعديل بيانات الطالب
                    </h1>
                    <!--end::Title-->
                    <!--begin::Separator-->
                    <span class="h-20px border-gray-300 border-start mx-4"></span>
                    <!--end::Separator-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="{{route('admin.home')}}" class="text-muted text-hover-primary">الرئيسية</a>
                        </li>
                        <!--end::Item-->
                        <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="{{route('admin.students')}}" class="text-muted text-hover-primary">الطلاب</a>
                        </li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->

            </div>
            <!--end::Container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <!--begin::Form-->
                <form action="{{route('admin.students.update')}}" method="post" enctype="multipart/form-data"
                      class="form d-flex flex-column flex-lg-row gap-7 gap-lg-10">
                    @csrf
                    <input type="hidden" name="row_id" value="{{$row->id}}">
                    <!--begin::Aside column-->
                    <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px">
                        <!--begin::Thumbnail settings-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2>الصورة</h2>
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body text-center pt-0">
                                <!--begin::Image input-->
                                <div class="image-input image-input-empty image-input-outline mb-3"
                                     data-kt-image-input="true" style="">
                                    <!--begin::Preview existing avatar-->
                                    <div class="image-input-wrapper w-150px h-150px"
                                         style="background-image: url({{$row->image}})"></div>
                                    <!--end::Preview existing avatar-->
                                    <!--begin::Label-->
                                {{--                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="إختر الصورة">--}}
                                {{--                                        <i class="bi bi-pencil-fill fs-7"></i>--}}
                                <!--begin::Inputs-->
                                {{--                                        <input type="file" name="image" accept=".png, .jpg, .jpeg" />--}}
                                {{--                                        <input type="hidden"  />--}}
                                <!--end::Inputs-->
                                {{--                                    </label>--}}
                                <!--end::Label-->
                                    <!--begin::Cancel-->
                                    <span
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                        title="إلغاء الصورة">
														<i class="bi bi-x fs-2"></i>
													</span>
                                    <!--end::Cancel-->
                                    <!--begin::Remove-->
                                {{--                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="حذف الصورة">--}}
                                {{--														<i class="bi bi-x fs-2"></i>--}}
                                {{--													</span>--}}
                                <!--end::Remove-->
                                </div>
                                <!--end::Image input-->
                                <!--begin::Description-->
                            {{--                                <div class="text-danger fs-7"> *.png - *.jpg - *.jpeg </div>--}}
                            <!--end::Description-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Thumbnail settings-->
                        <!--begin::Status-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2>الحالة</h2>
                                </div>
                                <!--end::Card title-->
                                <!--begin::Card toolbar-->
                                <div class="card-toolbar">
                                    <div class="rounded-circle bg-success w-15px h-15px"
                                         id="kt_ecommerce_add_product_status"></div>
                                </div>
                                <!--begin::Card toolbar-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Select2-->
                                <select name="active" required class="form-select form-select-lg form-select-solid"
                                        data-control="select2"
                                        id="">
                                    <option></option>
                                    <option value="1" {{$row->active == 1 ? "selected" : ""}}>مفعل</option>
                                    <option value="0" {{$row->active == 0 ? "selected" : ""}}>غير مفعل</option>
                                </select>
                                <!--end::Select2-->
                                <!--begin::Description-->
                            {{--                                <div class="text-muted fs-7">Set the product status.</div>--}}
                            <!--end::Description-->
                                <!--begin::Datepicker-->
                            {{--                                <div class="d-none mt-10">--}}
                            {{--                                    <label for="kt_ecommerce_add_product_status_datepicker" class="form-label">Select publishing date and time</label>--}}
                            {{--                                    <input class="form-control" id="kt_ecommerce_add_product_status_datepicker" placeholder="Pick date &amp; time" />--}}
                            {{--                                </div>--}}
                            <!--end::Datepicker-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Status-->

                        <!--begin::Status-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2>حالة الإيقاف</h2>
                                </div>
                                <!--end::Card title-->
                                <!--begin::Card toolbar-->
                                <div class="card-toolbar">
                                    <div class="rounded-circle bg-danger w-15px h-15px"
                                         id="kt_ecommerce_add_product_status"></div>
                                </div>
                                <!--begin::Card toolbar-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Select2-->
                                <select name="suspend" required class="form-select mb-2" data-control="select2"
                                        data-hide-search="true" data-placeholder="إختر الحالة"
                                        id="kt_ecommerce_add_product_status_select">
                                    <option></option>
                                    <option value="1" {{$row->suspend == 1 ? "selected" : ""}}>إيقاف</option>
                                    <option value="0" {{$row->suspend == 0 ? "selected" : ""}}>إلغاء الإيقاف</option>
                                </select>
                                <!--end::Select2-->
                                <!--begin::Description-->
                            {{--                                <div class="text-muted fs-7">Set the product status.</div>--}}
                            <!--end::Description-->
                                <!--begin::Datepicker-->
                            {{--                                <div class="d-none mt-10">--}}
                            {{--                                    <label for="kt_ecommerce_add_product_status_datepicker" class="form-label">Select publishing date and time</label>--}}
                            {{--                                    <input class="form-control" id="kt_ecommerce_add_product_status_datepicker" placeholder="Pick date &amp; time" />--}}
                            {{--                                </div>--}}
                            <!--end::Datepicker-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Status-->

                    </div>
                    <!--end::Aside column-->
                    <!--begin::Main column-->
                    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                        <!--begin::Tab content-->
                        <div class="tab-content">
                            <!--begin::Tab pane-->
                            <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general"
                                 role="tab-panel">
                                <div class="d-flex flex-column gap-7 gap-lg-10">
                                    <!--begin::General options-->
                                    <div class="card card-flush py-4">
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h2>بيانات الطالب</h2>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <!--begin::Card body-->
                                        <div class="card-body pt-0">
                                            <!--begin::Input group-->
                                            <div class="mb-10 fv-row">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <span style="font-size: large">
                                                            إسم الطالب:
                                                        </span>
                                                    </div>
                                                    <div class="col-md-3">
                                                    <span style="font-size: large"
                                                          class="bg-secondary p-2">
                                                        {{$row->name}}
                                                    </span>
                                                    </div>

                                                    <div class="col-md-2"></div>

                                                    <div class="col-md-2">
                                                        <span style="font-size: large">
                                                            الجوال :
                                                        </span>
                                                    </div>
                                                    <div class="col-md-3">
                                                    <span style="font-size: large"
                                                          class="bg-secondary p-2">
                                                        {{$row->phone}}
                                                    </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="mb-10 fv-row">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <span style="font-size: large">
                                                            البريد الإلكتروني :
                                                        </span>
                                                    </div>
                                                    <div class="col-md-8">
                                                    <span style="font-size: large;"
                                                          class="bg-secondary p-2 col-md-12">
                                                        {{$row->email}}
                                                    </span>
                                                    </div>

                                                    <div class="col-md-2"></div>

                                                    <div class="col-md-2">

                                                    </div>
                                                    <div class="col-md-3">

                                                    </div>
                                                </div>


                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="mb-10 fv-row">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <span style="font-size: large">
                                                            النقاط :
                                                        </span>
                                                    </div>
                                                    <div class="col-md-3">
                                                    <span style="font-size: large"
                                                          class="bg-secondary p-2">
                                                        @if($row->points)
                                                            {{$row->points}}
                                                        @else
                                                            0
                                                        @endif
                                                    </span>
                                                    </div>

                                                    <div class="col-md-2"></div>

                                                    <div class="col-md-2">
                                                        <span style="font-size: large">
                                                            النوع :
                                                        </span>
                                                    </div>
                                                    <div class="col-md-3">
                                                    <span style="font-size: large"
                                                          class="bg-secondary p-2">
                                                        @if($row->gender == 'male')
                                                            ذكر
                                                        @else
                                                            أنثي
                                                        @endif
                                                    </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="mb-10 fv-row">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <span style="font-size: large">
                                                            الجنسية :
                                                        </span>
                                                    </div>
                                                    <div class="col-md-3">
                                                    <span style="font-size: large"
                                                          class="bg-secondary p-2">
                                                        @if($row->nationality)
                                                            {{$row->nationality}}
                                                        @else
                                                            -
                                                        @endif
                                                    </span>
                                                    </div>

                                                    <div class="col-md-2"></div>

                                                    <div class="col-md-2">
                                                        <span style="font-size: large">
                                                            التقييم :
                                                        </span>
                                                    </div>
                                                    <div class="col-md-3">
                                                    <span style="font-size: large"
                                                          class="bg-secondary p-2">
                                                        @if($row->rate)
                                                            {{$row->rate}}
                                                        @else
                                                            -
                                                        @endif
                                                    </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Input group-->


                                        </div>
                                        <!--end::Card header-->
                                    </div>
                                    <!--end::General options-->

                                </div>
                            </div>
                            <!--end::Tab pane-->
                        </div>
                        <!--end::Tab content-->
                        <div class="d-flex justify-content-end">
                            <!--begin::Button-->
                            <a href="{{route('admin.students')}}" id="kt_ecommerce_add_product_cancel"
                               class="btn btn-light me-5">عودة</a>
                            <!--end::Button-->
                            <!--begin::Button-->
                            <button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
                                <span class="indicator-label">حفظ</span>
                                <span class="indicator-progress">إنتظر قليلا . . .
												<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                            <!--end::Button-->
                        </div>
                    </div>
                    <!--end::Main column-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
    <!--end::Content-->

@endsection



@section('script')



@endsection
