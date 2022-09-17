@extends('InstructorAdmin.index')
@section('style')

@endsection
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="dashboard_navigationbar dn db-991">
                <div class="dropdown">
                    <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10"></i> Dashboard Navigation</button>
                    <ul id="myDropdown" class="dropdown-content">
                        <li ><a href="page-dashboard.html"><span class="flaticon-puzzle-1"></span> Dashboard</a></li>
                        <li><a href="page-instructor-courses.html"><span class="flaticon-like"></span> My Courses</a></li>
                        <li><a href="page-my-order.html"><span class="flaticon-shopping-bag-1"></span> Order</a></li>
                        <li><a href="page-my-message.html"><span class="flaticon-speech-bubble"></span> Messages</a></li>
                        <li><a href="page-my-review.html"><span class="flaticon-rating"></span> Reviews</a></li>
                        <li><a href="page-add-course.html"><span class="flaticon-add-contact"></span> Add Course</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <nav class="breadcrumb_widgets" aria-label="breadcrumb mb30">
                <h4 class="title float-left">User Profile</h4>
                <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
            </nav>
        </div>
        <section class="our-team pb40">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-xl-3 teacher_info"  >
                        <div class="teacher_avatar">
                            <img  src="{{$data['instructor']->image}}" alt="teacher.png">
                            <h3> {{$data['instructor']->name}} </h3>
                            <span> {{ isset($data['instructor']->teacherInfo->job_title) ? $data['instructor']->teacherInfo->job_title : "Job Title" }}</span>
                            <span> {{$data['instructor']->email}} </span>
                            <span> {{$data['instructor']->phone }} </span>
                        </div>
                        <br>
{{--                        <div class="teacher_social">--}}
{{--                            <a href="" class="fa fa-facebook-f"></a>--}}
{{--                            <a href="" class="fa fa-linkedin"></a>--}}
{{--                            <a href="" class="fa fa-twitter" ></a>--}}
{{--                            <a href="" class="fa fa-youtube"></a>--}}
{{--                        </div>--}}



                        <div class="teacher_achieve">
                            <div class="teacher_achieve_list">

                                <i class="fa fa-user"></i>
                                <h3> {{$data['instructor_students_count']}} </h3>
                                <span> Students </span>
                            </div>
                            <div class="teacher_achieve_list">
                                <i class="fa fa-star"></i>
                                <h3> {{$data['instructor_rate_count']}} </h3>
                                <span> Rating </span>
                            </div>
                            <div class="teacher_achieve_list">
                                <i class="fa fa-book"></i>
                                <h3> {{$data['instructor_coueses_count']}} </h3>
                                <span> Courses </span>
                            </div>
                        </div>

                        <div class="teacher_about">
                            <h3> About Me</h3>
                            <p>
                                {{$data['instructor']->teacherInfo->desctiption}}
                            </p>
                            </br>
{{--                            <p>Lorem ipsum dolor sit amet conse ctetur adipi sicing elit. Aut animi sed labo rum. Nam--}}
{{--                                esse--}}
{{--                                ipsum ab mole stias rem corr upti moles tiae expe dita hic aspe riores eius, vitae unde--}}
{{--                                neces sitat ibus, mai ore bland itiis magni.--}}
{{--                            </p>--}}
                        </div>
                        <div class=" ui_kit_button search_btn mb0">
                            <a href="{{route('personalProfileEdit')}}" type="button" class="btn dbxshad btn-lg btn-thm circle white">Edit Profile</a>
                        </div>

                    </div>

                    <div class=" col-lg-8 col-xl-9">

                        <div class="my_course_content_container">
                            <div class="my_setting_content mb30">
                                <div class="my_setting_content_header">

                                    <div class="my_sch_title">
                                        <h4 class="m0">Personal Details</h4>

                                        <ul>
                                            <li>
                                                Full Name <span>{{$data['instructor']->teacherInfo->full_name}}</span>
                                            </li>
                                            <li>
                                                Name <span>{{$data['instructor']->name}} </span>
                                            </li>

                                            <li>
                                                Email <span>{{$data['instructor']->email}}</span>
                                            </li>
                                            <li>
                                                Phone <span>{{$data['instructor']->phone}}</span>
                                            </li>
{{--                                            <li>--}}
{{--                                                Address <span>California, TX 70240 </span>--}}
{{--                                            </li>--}}
                                            <li>
                                                Gender    <span>{{$data['instructor']->gender}}</span>
                                            </li>

                                            <li>
                                                Rating <span>{{$data['instructor_rate_count']}}</span>
                                            </li>
                                            <li>
                                                nationality <span>{{isset($data['instructor']->nationality) ? $data['instructor']->nationality : 'Saudi Arabia'}}</span>
                                            </li>
                                            <li>
                                                Residence id <span>{{$data['instructor']->teacherInfo->residence_id}}</span>
                                            </li>


                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="my_course_content_container">
                            <div class="my_setting_content mb30">
                                <div class="my_setting_content_header">

                                    <div class="my_sch_title">
                                        <h4 class="m0">Category Details</h4>
                                        <ul>
                                            <li>
                                                Category  <span> Arabic</span>
                                            </li>
                                            <li>
                                                Years Of Experience  <span> 12 Year</span>
                                            </li>
                                            <li>
                                                Qualification   <span>Master</span>
                                            </li>
                                            <li>
                                                University     <span>Ain Shams</span>
                                            </li>
                                            <li>
                                                learn Type   <span> Online</span>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="my_course_content_container">
                            <div class="my_setting_content mb30">
                                <div class="my_setting_content_header">

                                    <div class="my_sch_title">
                                        <h4 class="m0">Query Cost</h4>
                                        <ul>
                                            <li>
                                                Query Cost Normal    <span> 23$ / Hour</span>
                                            </li>
                                            <li>
                                                Query Cost Urgent    <span> 30$ / Hour</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="my_course_content_container">
                            <div class="my_setting_content mb30">
                                <div class="my_setting_content_header">

                                    <div class="my_sch_title">
                                        <h4 class="m0">My Uploads</h4>
                                        <ul>
                                            <li>
                                                My CV <span><button class="btn"><i class="fa fa-download"></i> Download My CV</button>																</span>
                                            </li>
                                            <li>
                                                Specialization Certificate <span><button class="btn"><i class="fa fa-download"></i> Download Specialization Certificate</button>																</span>
                                            </li>
                                            <li>
                                                National Identity <span><button class="btn"><i class="fa fa-download"></i> Download National identity</button>																</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection

@section('script')
    <script type="text/javascript">


    </script>
@endsection
