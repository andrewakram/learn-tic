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
						<h4 class="breadcrumb_title">{{ trans('lang.register_instructor') }}</h4>
						<ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="#">{{ trans('lang.home') }}</a></li>
						    <li class="breadcrumb-item active" aria-current="page">{{ trans('lang.register_instructor') }}</li>
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
					<div class="sign_up_form sign_up_instructor  inner_page">
						<div class="heading">
							<h3 class="text-center">{{ trans('lang.register_instructor') }}</h3>
							<p class="text-center">{{ trans('lang.have_account_sign') }}<a class="text-thm login" href="{{route('instructor_login')}}">{{ trans('lang.login') }}</a></p>
						</div>
						<div class="details">
							<form action="{{route('instructorDoRegister')}}" method="post">
                                @csrf
								<div class="form-group instructor_display ">
							    	<input name="name" type="text" class="form-control" id="exampleInputName2" placeholder="{{ trans('lang.user_name') }}">
								</div>
								 <div class="form-group instructor_display">
							    	<input name="email" type="email" class="form-control" id="exampleInputEmail3" placeholder="{{ trans('lang.email_address') }}">
								</div>

								<div class="form-group instructor_display">
							    	<input name="password" type="password" class="form-control" id="exampleInputPassword4" placeholder="{{ trans('lang.password') }}">
								</div>
								<div class="form-group instructor_display">
							    	<input name="c_password" type="password" class="form-control" id="exampleInputPassword5" placeholder="{{ trans('lang.confirm_password') }} ">
								</div>
								<div class="form-group instructor_display">
							    	<input name="phone" type="tel" class="form-control" id="exampleInputEmail3" placeholder="{{ trans('lang.phone') }} ">
								</div>

								<div class="form-group instructor_display">
                                    <select name="categoey_id" id="exampleInputlearn_type"
                                            placeholder="{{ trans('lang.category') }} "
                                            class="form-control">
                                        @foreach($data['categories'] as $category)
                                            <option
                                                value="{{$category->id}}" >
                                                {{$category->title}}
                                            </option>
                                        @endforeach
                                    </select>
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

	<!-- other way -->
{{--	<div class="container">--}}
{{--		<div class="row">--}}
{{--			<div class="col-sm-12 col-lg-6 offset-lg-3">--}}
{{--				<div class="sign_up_form inner_page">--}}
{{--					<div class="stepwizard">--}}
{{--						<div class="stepwizard-row setup-panel">--}}
{{--							<div class="stepwizard-step">--}}
{{--								<a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>--}}
{{--								<p> {{ trans('lang.enter_data') }}</p>--}}
{{--							</div>--}}
{{--							<div class="stepwizard-step">--}}
{{--								<a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>--}}
{{--								<p>{{ trans('lang.complete_data') }}</p>--}}
{{--							</div>--}}
{{--							<div class="stepwizard-step">--}}
{{--								<a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>--}}
{{--								<p>{{ trans('lang.upload_data') }}</p>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--					<form role="form">--}}
{{--						<div class=" setup-content" id="step-1">--}}
{{--							<!-- <h3> Step 1</h3> -->--}}
{{--							<!-- <div class="form-group">--}}
{{--								<label class="control-label">First Name</label>--}}
{{--								<input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter First Name"  />--}}
{{--							</div>--}}
{{--							<div class="form-group">--}}
{{--								<label class="control-label">Last Name</label>--}}
{{--								<input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Last Name" />--}}
{{--							</div> -->--}}
{{--							<div class="form-group">--}}
{{--								<input type="text" class="form-control" required="required" id="exampleInputName2" placeholder="{{ trans('lang.user_name') }} ">--}}
{{--							</div>--}}
{{--							<div class="form-group">--}}
{{--								<input type="email" class="form-control" required="required" id="exampleInputEmail3" placeholder="{{ trans('lang.email_address') }}  ">--}}
{{--							</div>--}}
{{--							<div class="form-group">--}}
{{--								<input type="number" class="form-control" required="required" id="exampleInputEmail3" placeholder="{{ trans('lang.phone') }}  ">--}}
{{--							</div>--}}
{{--							<div class="form-group instructor_display">--}}
{{--								<input type="password" class="form-control " required="required" id="exampleInputPassword4" placeholder="{{ trans('lang.password') }}">--}}
{{--							</div>--}}
{{--							<div class="form-group instructor_display">--}}
{{--								<input type="password" class="form-control "  id="exampleInputPassword5" placeholder="{{ trans('lang.confirm_password') }} ">--}}
{{--							</div>--}}
{{--							<div class="form-group">--}}
{{--								<select class="selectpicker show-tick form-control">--}}
{{--									<option> {{ trans('lang.nationality') }} </option>--}}
{{--									<option>Riyad</option>--}}
{{--									<option>Makkah</option>--}}
{{--									<option>Dammam</option>--}}
{{--									<option>Al-Qassim</option>--}}
{{--								</select>--}}
{{--							</div>--}}
{{--							<button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >{{ trans('lang.next') }}</button>--}}
{{--						</div>--}}

{{--						<div class=" setup-content" id="step-2">--}}
{{--							<div class="form-group">--}}
{{--								<input type="number" class="form-control" required="required" id="exampleInputName2" placeholder="{{ trans('lang.national_id') }} ">--}}
{{--							</div>--}}
{{--							<div class="form-group">--}}
{{--								<input type="number" class="form-control" required="required" id="exampleInputEmail3" placeholder="{{ trans('lang.residence_id') }}  ">--}}
{{--							</div>--}}
{{--							<div class="form-group">--}}
{{--								<input type="text" class="form-control" required="required" id="exampleInputEmail3" placeholder="{{ trans('lang.category_register') }}  ">--}}
{{--							</div>--}}
{{--							<div class="form-group instructor_display">--}}
{{--								<input type="number" class="form-control " required="required" id="exampleInputPassword4" placeholder="{{ trans('lang.years_experince') }}">--}}
{{--							</div>--}}
{{--							<div class="form-group instructor_display">--}}
{{--								<input type="text" class="form-control "  id="exampleInputPassword5" placeholder="{{ trans('lang.university_name') }} ">--}}
{{--							</div>--}}
{{--							<div class="form-group instructor_display">--}}
{{--								<select class="selectpicker show-tick form-control">--}}
{{--									<option> {{ trans('lang.teacher_qualification') }} </option>--}}
{{--									<option>{{ trans('lang.diploma') }}</option>--}}
{{--									<option>{{ trans('lang.bachelor') }}</option>--}}
{{--									<option>{{ trans('lang.master') }}</option>--}}
{{--									<option>{{ trans('lang.phd') }}</option>--}}
{{--								</select>--}}
{{--							</div>--}}
{{--							<div class="form-group instructor_display">--}}
{{--								<select class="selectpicker show-tick form-control">--}}
{{--									<option> {{ trans('lang.teaching_methods') }} </option>--}}
{{--									<option>{{ trans('lang.student_house') }} </option>--}}
{{--									<option>{{ trans('lang.teacher_house') }} </option>--}}
{{--									<option>{{ trans('lang.online_education') }}</option>--}}
{{--								</select>--}}
{{--							</div>--}}
{{--							<button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >{{ trans('lang.next') }}</button>--}}
{{--							<button class="btn btn-default prevBtn btn-lg pull-left" type="button" >{{ trans('lang.prev') }}</button>--}}
{{--						</div>--}}
{{--						<div class=" setup-content" id="step-3">--}}
{{--							<h3>  رفع الصوره الشخصيه و الاوراق </h3>--}}
{{--							<button class="btn btn-default prevBtn btn-lg pull-left" type="button" >Prev</button>--}}
{{--							<button class="btn btn-primary  btn-lg pull-right" type="button" >Submit</button>--}}
{{--						</div>--}}
{{--					</form>--}}
{{--				</div>--}}
{{--			</div>--}}
{{--		</div>--}}
{{--	</div>--}}

@endsection

@section('script')



@endsection
