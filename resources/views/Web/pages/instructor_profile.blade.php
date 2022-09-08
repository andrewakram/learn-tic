@extends('Web.index')
@section('style')

@endsection
@section('content')

    <!-- Our Dashbord -->
    <section class="our-dashbord dashbord pb50">
        <div class="container-fluid">
            <div class="row">
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
                                <li><a href="page-dashboard.html"><span class="flaticon-puzzle-1"></span> Dashboard</a></li>
                                <li class="active"><a href="page-instructor-courses.html"><span class="flaticon-like"></span> My Courses</a></li>
                                <li><a href="page-my-order.html"><span class="flaticon-shopping-bag-1"></span> Order</a></li>
                                <li><a href="page-my-message.html"><span class="flaticon-speech-bubble"></span> Messages</a></li>
                                <li><a href="page-my-review.html"><span class="flaticon-rating"></span> Reviews</a></li>
                                <li><a href="page-add-course.html"><span class="flaticon-add-contact"></span> Add Course</a></li>
                            </ul>
                            <h4>Account</h4>
                            <ul>
                                <li><a href="page-my-setting.html"><span class="flaticon-settings"></span> Settings</a></li>
                                <li><a href="page-login.html"><span class="flaticon-logout"></span> Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-8 col-xl-10">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="dashboard_navigationbar dn db-991">
                                <div class="dropdown">
                                    <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10"></i> Dashboard Navigation</button>
                                    <ul id="myDropdown" class="dropdown-content">
                                        <li ><a href="page-dashboard.html"><span class="flaticon-puzzle-1"></span> Dashboard</a></li>
                                        <li class="active"><a href="page-instructor-courses.html"><span class="flaticon-like"></span> My Courses</a></li>
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
                                            <div class="candidate_revew_select style2 text-right">
                                                <ul class="mb0">
                                                    <li class="list-inline-item">
                                                        <select class="selectpicker show-tick">
                                                            <option>Newly published</option>
                                                            <option>Recent</option>
                                                            <option>Old Review</option>
                                                        </select>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <div class="candidate_revew_search_box course fn-520">
                                                            <form class="form-inline my-2 my-lg-0">
                                                                <input class="form-control mr-sm-2" type="search" placeholder="Search Courses" aria-label="Search">
                                                                <button class="btn my-2 my-sm-0" type="submit"><span class="flaticon-magnifying-glass"></span></button>
                                                            </form>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="my_course_content_list">
                                        <div class="mc_content_list">
                                            <div class="thumb">
                                                <img class="img-whp" src="images/courses/t1.jpg" alt="t1.jpg">
                                                <div class="overlay"></div>
                                            </div>
                                            <div class="details">
                                                <div class="mc_content">
                                                    <p class="subtitle">Ali TUFAN</p>
                                                    <h5 class="title">Introduction Web Design with HTML</h5>
                                                    <p>Lorem ipsum dolor sit amet, est ei idque voluptua copiosae, pro detracto disputando reformidans at, ex vel suas eripuit. Vel alii zril maiorum ex, mea id sale eirmod epicurei. Sit te possit senserit, eam alia veritus maluisset ei, id cibo vocent ocurreret per. Te qui doming doctus referrentur, usu debet tamquam et.</p>
                                                </div>
                                                <div class="mc_footer">
                                                    <ul class="mc_meta fn-414">
                                                        <li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a></li>
                                                        <li class="list-inline-item"><a href="#">1548</a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a></li>
                                                        <li class="list-inline-item"><a href="#">25</a></li>
                                                    </ul>
                                                    <ul class="mc_review fn-414">
                                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li class="list-inline-item"><a href="#">(5)</a></li>
                                                        <li class="list-inline-item tc_price fn-414"><a href="#">$69.95</a></li>
                                                    </ul>
                                                    <ul class="view_edit_delete_list float-right">
                                                        <li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="top" title="View"><span class="flaticon-preview"></span></a></li>
                                                        <li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="top" title="Edit"><span class="flaticon-edit"></span></a></li>
                                                        <li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="top" title="Delete"><span class="flaticon-delete-button"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mc_content_list">
                                            <div class="thumb">
                                                <img class="img-whp" src="images/courses/t2.jpg" alt="t2.jpg">
                                                <div class="overlay"></div>
                                            </div>
                                            <div class="details">
                                                <div class="mc_content">
                                                    <p class="subtitle">Ali TUFAN</p>
                                                    <h5 class="title">Designing a Responsive Mobile Website with Muse</h5>
                                                    <p>Lorem ipsum dolor sit amet, est ei idque voluptua copiosae, pro detracto disputando reformidans at, ex vel suas eripuit. Vel alii zril maiorum ex, mea id sale eirmod epicurei. Sit te possit senserit, eam alia veritus maluisset ei, id cibo vocent ocurreret per. Te qui doming doctus referrentur, usu debet tamquam et.</p>
                                                </div>
                                                <div class="mc_footer">
                                                    <ul class="mc_meta fn-414">
                                                        <li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a></li>
                                                        <li class="list-inline-item"><a href="#">1548</a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a></li>
                                                        <li class="list-inline-item"><a href="#">25</a></li>
                                                    </ul>
                                                    <ul class="mc_review fn-414">
                                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li class="list-inline-item"><a href="#">(5)</a></li>
                                                        <li class="list-inline-item tc_price fn-414"><a href="#">$69.95</a></li>
                                                    </ul>
                                                    <ul class="view_edit_delete_list float-right">
                                                        <li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="top" title="View"><span class="flaticon-preview"></span></a></li>
                                                        <li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="top" title="Edit"><span class="flaticon-edit"></span></a></li>
                                                        <li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="top" title="Delete"><span class="flaticon-delete-button"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mc_content_list">
                                            <div class="thumb">
                                                <img class="img-whp" src="images/courses/t3.jpg" alt="t3.jpg">
                                                <div class="overlay"></div>
                                            </div>
                                            <div class="details">
                                                <div class="mc_content">
                                                    <p class="subtitle">Ali TUFAN</p>
                                                    <h5 class="title">Sketch: Creating Responsive SVG</h5>
                                                    <p>Lorem ipsum dolor sit amet, est ei idque voluptua copiosae, pro detracto disputando reformidans at, ex vel suas eripuit. Vel alii zril maiorum ex, mea id sale eirmod epicurei. Sit te possit senserit, eam alia veritus maluisset ei, id cibo vocent ocurreret per. Te qui doming doctus referrentur, usu debet tamquam et.</p>
                                                </div>
                                                <div class="mc_footer">
                                                    <ul class="mc_meta fn-414">
                                                        <li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a></li>
                                                        <li class="list-inline-item"><a href="#">1548</a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a></li>
                                                        <li class="list-inline-item"><a href="#">25</a></li>
                                                    </ul>
                                                    <ul class="mc_review fn-414">
                                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li class="list-inline-item"><a href="#">(5)</a></li>
                                                        <li class="list-inline-item tc_price fn-414"><a href="#">$69.95</a></li>
                                                    </ul>
                                                    <ul class="view_edit_delete_list float-right">
                                                        <li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="top" title="View"><span class="flaticon-preview"></span></a></li>
                                                        <li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="top" title="Edit"><span class="flaticon-edit"></span></a></li>
                                                        <li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="top" title="Delete"><span class="flaticon-delete-button"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mc_content_list">
                                            <div class="thumb">
                                                <img class="img-whp" src="images/courses/t4.jpg" alt="t4.jpg">
                                                <div class="overlay"></div>
                                            </div>
                                            <div class="details">
                                                <div class="mc_content">
                                                    <p class="subtitle">Ali TUFAN</p>
                                                    <h5 class="title">How to be a DJ? Make Electronic Music</h5>
                                                    <p>Lorem ipsum dolor sit amet, est ei idque voluptua copiosae, pro detracto disputando reformidans at, ex vel suas eripuit. Vel alii zril maiorum ex, mea id sale eirmod epicurei. Sit te possit senserit, eam alia veritus maluisset ei, id cibo vocent ocurreret per. Te qui doming doctus referrentur, usu debet tamquam et.</p>
                                                </div>
                                                <div class="mc_footer">
                                                    <ul class="mc_meta fn-414">
                                                        <li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a></li>
                                                        <li class="list-inline-item"><a href="#">1548</a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a></li>
                                                        <li class="list-inline-item"><a href="#">25</a></li>
                                                    </ul>
                                                    <ul class="mc_review fn-414">
                                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li class="list-inline-item"><a href="#">(5)</a></li>
                                                        <li class="list-inline-item tc_price fn-414"><a href="#">$69.95</a></li>
                                                    </ul>
                                                    <ul class="view_edit_delete_list float-right">
                                                        <li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="top" title="View"><span class="flaticon-preview"></span></a></li>
                                                        <li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="top" title="Edit"><span class="flaticon-edit"></span></a></li>
                                                        <li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="top" title="Delete"><span class="flaticon-delete-button"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt10">
                        <div class="col-lg-12">
                            <div class="copyright-widget text-center">
                                <p class="color-black2">Copyright LearnTic © 2022. All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')
    <script type="text/javascript">


    </script>
@endsection
