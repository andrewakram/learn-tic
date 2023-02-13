@extends('StudentAdmin.index')
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
            <nav class="breadcrumb_widgets" aria-label="breadcrumb mb30">
                <h4 class="title float-left">الاستشارات</h4>
                <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
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
                                                            <th>حالة الدفع</th>
                                                            <th>الحالة</th>
                                                            <th>الرابط</th>
                                                            <th>التاريخ</th>
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
                                                                    @if($consultation->payment_status == 1)
                                                                        <b class="p-2 badge badge-success">
                                                                            مدفوع
                                                                        </b>
                                                                    @else
                                                                        @if($consultation->type == 'urgent_consultation')
                                                                            <a href="{{route('pay-consultation-request',[$consultation->id])}}"
                                                                                class="btn btn-warning p-1"
                                                                            >
                                                                                إدفع إستشارة فورية
                                                                            </a>
                                                                        @elseif($consultation->type == 'normal_consultation')
                                                                            <a href="{{route('pay-consultation-request',[$consultation->id])}}"
                                                                               class="btn btn-warning p-1"
                                                                            >
                                                                                إدفع إستشارة عادية
                                                                            </a>
                                                                        @endif
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    @if($consultation->teacher_accept == 0)
                                                                        <b class="p-2 badge badge-danger">
                                                                            في إنتظار موافقة المعلم
                                                                        </b>
                                                                    @else
                                                                        <b class="p-2 badge badge-success">
                                                                            تمت موافقة المعلم
                                                                        </b>
                                                                    @endif
                                                                </td>
                                                                <td class="text-danger">
                                                                    @if($consultation->url)
                                                                        <a href="{{$consultation->url}}" target="_blank" style="text-decoration: underline">إضغط هنا</a>
                                                                    @else
                                                                        <b>-</b>
                                                                    @endif
                                                                </td>
                                                                <td>{{$consultation->created_at}}</td>
                                                            </tr>


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
