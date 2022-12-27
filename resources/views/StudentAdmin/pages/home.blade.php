@extends('StudentAdmin.index')
@section('style')

@endsection
@section('content')

    <div class="row">
            <div class="col-lg-12">
                <div class="dashboard_navigationbar dn db-991">
                    <div class="dropdown">
                        <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10"></i> Dashboard Navigation</button>
                        <ul id="myDropdown" class="dropdown-content">
                            <li class="active"><a href="page-dashboard.html"><span class="flaticon-puzzle-1"></span> Dashboard</a></li>
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
                    <h4 class="title float-left"> Student Activities</h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="{{route('my_profile')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                <div class="ff_one">
                    <div class="icon"><span class="flaticon-speech-bubble"></span></div>
                    <div class="detais">
                        <p>Messages</p>
                        <div class="timer">{{$data['messages_count']}}</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                <div class="ff_one style2">
                    <div class="icon"><span class="flaticon-rating"></span></div>
                    <div class="detais">
                        <p>Reviews</p>
                        <div class="timer">{{$data['orders_reviews_count']}}</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                <div class="ff_one style3">
                    <div class="icon"><span class="flaticon-online-learning"></span></div>
                    <div class="detais">
                        <p>Courses</p>
                        <div class="timer">{{$data['courese_count']}}</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                <div class="ff_one style4">
                    <div class="icon"><span class="flaticon-like"></span></div>
                    <div class="detais">
                        <p>Exams</p>
                        <div class="timer">{{$data['exams_count']}}</div>
                    </div>
                </div>
            </div>
{{--            <div class="col-xl-8">--}}
{{--                <div class="application_statics">--}}
{{--                    <h4>Your Profile Views</h4>--}}
{{--                    <div class="c_container"></div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="col-xl-4">
                <div class="recent_job_activity">
                    <h4 class="title">Notifications</h4>
                    <div class="grid">
                        <ul>
                            <li><div class="title">Status Update</div></li>
                            <li><p>This is an automated server response message. All systems are online.</p></li>
                        </ul>
                    </div>
                    <div class="grid">
                        <ul>
                            <li><div class="title">Status Update</div></li>
                            <li><p>This is an automated server response message. All systems are online.</p></li>
                        </ul>
                    </div>
                    <div class="grid">
                        <ul>
                            <li><div class="title">Status Update</div></li>
                            <li><p>This is an automated server response message. All systems are online.</p></li>
                        </ul>
                    </div>
                    <div class="grid">
                        <ul>
                            <li><div class="title">Status Update</div></li>
                            <li><p>This is an automated server response message. All systems are online.</p></li>
                        </ul>
                    </div>
                    <div class="grid mb0">
                        <ul class="pb0 mb0 bb_none">
                            <li><div class="title">Status Update</div></li>
                            <li><p>This is an automated server response message. All systems are online.</p></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

@endsection

@section('script')
    <script type="text/javascript">


    </script>
@endsection
