<!-- Main Header Nav -->
<header class="header-nav menu_style_home_one dashbord_pages navbar-scrolltofixed stricky main-menu">
    <div class="container-fluid">
        <!-- Ace Responsive Menu -->
        <nav>
            <!-- Menu Toggle btn-->
            <div class="menu-toggle">
                <img class="nav_logo_img img-fluid" src="{{asset('project')}}/images/header-logo.png" alt="header-logo.png">
                <button type="button" id="menu-btn">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <a href="#" class="navbar_brand float-left dn-smd">
                <img class="logo1 img-fluid" src="{{asset('project')}}/images/header-logo.png" alt="header-logo.png">
                <img class="logo2 img-fluid" src="{{asset('project')}}/images/header-logo.png" width="200" alt="header-logo.png">
            </a>
            <!-- Responsive Menu Structure-->
            <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
            <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
                <li>
                    <a href="index.html"><span class="title">Home</span></a>
                </li>
                <li>
                    <a href="page-course-v3.html"><span class="title">Courses</span></a>
                    <!-- Level Two-->
                    <ul>
                        <li>
                        <li><a href="page-course-single-v2.html">Course Detailes </a></li>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="page-instructors.html"><span class="title">Instructors</span></a>
                    <!-- Level Two-->
                    <ul>
                        <li>
                        <li><a href="page-instructors-single.html">Instructor Detailes </a></li>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="page-about.html"><span class="title">About Us</span></a>
                </li>


                <li>
                    <a href="page-blog-v1.html"><span class="title">Blog</span></a>
                    <ul>
                        <li><a href="page-blog-single.html">Single Post</a></li>
                    </ul>
                </li>

                <li class="last">
                    <a href="page-contact.html"><span class="title">Contact</span></a>
                </li>

            </ul>
            <ul class="header_user_notif pull-right dn-smd">
                <li class="user_notif">
                    <div class="dropdown">
                        <a class="notification_icon" href="#" data-toggle="dropdown"><span class="flaticon-email"></span></a>
                        <div class="dropdown-menu notification_dropdown_content">
                            <div class="so_heading">
                                <p>Notifications</p>
                            </div>
                            <div class="so_content" data-simplebar="init">
                                <ul>
                                    <li>
                                        <h5>Status Update</h5>
                                        <p>This is an automated server response message. All systems are online.</p>
                                    </li>
                                    <li>
                                        <h5>Status Update</h5>
                                        <p>This is an automated server response message. All systems are online.</p>
                                    </li>
                                    <li>
                                        <h5>Status Update</h5>
                                        <p>This is an automated server response message. All systems are online.</p>
                                    </li>
                                    <li>
                                        <h5>Status Update</h5>
                                        <p>This is an automated server response message. All systems are online.</p>
                                    </li>
                                    <li>
                                        <h5>Status Update</h5>
                                        <p>This is an automated server response message. All systems are online.</p>
                                    </li>
                                    <li>
                                        <h5>Status Update</h5>
                                        <p>This is an automated server response message. All systems are online.</p>
                                    </li>
                                    <li>
                                        <h5>Status Update</h5>
                                        <p>This is an automated server response message. All systems are online.</p>
                                    </li>
                                </ul>
                            </div>
                            <a class="view_all_noti text-thm" href="#">View all alerts</a>
                        </div>
                    </div>
                </li>
                <li class="user_notif">
                    <div class="dropdown">
                        <a class="notification_icon" href="#" data-toggle="dropdown"><span class="flaticon-alarm"></span></a>
                        <div class="dropdown-menu notification_dropdown_content">
                            <div class="so_heading">
                                <p>Notifications</p>
                            </div>
                            <div class="so_content" data-simplebar="init">
                                <ul>
                                    <li>
                                        <h5>Status Update</h5>
                                        <p>This is an automated server response message. All systems are online.</p>
                                    </li>
                                    <li>
                                        <h5>Status Update</h5>
                                        <p>This is an automated server response message. All systems are online.</p>
                                    </li>
                                    <li>
                                        <h5>Status Update</h5>
                                        <p>This is an automated server response message. All systems are online.</p>
                                    </li>
                                    <li>
                                        <h5>Status Update</h5>
                                        <p>This is an automated server response message. All systems are online.</p>
                                    </li>
                                    <li>
                                        <h5>Status Update</h5>
                                        <p>This is an automated server response message. All systems are online.</p>
                                    </li>
                                    <li>
                                        <h5>Status Update</h5>
                                        <p>This is an automated server response message. All systems are online.</p>
                                    </li>
                                    <li>
                                        <h5>Status Update</h5>
                                        <p>This is an automated server response message. All systems are online.</p>
                                    </li>
                                </ul>
                            </div>
                            <a class="view_all_noti text-thm" href="#">View all alerts</a>
                        </div>
                    </div>
                </li>
                <li class="user_setting">
                    <div class="dropdown">
                        <a class="btn dropdown-toggle" href="#" data-toggle="dropdown"><img class="rounded-circle" src="images/team/e1.png" alt="e1.png"></a>
                        <div class="dropdown-menu">
                            <div class="user_set_header">
                                <img class="float-left" src="{{asset('project')}}/images/team/e1.png" alt="e1.png">
                                <p>Kim Hunter <br><span class="address">kimhunter@gmail.com</span></p>
                            </div>
                            <div class="user_setting_content">
                                <a class="dropdown-item active" href="{{ route('my_profile') }}">My Profile</a>
{{--                                <a class="dropdown-item" href="#">Messages</a>--}}
{{--                                <a class="dropdown-item" href="#">Purchase history</a>--}}
{{--                                <a class="dropdown-item" href="#">Help</a>--}}
                                <a class="dropdown-item" href="{{ route('logout') }}">Log out</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</header>

<!-- Main Header Nav For Mobile -->
<div id="page" class="stylehome1 h0">
    <div class="mobile-menu">
        <ul class="header_user_notif dashbord_pages_mobile_version pull-right">
            <li class="user_notif">
                <div class="dropdown">
                    <a class="notification_icon" href="#" data-toggle="dropdown"><span class="flaticon-email"></span></a>
                    <div class="dropdown-menu notification_dropdown_content">
                        <div class="so_heading">
                            <p>Notifications</p>
                        </div>
                        <div class="so_content" data-simplebar="init">
                            <ul>
                                <li>
                                    <h5>Status Update</h5>
                                    <p>This is an automated server response message. All systems are online.</p>
                                </li>
                                <li>
                                    <h5>Status Update</h5>
                                    <p>This is an automated server response message. All systems are online.</p>
                                </li>
                                <li>
                                    <h5>Status Update</h5>
                                    <p>This is an automated server response message. All systems are online.</p>
                                </li>
                                <li>
                                    <h5>Status Update</h5>
                                    <p>This is an automated server response message. All systems are online.</p>
                                </li>
                                <li>
                                    <h5>Status Update</h5>
                                    <p>This is an automated server response message. All systems are online.</p>
                                </li>
                                <li>
                                    <h5>Status Update</h5>
                                    <p>This is an automated server response message. All systems are online.</p>
                                </li>
                                <li>
                                    <h5>Status Update</h5>
                                    <p>This is an automated server response message. All systems are online.</p>
                                </li>
                            </ul>
                        </div>
                        <a class="view_all_noti text-thm" href="#">View all alerts</a>
                    </div>
                </div>
            </li>
            <li class="user_notif">
                <div class="dropdown">
                    <a class="notification_icon" href="#" data-toggle="dropdown"><span class="flaticon-alarm"></span></a>
                    <div class="dropdown-menu notification_dropdown_content">
                        <div class="so_heading">
                            <p>Notifications</p>
                        </div>
                        <div class="so_content" data-simplebar="init">
                            <ul>
                                <li>
                                    <h5>Status Update</h5>
                                    <p>This is an automated server response message. All systems are online.</p>
                                </li>
                                <li>
                                    <h5>Status Update</h5>
                                    <p>This is an automated server response message. All systems are online.</p>
                                </li>
                                <li>
                                    <h5>Status Update</h5>
                                    <p>This is an automated server response message. All systems are online.</p>
                                </li>
                                <li>
                                    <h5>Status Update</h5>
                                    <p>This is an automated server response message. All systems are online.</p>
                                </li>
                                <li>
                                    <h5>Status Update</h5>
                                    <p>This is an automated server response message. All systems are online.</p>
                                </li>
                                <li>
                                    <h5>Status Update</h5>
                                    <p>This is an automated server response message. All systems are online.</p>
                                </li>
                                <li>
                                    <h5>Status Update</h5>
                                    <p>This is an automated server response message. All systems are online.</p>
                                </li>
                            </ul>
                        </div>
                        <a class="view_all_noti text-thm" href="#">View all alerts</a>
                    </div>
                </div>
            </li>
            <li class="user_setting">
                <div class="dropdown">
                    <a class="btn dropdown-toggle" href="#" data-toggle="dropdown"><img class="rounded-circle" src="images/team/e1.png" alt="e1.png"></a>
                    <div class="dropdown-menu">
                        <div class="user_set_header">
                            <img class="float-left" src="{{asset('project')}}/images/team/e1.png" alt="e1.png">
                            <p>Kim Hunter <br><span class="address">kimhunter@gmail.com</span></p>
                        </div>
                        <div class="user_setting_content">
                            <a class="dropdown-item active" href="#">My Profile</a>
                            <a class="dropdown-item" href="#">Messages</a>
                            <a class="dropdown-item" href="#">Purchase history</a>
                            <a class="dropdown-item" href="#">Help</a>
                            <a class="dropdown-item" href="#">Log out</a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="header stylehome1 dashbord_mobile_logo dashbord_pages">
            <div class="main_logo_home2">
                <img class="nav_logo_img img-fluid float-left mt20" src="{{asset('project')}}/images/header-logo.png" alt="header-logo.png">
            </div>
            <ul class="menu_bar_home2">
                <li class="list-inline-item"></li>
                <li class="list-inline-item"><a href="#menu"><span></span><span></span><span></span></a></li>
            </ul>
        </div>
    </div><!-- /.mobile-menu -->
    <nav id="menu" class="stylehome1">
        <ul>
            <li><a href="index.html">Home </a></li>

            <li><a href="page-course-v3.html"><span>Courses</span></a>
                <ul>
                    <li>
                    <li><a href="page-course-single-v2.html">Course Detailes </a></li>
                    </li>
                </ul>
            </li>
            <li>
                <a href="page-instructors.html"><span class="title">Instructors</span></a>
                <!-- Level Two-->
                <ul>
                    <li>
                    <li><a href="page-instructors-single.html">Instructor Detailes </a></li>
                    </li>
                </ul>
            </li>

            <li>
                <a href="page-about.html"><span class="title">About Us</span></a>
            </li>

            <li>
                <a href="page-blog-v1.html"><span class="title">Blog</span></a>
                <ul>
                    <li><a href="page-blog-single.html">Single Post</a></li>
                </ul>
            </li>

            <li class="last">
                <a href="page-contact.html"><span class="title">Contact</span></a>
            </li>
        </ul>
    </nav>
</div>
