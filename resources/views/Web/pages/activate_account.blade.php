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
                        <h4 class="breadcrumb_title"> تفعيل الحساب </h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">{{ trans('lang.home') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">تفعيل الحساب</li>
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
                            <h3 class="text-center">تفعيل الحساب</h3>
                        </div>
                        <form
                            @if($type == 'teacher')
                                action="{{route('instructorActivateAccount')}}"
                            @elseif($type == 'user')
                                action="{{route('studentActivateAccount')}}"
                            @endif

                            method="post"
                        >
                            @csrf
                            <div class="form-group">
                                <input type="hidden" name="email" value="{{session()->get('email')}}" class="form-control" id="exampleInputEmail13"
                                       placeholder="{{ trans('lang.email_address') }}">
                            </div>
                            <div class="form-group">
                                <input type="email" value="{{session()->get('email')}}" disabled class="form-control" id="exampleInputEmail3"
                                       placeholder="{{ trans('lang.email_address') }}">
                            </div>
                            <div class="form-group">
                                <input type="number" name="code" class="form-control" id="exampleInputPassword4"
                                       placeholder="كود التفعيل">
                            </div>

                            <button type="submit" class="btn btn-log btn-block btn-thm2">تفعيل</button>
                        </form>

                        <!--
                        <div class="divide">
                            <span class="lf_divider">Or</span>
                            <hr>
                        </div>
                        <div class="row mt40">
                            <div class="col-lg">
                                <button type="submit" class="btn btn-block color-white bgc-fb mb0"><i class="fa fa-facebook float-left mt5"></i> Facebook</button>
                            </div>
                            <div class="col-lg">
                                <button type="submit" class="btn btn2 btn-block color-white bgc-gogle mb0"><i class="fa fa-google float-left mt5"></i> Google</button>
                            </div>
                        </div>
                    -->
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')

@endsection
