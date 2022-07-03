@extends('MainAdmin.index')

@section('style')
    <link href="{{ asset('admin/dist/assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet"
          type="text/css"/>
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
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">
                        <a href="{{route('admin.home')}}" class="text-muted text-hover-primary">
                            الرئيسية
                        </a>
                        <!--begin::Separator-->
                        <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                        <!--end::Separator-->
                        <a href="{{route('admin.courses')}}" class="text-muted text-hover-primary">
                            الكورسات
                        </a>
                        <!--begin::Separator-->
                        <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                        <!--end::Separator-->
                        <!--begin::Description-->
                        <small class=" fs-3 fw-bold my-1 ms-1" style="color: #5482d5">تفاصيل أسئلة الإمتحان
                            بالكورس</small>
                        <!--end::Description-->
                    </h1>
                    <!--end::Title-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center py-1">
                    <!--begin::Wrapper-->
                    <!--begin::Button-->
                {{--                    <a href="{{route('admin.courses.create')}}" class="btn btn-sm btn-success"--}}
                {{--                       data-bs-toggle="modal" data-bs-target="#kt_modal_create_app" id=""--}}
                {{--                    ><i class="fa fa-plus"></i>--}}
                {{--                        أضف--}}
                {{--                    </a>--}}
                {{--                    <a  class="btn btn-sm btn-danger m-1"--}}
                {{--                           data-bs-toggle="modal" data-bs-target="#dynamic" id="bulk_delete_btn">--}}
                {{--                        <i class="fa fa-trash"></i>--}}
                {{--                        حذف متعدد--}}
                {{--                    </a>--}}

                <!--end::Button-->
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Toolbar-->


        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <!--begin::Products-->
                <div class="card card-flush">
                    <!--begin::Card header-->

                    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-12">
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
                                                <h2>بيانات الكورس</h2>
                                            </div>
                                        </div>
                                        <br>
                                        <!--begin::Card body-->
                                        <div class="card-body pt-0">
                                            <!--begin::Input group-->
                                            <div class="mb-3 fv-row">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <span style="font-size: medium">
                                                            إسم الكورس:
                                                        </span>
                                                    </div>
                                                    <div class="col-md-3">
                                                    <span style="font-size: medium"
                                                          class="badge badge-secondary">
                                                        {{$course->title_ar}}
                                                    </span>
                                                    </div>

                                                </div>
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="mb-3 fv-row">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <span style="font-size: medium">
                                                            المدرس :
                                                        </span>
                                                    </div>
                                                    <div class="col-md-3">
                                                    <span style="font-size: medium;"
                                                          class="badge badge-secondary col-md-12">
                                                        <a href="{{route('admin.instructors.edit',[$course->teacher->id])}}"
                                                           target="_blank">
                                                            {{$course->teacher->name}}
                                                        </a>

                                                    </span>
                                                    </div>

                                                    <div class="col-md-2"></div>

                                                    <div class="col-md-2">
                                                        <span style="font-size: medium">
                                                            التخصص :
                                                        </span>
                                                    </div>
                                                    <div class="col-md-3">
                                                    <span style="font-size: medium;"
                                                          class="badge badge-secondary col-md-12">
                                                        <a href="{{route('admin.categories.edit',[$course->category->id])}}"
                                                           target="_blank">
                                                            {{$course->category->title_ar}}
                                                        </a>

                                                    </span>
                                                    </div>
                                                </div>


                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="mb-3 fv-row">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <span style="font-size: medium">
                                                            النقاط :
                                                        </span>
                                                    </div>
                                                    <div class="col-md-3">
                                                    <span style="font-size: medium"
                                                          class="badge badge-secondary">
                                                        @if($course->points)
                                                            {{$course->points}}
                                                        @else
                                                            0
                                                        @endif
                                                    </span>
                                                    </div>

                                                    <div class="col-md-2"></div>

                                                    <div class="col-md-2">
                                                        <span style="font-size: medium">
                                                            المدة :
                                                        </span>
                                                    </div>
                                                    <div class="col-md-3">
                                                    <span style="font-size: medium"
                                                          class="badge badge-secondary">
                                                        @if($course->course_time)
                                                            <b class="badge badge-dark">{{$course->course_time}} / ساعة </b>
                                                        @else
                                                            <b class="badge badge-dark"> أقل من ساعة</b>
                                                        @endif
                                                    </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="mb-3 fv-row">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <span style="font-size: medium">
                                                            السعر قبل :
                                                        </span>
                                                    </div>
                                                    <div class="col-md-3">
                                                    <span style="font-size: medium"
                                                          class="badge badge-secondary">
                                                        @if($course->price_before)
                                                            {{$course->price_before}} $
                                                        @else
                                                            -
                                                        @endif
                                                    </span>
                                                    </div>

                                                    <div class="col-md-2"></div>

                                                    <div class="col-md-2">
                                                        <span style="font-size: medium">
                                                            السعر بعد :
                                                        </span>
                                                    </div>
                                                    <div class="col-md-3">
                                                    <span style="font-size: medium"
                                                          class="badge badge-secondary">
                                                        @if($course->price_after)
                                                            {{$course->price_after}} $
                                                        @else
                                                            -
                                                        @endif
                                                    </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="mb-3 fv-row">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <span style="font-size: medium">
                                                             التقييم :
                                                        </span>
                                                    </div>
                                                    <div class="col-md-3">
                                                    <span style="font-size: medium"
                                                          class="badge badge-secondary">
                                                        @if($course->rate)
                                                            {{$course->rate}}
                                                        @else
                                                            -
                                                        @endif
                                                    </span>
                                                    </div>

                                                    <div class="col-md-2"></div>

                                                    <div class="col-md-2">
                                                        <span style="font-size: medium">
                                                            تاريخ التسجبل :
                                                        </span>
                                                    </div>
                                                    <div class="col-md-3">
                                                    <span style="font-size: medium"
                                                          class="badge badge-secondary">
                                                        @if($course->created_at)
                                                            {{$course->created_at}}
                                                        @else
                                                            -
                                                        @endif
                                                    </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="mb-3 fv-row">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <span style="font-size: medium">
                                                             المدن المتوفر بها الكورس :
                                                        </span>
                                                    </div>
                                                    <div class="col-md-10">
                                                        @foreach($course->courseCities as $city)
                                                            <span style="font-size: medium"
                                                                  class="badge badge-secondary m-1 ">
                                                                @if($city->city)
                                                                    {{$city->city->title_ar}}
                                                                @else
                                                                    -
                                                                @endif
                                                            </span>
                                                        @endforeach
                                                    </div>

                                                </div>
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="mb-3 fv-row">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <span style="font-size: medium">
                                                             أقسام الكورس :
                                                        </span>
                                                    </div>
                                                    <div class="col-md-10">
                                                        @foreach($course->courseSections as $section)
                                                            <span style="font-size: medium"
                                                                  class="badge badge-secondary m-1 ">
                                                                @if($section)
                                                                    {{$section->title_ar}}
                                                                @else
                                                                    -
                                                                @endif
                                                            </span>
                                                        @endforeach
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

                    </div>

                    <hr>
                    <hr>
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Table-->
                        <h3>
                            عنوان الإمتحان بالكورس

                            <span class="bg-secondary p-1">
                                {{$exam->title_ar}}
                                &nbsp; - &nbsp;
                                {{$exam->title_en}}
                            </span>
                            <br>
                            <br>
                            درجة الإمتحان
                            <span class="bg-success p-1">
                                {{$exam->total}}
                            </span>
                        </h3>

                        <hr>

                        <div class="card-body pt-0">
                            <!--begin::Questions-->
                            @if($exam->questions)
                                <h2 class="bg-primary p-2">الاسئلة</h2>
                                @foreach($exam->questions as $key => $question)
                                    <h3 class="bg-secondary p-2">
                                        <span class="text-decoration-underline fs-2">
                                            السؤال
                                        {{$key+1}}
                                        </span>
                                        <span>
                                            :
                                        </span>

                                        <span class="bg-gray p-1">
                                            {{$question->title_ar}}
                                            &nbsp; - &nbsp;
                                            {{$question->title_en}}
                                        </span>
                                        <br>
                                        <br>
                                        @if($question->answers)
                                            @foreach($question->answers as $keyy => $answer)
                                                <div class="card-body pt-0">
                                                    <h3>
                                                        <span class="text-decoration-underline fs-2">
                                                            الإجابة
                                                        {{$keyy+1}}
                                                        </span>
                                                        <span>
                                                            :
                                                        </span>
                                                        <span class="{{$answer->answer == 1 ? 'bg-success' : 'bg-danger'}} p-1">
                                                            {{$answer->title_ar}}
                                                            &nbsp; - &nbsp;
                                                            {{$answer->title_en}}
                                                        </span>
                                                    </h3>
                                                </div>
                                            @endforeach
                                        @endif

                                    </h3>
                            @endforeach
                        @endif

                        {{--                        ////////////--}}
                        <!--end::Questions-->
                        </div>

                        <!--end::Table-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Products-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
    <!--end::Content-->


@endsection



@section('script')

@endsection
