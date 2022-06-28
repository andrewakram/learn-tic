<!--///////////////////////-->
<!-- Main Header Nav -->
<header class="header-nav menu_style_home_one navbar-scrolltofixed stricky main-menu">
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
                <img class="logo1 img-fluid" src="{{asset('project')}}/images/header-logo.png"  alt="header-logo.png">
                <img class="logo2 img-fluid" src="{{asset('project')}}/images/header-logo2.png"  width="200px" alt="header-logo2.png">

            </a>
            <!-- Responsive Menu Structure-->
            <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
            <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
                <li>
                    <a href="{{route('home')}}"><span class="title">{{ __('lang.home') }}</span></a>
                </li>

                <li>
                    <a href="{{route('courses')}}"><span class="title">{{ __('lang.courses') }}</span></a>
                    <!-- Level Two-->

                </li>

                <li>
                    <a href="{{route('instructors')}}"><span class="title">{{ __('lang.instructors') }}</span></a>
                    <!-- Level Two-->

                </li>

                <li>
                    <a href="{{route('about_us')}}"><span class="title"> {{ __('lang.about_us') }}</span></a>
                </li>

                <li>

                    <a href="{{route('blogs')}}"><span class="title">{{ __('lang.blogs') }}</span></a>

                </li>

                <li class="last">
                    <a href="{{route('contact_us')}}"><span class="title">{{ __('lang.contact_us') }}</span></a>
                </li>
            </ul>


            <ul class="sign_up_btn pull-right dn-smd mt20">
                <li class="list-inline-item list_s">

                    <div class="">
                        <ul class="cart">
                            <li>
                                <a href="#" class="btn flaticon-user"><span class="dn-lg">{{ __('lang.login_register') }}</span></a>
                                <ul class="dropdown_content login_drop">


                                    <li class="list_content">

                                        <a href="{{route('student_login')}}" class="btn btn-thm cart_btns"> {{ __('lang.login_student') }} </a>
                                        <a href="{{route('instructor_login')}}" class="btn btn-thm3 checkout_btns">{{ __('lang.login_teacher') }} </a>
                                    </li>

                                </ul>
                            </li>
                            <li>
                                @if(session()->get('lang') == 'ar')
                                    <a class="bold" href="{{asset('change-language/en')}}">
                                        <span class="btn">
                                            <i class="fa fa-language"></i>
                                            {{trans('lang.english')}}
                                        </span>
                                    </a>
                                @else
                                    <a class="bold" href="{{asset('change-language/ar')}}">
                                        <span class="btn">
                                            <i class="fa fa-language"></i>
                                            {{trans('lang.arabic')}}
                                        </span>
                                    </a>
                                @endif
                            </li>
                        </ul>
                    </div>

                </li>




                <!--

                                <li class="list-inline-item ">
                                    <div class="cart_btn">
                                        <ul class="cart">
                                            <li>
                                                <a href="#" class="btn cart_btn flaticon-shopping-bag"><span>5</span></a>
                                                <ul class="dropdown_content">
                                                    <li class="list_content">
                                                        <a href="#">
                                                            <img class="float-left" src="http://via.placeholder.com/50x50" alt="50x50">
                                                            <p>Dolar Sit Amet</p>
                                                            <small>1 × $7.90</small>
                                                            <span class="close_icon float-right"><i class="fa fa-plus"></i></span>
                                                        </a>
                                                    </li>
                                                    <li class="list_content">
                                                        <a href="#">
                                                            <img class="float-left" src="http://via.placeholder.com/50x50" alt="50x50">
                                                            <p>Lorem Ipsum</p>
                                                            <small>1 × $7.90</small>
                                                            <span class="close_icon float-right"><i class="fa fa-plus"></i></span>
                                                        </a>
                                                    </li>
                                                    <li class="list_content">
                                                        <a href="#">
                                                            <img class="float-left" src="http://via.placeholder.com/50x50" alt="50x50">
                                                            <p>Is simply</p>
                                                            <small>1 × $7.90</small>
                                                            <span class="close_icon float-right"><i class="fa fa-plus"></i></span>
                                                        </a>
                                                    </li>
                                                    <li class="list_content">
                                                        <h5>Subtotal: $57.70</h5>
                                                        <a href="page-shop-cart.html" class="btn btn-thm cart_btns">View cart</a>
                                                        <a href="page-shop-checkout.html" class="btn btn-thm3 checkout_btns">Checkout</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                            -->
            </ul><!-- Button trigger modal -->
        </nav>
    </div>
</header>
<!-- Modal -->
<div class="sign_up_modal modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <ul class="sign_up_tab nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Register</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="login_form">
                        <form action="#">
                            <div class="heading">
                                <h3 class="text-center">Login to your account</h3>
                                <p class="text-center">Don't have an account? <a class="text-thm" href="#">Sign Up!</a></p>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-group custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="exampleCheck1">
                                <label class="custom-control-label" for="exampleCheck1">Remember me</label>
                                <a class="tdu btn-fpswd float-right" href="#">Forgot Password?</a>
                            </div>
                            <button type="submit" class="btn btn-log btn-block btn-thm2">Login</button>
                            <hr>
                            <div class="row mt40">
                                <div class="col-lg">
                                    <button type="submit" class="btn btn-block color-white bgc-fb"><i class="fa fa-facebook float-left mt5"></i> Facebook</button>
                                </div>
                                <div class="col-lg">
                                    <button type="submit" class="btn btn-block color-white bgc-gogle"><i class="fa fa-google float-left mt5"></i> Google</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="sign_up_form">
                        <div class="heading">
                            <h3 class="text-center">Create New Account</h3>
                            <p class="text-center">Have an account? <a class="text-thm" href="#">Login</a></p>
                        </div>
                        <form action="#">
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Confirm Password">
                            </div>
                            <div class="form-group custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="exampleCheck2">
                                <label class="custom-control-label" for="exampleCheck2">Want to become an instructor?</label>
                            </div>
                            <button type="submit" class="btn btn-log btn-block btn-thm2">Register</button>
                            <hr>
                            <div class="row mt40">
                                <div class="col-lg">
                                    <button type="submit" class="btn btn-block color-white bgc-fb"><i class="fa fa-facebook float-left mt5"></i> Facebook</button>
                                </div>
                                <div class="col-lg">
                                    <button type="submit" class="btn btn-block color-white bgc-gogle"><i class="fa fa-google float-left mt5"></i> Google</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Header Nav For Mobile -->
<div id="page" class="stylehome1 h0">
    <div class="mobile-menu">
        <div class="header stylehome1">
            <div class="main_logo_home2">
                <img class="nav_logo_img img-fluid float-left mt20" src="{{asset('project')}}/images/header-logo.png" alt="header-logo.png">

            </div>
            <ul class="menu_bar_home2">

                <li class="list-inline-item"><a href="#menu"><span></span><span></span><span></span></a></li>
            </ul>
        </div>
    </div><!-- /.mobile-menu -->
    <nav id="menu" class="stylehome1">
        <ul>
            <li><a href="{{route('home')}}">Home </a></li>

            <li><a href="{{route('courses')}}"><span>Courses</span></a>

            </li>
            <li>
                <a href="{{route('instructors')}}"><span class="title">Instructors</span></a>
                <!-- Level Two-->

            </li>

            <li>
                <a href="{{route('about_us')}}"><span class="title">About Us</span></a>
            </li>

            <li>
                <a href="blogs"><span class="title">Blog</span></a>

            </li>

            <li class="last">
                <a href="{{route('contact_us')}}"><span class="title">Contact</span></a>
            </li>


            <li><a href="page-login.html"><span class="flaticon-user"></span> Login</a></li>
            <li><a href="page-register.html"><span class="flaticon-edit"></span> Register</a></li>
        </ul>
    </nav>
</div>
