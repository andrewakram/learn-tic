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
                <h4 class="title float-left">My courses</h4>
                <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
            </nav>
        </div>
        <div class="col-lg-12">
            <div class="my_course_content_container">
                <div class="my_course_content mb30">
                    <div class="my_course_content_header">
                        <div class="col-xl-4">
                            <div class="instructor_search_result style2">
                                <h4 class="mt10">Bookmarked Courses</h4>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="candidate_revew_select style2 ">
                                <form id="SearchCourses" method="post" class="form-inline my-2 my-lg-0"
                                      action="{{route('search_instructor_courses')}}"
                                      enctype="multipart/form-data">

                                    @csrf
                                    <ul class="mb0">
                                        <li class="list-inline-item">
                                            <select id="StageId" name="stage_id" class="selectpicker show-tick">
                                                <option disabled selected></option>
                                                @foreach($data['stages'] as $stage)
                                                    <option value="{{$stage->id}}">{{$stage->title}}</option>
                                                @endforeach
                                            </select>
                                        </li>
                                        <li class="list-inline-item">
                                            <div class="candidate_revew_search_box course fn-520">
                                                <input class="form-control mr-sm-2" name="search_key" type="search"
                                                       placeholder="Search Courses" aria-label="Search">
                                                <button class="btn my-2 my-sm-0" type="submit"><span
                                                        class="flaticon-magnifying-glass"></span></button>
                                            </div>
                                        </li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="my_course_content_list">

                        @foreach($data['courses'] as $course)
                            <div class="mc_content_list">
                                <div class="thumb">
                                    <img class="img-whp" src="{{$course->image}}" alt="t1.jpg">
                                    <div class="overlay"></div>
                                </div>
                                <div class="details">
                                    <div class="mc_content">
                                        <p class="subtitle">{{$course->teacher->teacherInfo->full_name}}</p>
                                        <h5 class="title">{{$course->title}}</h5>
                                        <p>{{$course->body}}</p>
                                    </div>
                                    <div class="mc_footer">
                                        <ul class="mc_meta fn-414">
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="flaticon-profile"></i></a></li>
                                            <li class="list-inline-item"><a
                                                    href="#">{{$course->courseOrders->count()}}</a></li>
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="flaticon-comment"></i></a></li>
                                            <li class="list-inline-item"><a href="#">25</a></li>
                                        </ul>
                                        <ul class="mc_review fn-414">
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#">(5)</a></li>
                                            <li class="list-inline-item tc_price fn-414"><a
                                                    href="#">${{$course->price_after}}</a></li>
                                        </ul>
                                        <ul class="view_edit_delete_list float-right">
                                            {{--                                        <li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="top" title="View"><span class="flaticon-preview"></span></a></li>--}}
                                            <li class="list-inline-item"><a
                                                    href="{{route('instructor_edit_course',[$course->id])}}"
                                                    data-toggle="tooltip" data-placement="top" title="Edit"><span
                                                        class="flaticon-edit"></span></a></li>
                                            <li class="list-inline-item">
                                                <a class="delete" data-id="{{$course->id}}" data-toggle="modal"
                                                   data-target="#single_{{$course->id}}" data-toggle="modal"
                                                   data-placement="top" title="Delete">
                                                    <span class="flaticon-delete-button"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            {{-- Delete Modal --}}

                            <div id="single_{{$course->id}}" class="modal fade" tabindex="-1" data-backdrop="static"
                                 data-keyboard="false">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header bg-danger ">
                                            <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true"></button>
                                            <h4 class="modal-title text-white">تأكيد</h4>
                                        </div>
                                        <form id="delete_form" method="post"
                                              action="{{route('instructor_delete_course')}}">
                                            @csrf

                                            <div class="modal-body">
                                                <h5> هل أنت متأكد أنك تريد الحذف؟ </h5>
                                                <input type="hidden" name="course_id" id="row_id"
                                                       value="{{$course->id}}">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-danger text-whit delete_btn">حذف
                                                </button>
                                                <button type="button" data-dismiss="modal" class="btn btn-dark ">رجوع
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach

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