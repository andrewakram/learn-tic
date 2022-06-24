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
						<h4 class="breadcrumb_title"> {{ __('lang.contact_us') }} </h4>
						<ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="#">{{ __('lang.home') }}</a></li>
						    <li class="breadcrumb-item active" aria-current="page"> {{ __('lang.contact_us') }}</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- How It's Work -->
	<section class="our-contact">
		<div class="container">
			<div class="row">
			
				<div class="col-sm-6 col-lg-4">
					<div class="contact_localtion text-center">
						<div class="icon"><span class="flaticon-placeholder-1"></span></div>
						<h4>
							 {{ __('lang.location') }} 
						</h4>
						<p>
							@if(session()->get('lang') == 'ar')
								{{$data['title_arabic']}}
							@else
							 	{{$data['title_english']}} 
							 @endif
						</p>	 
					</div>
				</div>
			
				<div class="col-sm-6 col-lg-4">
					<div class="contact_localtion text-center">
						<div class="icon"><span class="flaticon-phone-call"></span></div>
						<h4>
							{{ __('lang.phone') }} 
						</h4>
						<p class="mb0">
						{{$data['phone']}} 
						</p>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4">
					<div class="contact_localtion text-center">
						<div class="icon"><span class="flaticon-email"></span></div>
						<h4>{{ __('lang.email') }} </h4>
						<p>
						{{$data['email']}} 
						</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="h600" id="map-canvas"></div>
				</div>
				<div class="col-lg-6 form_grid">
					<h4 class="mb5">{{ __('lang.contact_title') }} </h4>
					<p>{{ __('lang.contact_p') }} </p>
		            <form class="contact_form" id="contact_form" name="contact_form" action="#" method="post" novalidate="novalidate">
						<div class="row">
			                <div class="col-sm-12">
			                    <div class="form-group">
			                    	<label for="exampleInputName">{{ __('lang.name_form') }}</label>
									<input id="form_name" name="form_name" class="form-control" required="required" type="text">
								</div>
			                </div>
			                <div class="col-sm-12">
			                    <div class="form-group">
			                    	<label for="exampleInputEmail">{{ __('lang.email') }}</label>
			                    	<input id="form_email" name="form_email" class="form-control required email" required="required" type="email">
			                    </div>
			                </div>
			                <div class="col-sm-12">
			                    <div class="form-group">
			                    	<label for="exampleInputSubject">{{ __('lang.subject_form') }}</label>
				                    <input id="form_subject" name="form_subject" class="form-control required" required="required" type="text">
								</div>
			                </div>
			                <div class="col-sm-12">
	                            <div class="form-group">
	                            	<label for="exampleInputEmail1"> {{ __('lang.message_form') }}</label>
	                                <textarea id="form_message" name="form_message" class="form-control required" rows="5" required="required"></textarea>
	                            </div>
			                    <div class="form-group ui_kit_button mb0">
				                    <button type="button" class="btn dbxshad btn-lg btn-thm circle white">{{ __('lang.button_form') }}</button>
			                    </div>
			                </div>
		                </div>
		            </form>
				</div>
			</div>
		</div>
	</section>
@endsection

@section('script')

@endsection
