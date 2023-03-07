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
						<h4 class="breadcrumb_title">{{ trans('lang.register_student') }}</h4>
						<ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="#">{{ trans('lang.home') }}</a></li>
						    <li class="breadcrumb-item active" aria-current="page">{{ trans('lang.register_student') }}</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our LogIn Register -->
	<section class="our-log-reg bgc-fa">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-lg-6 offset-lg-3">
					<div class="sign_up_form inner_page">
						<div class="heading">
							<h3 class="text-center">{{ trans('lang.register_student') }}</h3>
							<p class="text-center"> {{ trans('lang.have_account_sign') }} <a class="text-thm login" href="{{route('student_login')}}">{{ trans('lang.login') }}</a></p>
						</div>
						<div class="details">
							<form action="{{route('studentDoRegister')}}" method="post">
                                @csrf
								<div class="form-group">
							    	<input type="text" name="name" class="form-control" id="exampleInputName2" placeholder="{{ trans('lang.user_name') }} ">
								</div>
								 <div class="form-group">
							    	<input type="email" name="email" class="form-control" id="exampleInputEmail3" placeholder="{{ trans('lang.email_address') }}  ">
								</div>
                                <div class="form-group ">
                                    <input name="phone" type="tel" class="form-control" id="exampleInputEmail3" placeholder="{{ trans('lang.phone') }} ">
                                </div>
								<div class="form-group">
							    	<input type="password" name="password" class="form-control" id="exampleInputPassword4" placeholder="{{ trans('lang.password') }}">
								</div>
								<div class="form-group">
							    	<input type="password" name="c_password" class="form-control" id="exampleInputPassword5" placeholder="{{ trans('lang.confirm_password') }} ">
								</div>

                                <div class="form-group   form-control" >
                                    <div style="padding-top:10px">
                                        <input type="checkbox" name="terms" style="margin: 5px">
                                        <span>أوافق علي </span>
                                        <a target="_blank"
                                           style="text-decoration: underline;color: #009181;font-size: larger"
                                           href="{{route('terms_conditions')}}">
                                            {{ trans('lang.terms_conditions') }}
                                        </a>
                                    </div>
                                </div>

								<!--
								<div class="form-group custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="exampleCheck3">
									<label class="custom-control-label" for="exampleCheck3">Want to become an instructor?</label>
								</div>
							-->
								<button type="submit" class="btn btn-log btn-block btn-thm2">{{ trans('lang.register') }}</button>
								<!--
								<div class="divide">
									<span class="lf_divider">Or</span>
									<hr>
								</div>
							-->
							<!--
								<div class="row mt40">
									<div class="col-lg">
										<button type="submit" class="btn btn-block color-white bgc-fb mb0"><i class="fa fa-facebook float-left mt5"></i> Facebook</button>
									</div>
									<div class="col-lg">
										<button type="submit" class="btn btn2 btn-block color-white bgc-gogle mb0"><i class="fa fa-google float-left mt5"></i> Google</button>
									</div>
								</div>
							-->
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection

@section('script')

@endsection
