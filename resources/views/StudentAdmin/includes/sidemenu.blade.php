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
                    <a href="{{route('student_my_profile')}}">
                        <span class="flaticon-puzzle-1" dir="{{session()->get('lang') == 'ar' ? 'rtl' : 'ltr'}}"></span> Dashboard
                    </a>
                </li>
                <li class="{{request()->segment(1) == 'instructor-courses' ? 'active' : ''}}">
                    <a href="{{route('instructor_courses')}}"><span class="flaticon-like" dir="{{session()->get('lang') == 'ar' ? 'rtl' : 'ltr'}}"></span> My Courses</a>
                </li>
                <li class="{{request()->segment(1) == 'student-payments' ? 'active' : ''}}">
                    <a href="{{route('student-payments')}}">
                        <span class="flaticon-add-contact" dir="{{session()->get('lang') == 'ar' ? 'rtl' : 'ltr'}}"></span> المدفوعات
                    </a>
                </li>
                <li class="{{request()->segment(1) == 'student-consultation' ? 'active' : ''}}">
                    <a href="{{route('student-consultation')}}">
                        <span class="flaticon-add-contact" dir="{{session()->get('lang') == 'ar' ? 'rtl' : 'ltr'}}"></span> الاستشارات
                    </a>
                </li>

                <li>
                    <a href="page-my-order.html">
                        <span class="flaticon-shopping-bag-1" dir="{{session()->get('lang') == 'ar' ? 'rtl' : 'ltr'}}"></span> Order
                    </a>
                </li>
                <li>
                    <a href="page-my-message.html">
                        <span class="flaticon-speech-bubble" dir="{{session()->get('lang') == 'ar' ? 'rtl' : 'ltr'}}"></span> Messages
                    </a>
                </li>
                <li>
                    <a href="page-my-review.html">
                        <span class="flaticon-rating" dir="{{session()->get('lang') == 'ar' ? 'rtl' : 'ltr'}}"></span> Reviews
                    </a>
                </li>
            </ul>
            <h4>Account</h4>
            <ul>
                <li class="{{request()->segment(1) == 'instructor-personal-profile' ? 'active' : ''}}">
                    <a href="{{route('studentPersonalProfile')}}">
                        <span class="flaticon-settings" dir="{{session()->get('lang') == 'ar' ? 'rtl' : 'ltr'}}"></span> Settings
                    </a>
                </li>
                <li><a href="{{ route('logout') }}"><span class="flaticon-logout" dir="{{session()->get('lang') == 'ar' ? 'rtl' : 'ltr'}}"></span> Logout</a></li>
            </ul>
        </div>
    </div>
</div>
