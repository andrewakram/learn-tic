@extends('InstructorAdmin.index')
@section('style')

@endsection
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="dashboard_navigationbar dn db-991">
                <div class="dropdown">
                    <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10"></i> Dashboard Navigation
                    </button>
                    <ul id="myDropdown" class="dropdown-content">
                        <li><a href="page-dashboard.html"><span class="flaticon-puzzle-1"></span> Dashboard</a></li>
                        <li class="active"><a href="page-instructor-courses.html"><span class="flaticon-like"></span> My
                                Courses</a></li>
                        <li><a href="page-my-order.html"><span class="flaticon-shopping-bag-1"></span> Order</a></li>
                        <li><a href="page-my-message.html"><span class="flaticon-speech-bubble"></span> Messages</a>
                        </li>
                        <li><a href="page-my-review.html"><span class="flaticon-rating"></span> Reviews</a></li>
                        <li><a href="page-add-course.html"><span class="flaticon-add-contact"></span> Add Course</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <nav class="breadcrumb_widgets" aria-label="breadcrumb mb40">
                <h4 class="title float-left">الاستشارات</h4>
                <br>
                <h4 class="text-center">
                    <span style="color: red;font-weight: bolder">ملحوظة:</span>
                    <span style="font-weight: bolder">في حالة الاستشارات الفورية يتم تحديد موعد الاستشارة تلقائيا بعد 10 دقائق من الموافقة</span>
                </h4>

                {{--                <ol class="breadcrumb float-right">--}}
                {{--                    <li class="breadcrumb-item"><a href="#">Home</a></li>--}}
                {{--                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>--}}
                {{--                </ol>--}}
            </nav>
        </div>
        <div class="col-lg-12">
            <div class="my_course_content_container">
                <div class="my_course_content mb30">
                    <div class="my_course_content_list">
                        <div class="col-md-12 mb-30">
                            <div class="card card-statistics h-100">
                                <div class="card-body">
                                    <div class="col-xl-12 mb-30">
                                        <div class="card card-statistics h-100">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table id="datatable"
                                                           class="table  table-hover table-sm table-bordered p-0"
                                                           data-page-length="50"
                                                           style="text-align: center">
                                                        <thead>
                                                        <tr class="alert-success">
                                                            <th>#</th>
                                                            <th>نوع الاستشارة</th>
                                                            <th>القيمة</th>
                                                            <th>الحالة</th>
                                                            <th>الرابط</th>
                                                            <th>التاريخ</th>
                                                            <th>موعد الاستشارة</th>
                                                            <th>العمليات</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($data['consultations'] as $consultation)
                                                            <tr>
                                                                <td>{{ $loop->iteration }}</td>
                                                                <td>
                                                                    @if($consultation->type == 'urgent_consultation')
                                                                        <b class="p-2 badge badge-info">
                                                                            إستشارة فورية
                                                                        </b>
                                                                    @elseif($consultation->type == 'normal_consultation')
                                                                        <b class="p-2 badge badge-primary">
                                                                            إستشارة عادية
                                                                        </b>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    <b>{{$consultation->price_after}}</b>
                                                                    SAR
                                                                </td>
                                                                <td>
                                                                    @if($consultation->teacher_accept == 0)
                                                                        <b class="p-2 badge badge-danger">
                                                                            في إنتظار الموافقة
                                                                        </b>
                                                                    @else
                                                                        <b class="p-2 badge badge-success">
                                                                            تمت الموافقة
                                                                        </b>
                                                                    @endif
                                                                </td>
                                                                <td class="text-danger">
                                                                    @if($consultation->url)
                                                                        <a href="{{$consultation->url}}" target="_blank"
                                                                           style="text-decoration: underline">إضغط
                                                                            هنا</a>
                                                                    @else
                                                                        <b>-</b>
                                                                    @endif
                                                                </td>
                                                                <td>{{$consultation->created_at}}</td>
                                                                <td>{{$consultation->consultation_time}}</td>
                                                                <td>
                                                                    @if($consultation->teacher_accept == 0)
                                                                        @if($consultation->type == 'urgent_consultation')
                                                                            <a href="{{route('instructor-accept-consultation',[$consultation->id])}}"
                                                                               class=" btn btn-success btn-sm"
                                                                               title="أوافق">
                                                                                أوافق
                                                                                (
                                                                                إضغط هنا
                                                                                )
                                                                            </a>
                                                                        @elseif($consultation->type == 'normal_consultation')
                                                                            <a class="btn btn-success btn-sm text-white"
                                                                               data-id="{{$consultation->id}}"
                                                                               data-toggle="modal"
                                                                               data-target="#single_{{$consultation->id}}"
                                                                               data-toggle="modal"
                                                                               data-placement="top"
                                                                               title="أوافق">
                                                                                أوافق
                                                                                (
                                                                                إضغط هنا
                                                                                )
                                                                            </a>
                                                                        @endif
                                                                    @else
                                                                        -
                                                                    @endif
                                                                </td>
                                                            </tr>

                                                            {{-- Delete Modal --}}

                                                            <div id="single_{{$consultation->id}}" class="modal fade" tabindex="-1" data-backdrop="static"
                                                                 data-keyboard="false">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content ">
                                                                        <div class="modal-header text-center" style="background-color: #009181">
                                                                            <button type="button" class="close" data-dismiss="modal"
                                                                                    aria-hidden="true"></button>
                                                                            <h3 class="modal-title text-center text-white">
                                                                                تأكيد موعد الاستشارة
                                                                            </h3>
                                                                        </div>
                                                                        <form id="delete_form" method="get"
                                                                              action="{{route('instructor-accept-consultation',[$consultation->id])}}">
                                                                            @csrf

                                                                            <div class="modal-body">
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <label>تاريخ ووقت الحصة : <span class="text-danger">*</span></label>
                                                                                        <input class="form-control" type="datetime-local" name="start_time">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="submit" class="btn btn-primary text-whit ">تأكيد
                                                                                </button>
                                                                                <button type="button" data-dismiss="modal" class="btn btn-dark ">رجوع
                                                                                </button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        @endforeach
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $('#StageId').on('change', function () {
                $("#SearchCourses").submit();
            });
        });
    </script>
@endsection
