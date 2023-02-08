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
                    <li><a href="page-instructor-courses.html"><span class="flaticon-like"></span> My Courses</a>
                    </li>
                    <li><a href="page-my-order.html"><span class="flaticon-shopping-bag-1"></span> Order</a></li>
                    <li><a href="page-my-message.html"><span class="flaticon-speech-bubble"></span> Messages</a>
                    </li>
                    <li><a href="page-my-review.html"><span class="flaticon-rating"></span> Reviews</a></li>
                    <li class="active"><a href="page-add-course.html"><span class="flaticon-add-contact"></span> Add
                            Course</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <nav class="breadcrumb_widgets" aria-label="breadcrumb mb30">
            <h4 class="title float-left">Instructor Appointments</h4>
            <ol class="breadcrumb float-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </nav>
    </div>
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="col-xl-12 mb-30">
                        <div class="card card-statistics h-100">
                            <div class="card-body">
                                <a href="{{route('instructor_create_appointment')}}" class="btn btn-success btn-sm" role="button"
                                   aria-pressed="true">اضافة حصة جديدة</a><br><br>
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr class="alert-success">
                                            <th>#</th>
                                            <th>المعلم</th>
                                            <th>عنوان الحصة</th>
                                            <th>تاريخ البداية</th>
                                            <th> وقت الحصة بالدقايق</th>
                                            <th>رابط الحصة</th>
                                            <th>العمليات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($teacher_appointments as $teacher_appointment)
                                            <tr>
                                            <td>{{ $loop->iteration }}</td>
                                                <td>{{$teacher_appointment->teacher->name}}</td>
                                                <td>{{$teacher_appointment->topic}}</td>
                                                <td>{{$teacher_appointment->start_at}}</td>
                                                <td>{{$teacher_appointment->duration}}</td>
                                                <td class="text-danger"><a href="{{$teacher_appointment->join_url}}" target="_blank">انضم الان</a></td>
                                                <td>
                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#Delete_receipt{{$teacher_appointment->meeting_id}}" ><i class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>

                                            <!-- Delete meeting zoom  -->
                                            <div class="modal fade" id="Delete_receipt{{$teacher_appointment->meeting_id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">حذف {{$teacher_appointment->topic}}</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{route('instructor_delete_appointment')}}" method="post">
                                                                @csrf
                                                                <input type="hidden" name="id" value="{{$teacher_appointment->meeting_id}}">
                                                                <h5 style="font-family: 'Cairo', sans-serif;">هل انت متاكد مع عملية الحذف ؟</h5>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal"> اغلاق</button>
                                                                    <button  class="btn btn-danger">حذف الحصة</button>
                                                                </div>
                                                            </form>
                                                        </div>
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
    <!-- row closed -->



@endsection

@section('script')

@endsection
