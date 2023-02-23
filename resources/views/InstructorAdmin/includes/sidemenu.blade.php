<div class="col-sm-12 col-lg-4 col-xl-2 dn-smd pl0">
    <div class="user_board">
        <div class="user_profile">
            <div class="media">
                <div class="media-body">
                    <h4 class="mt-0">Start</h4>
                </div>
            </div>
        </div>
        <div class="dashbord_nav_list">
            <ul>
                <li class="{{request()->segment(1) == 'my-profile' ? 'active' : ''}}">
                    <a href="{{route('my_profile')}}">
                        <span class="flaticon-puzzle-1" dir="{{session()->get('lang') == 'ar' ? 'rtl' : 'ltr'}}"></span> Dashboard
                    </a>
                </li>
                <li class="{{request()->segment(1) == 'instructor-consultation' ? 'active' : ''}}">
                    <a href="{{route('instructor-consultation')}}">
                        <span class="flaticon-add-contact" dir="{{session()->get('lang') == 'ar' ? 'rtl' : 'ltr'}}"></span> الاستشارات
                    </a>
                </li>
                <li class="{{request()->segment(1) == 'instructor-courses' ? 'active' : ''}}">
                    <a href="{{route('instructor_courses')}}"><span class="flaticon-like" dir="{{session()->get('lang') == 'ar' ? 'rtl' : 'ltr'}}"></span> My Courses</a>
                </li>
                <li class="{{request()->segment(1) == 'instructor-add-course' ? 'active' : ''}}">
                    <a href="{{route('instructor_add_course')}}">
                        <span class="flaticon-add-contact" dir="{{session()->get('lang') == 'ar' ? 'rtl' : 'ltr'}}"></span> Add Course
                    </a>
                </li>
                <li class="{{request()->segment(1) == 'instructor-appointment' ? 'active' : ''}}">
                    <a href="{{route('instructor_appointment')}}">
                        <span class="flaticon-add-contact" dir="{{session()->get('lang') == 'ar' ? 'rtl' : 'ltr'}}"></span> Add Appointment
                    </a>
                </li>
                <li class="{{request()->segment(1) == 'instructor-appointment2' ? 'active' : ''}}">
                    <a href="{{route('instructor_appointment2')}}">
                        <span class="flaticon-add-contact" dir="{{session()->get('lang') == 'ar' ? 'rtl' : 'ltr'}}"></span> Add Appointment2
                    </a>
                </li>

{{--                <li>--}}
{{--                    <a href="page-my-order.html">--}}
{{--                        <span class="flaticon-shopping-bag-1" dir="{{session()->get('lang') == 'ar' ? 'rtl' : 'ltr'}}"></span> Order--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="page-my-message.html">--}}
{{--                        <span class="flaticon-speech-bubble" dir="{{session()->get('lang') == 'ar' ? 'rtl' : 'ltr'}}"></span> Messages--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="page-my-review.html">--}}
{{--                        <span class="flaticon-rating" dir="{{session()->get('lang') == 'ar' ? 'rtl' : 'ltr'}}"></span> Reviews--}}
{{--                    </a>--}}
{{--                </li>--}}
            </ul>
            <h4>Account</h4>
            <ul>
                <li class="{{request()->segment(1) == 'instructor-personal-profile' ? 'active' : ''}}">
                    <a href="{{route('personalProfile')}}">
                        <span class="flaticon-settings" dir="{{session()->get('lang') == 'ar' ? 'rtl' : 'ltr'}}"></span> Settings
                    </a>
                </li>
                <li><a href="{{ route('logout') }}"><span class="flaticon-logout" dir="{{session()->get('lang') == 'ar' ? 'rtl' : 'ltr'}}"></span> Logout</a></li>
            </ul>
        </div>
    </div>
</div>
