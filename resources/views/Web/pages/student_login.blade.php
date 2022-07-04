@extends('Web.index')
@section('style')

@endsection
@section('content')
    <!-- Inner Page Breadcrumb -->
    <section class="inner_page_breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 text-center">
                    <div class="breadcrumb_content">
                        <h4 class="breadcrumb_title"> {{ trans('lang.login_student') }} </h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">{{ trans('lang.home') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page"> {{ trans('lang.login_student') }} </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our LogIn Register -->
    <section class="our-log bgc-fa">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-6 offset-lg-3">
                    <div class="login_form inner_page">
                        <div class="heading">
                            <h3 class="text-center">{{ trans('lang.login_account') }}</h3>
                            <p class="text-center">{{ trans('lang.have_account') }} 
                                 <a class="text-thm sign_up"  href="{{route('student_register')}}">{{ trans('lang.sign_up') }} </a>
                            </p>
                        </div>

                        <form action="{{route('studentDoLogin')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" id="exampleInputEmail3"
                                       placeholder="{{ trans('lang.email_address') }}">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" id="exampleInputPassword4"
                                       placeholder="{{ trans('lang.password') }}">
                            </div>
                            <div class="form-group custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="exampleCheck3">
                                <label class="custom-control-label" for="exampleCheck3">{{ trans('lang.remember') }}</label>
                                <a class="tdu btn-fpswd float-right" href="#">{{ trans('lang.forget_password') }}</a>
                            </div>
                            <button type="submit" class="btn btn-log btn-block btn-thm2">{{ trans('lang.login') }}</button>
                        </form>

                        <div class="divide">
                            <span class="lf_divider">Or</span>
                            <hr>
                        </div>
                        <div class="row mt40">
                            <div class="col-lg">
                                <button type="submit" class="btn btn-block color-white bgc-fb mb0"><i
                                        class="fa fa-facebook float-left mt5"></i> Facebook
                                </button>
                            </div>
                            <div class="col-lg">
                                <button type="submit" class="btn btn2 btn-block color-white bgc-gogle mb0"><i
                                        class="fa fa-google float-left mt5"></i> Google
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@section('script')

@endsection
