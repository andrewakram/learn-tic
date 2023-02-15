@extends('InstructorAdmin.index')
@section('style')

@endsection
@section('content')

<div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="col-xl-12 mb-30">
                        <div class="card card-statistics h-100">
                            <div class="card-body">
                                <a href="{{route('instructor_create_appointment2')}}" class="btn btn-success btn-sm" role="button"
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
                                            <th>يوم الحصة</th>
                                            <th>وقت البداية</th>
                                            <th> وقت الحصة بالدقايق</th>
                                            <th>العمليات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($teacher_appointments as $teacher_appointment)
                                            <tr>
                                            <td>{{ $loop->iteration }}</td>
                                                <td>{{$teacher_appointment->teacher->name}}</td>
                                                <td>{{$teacher_appointment->topic}}</td>
                                                <td>{{$teacher_appointment->day}}</td>
                                                <td>{{$teacher_appointment->from}}</td>
                                                <td>{{$teacher_appointment->duration}}</td>
                                                <td>
                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#Delete_receipt{{$teacher_appointment->id}}" ><i class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>
                                        
                                            <!-- Delete meeting zoom  -->
                                            <div class="modal fade" id="Delete_receipt{{$teacher_appointment->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">حذف {{$teacher_appointment->topic}}</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{route('instructor_delete_appointment2')}}" method="post">
                                                                @csrf
                                                                <input type="hidden" name="id" value="{{$teacher_appointment->id}}">
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
