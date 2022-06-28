<section class="footer_one">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-3 col-lg-3">
                <div class="footer_contact_widget">
                    <h4>{{ __('lang.goals') }}</h4>
                    
                     <p>
                     @if(session()->get('lang') == 'ar')
								{!! $home_about ->body_ar  !!}
							@else
								{!! $home_about ->body_en !!} 
						 @endif
                    </p>
                    
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-md-3 col-lg-2">
                <div class="footer_company_widget">
                    <h4>{{ __('lang.contact_us') }}</h4>
                    <p>
                        @if(session()->get('lang') == 'ar')
                             {{$footer_address_arabic}}
                         @else
                             {{$footer_address_english}}
                         @endif
                     </p>
                     <p>{{$footer_phone}}</p>
                    <p>{{$footer_email}}</p>

                  
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-md-3 col-lg-2">
                <div class="footer_program_widget">
                    <h4>{{ __('lang.pages') }}</h4>
                    <ul class="list-unstyled">
                        <li><a href="#"> {{ __('lang.home') }}</a></li>
                        <li><a href="#">{{ __('lang.courses') }} </a></li>
                        <li><a href="#">{{ __('lang.instructors') }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-md-3 col-lg-2">
                <div class="footer_program_widget">
                    <h4>{{ __('lang.more') }}</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">{{ __('lang.about_us') }}</a></li>
                        <li><a href="#">{{ __('lang.contact_us') }}</a></li>
                        <li><a href="#"> {{ __('lang.blogs') }}</a></li>
                        
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-md-3 col-lg-3">
                <div class="footer_apps_widget">
                    <h4>{{ __('lang.app') }}</h4>
                    <div class="app_grid">
                        <button class="apple_btn btn-dark">
								<span class="icon">
									<span class="flaticon-apple"></span>
								</span>
                            <span class="title">App Store</span>
                            <span class="subtitle">Available now on the</span>
                        </button>
                        <button class="play_store_btn btn-dark">
								<span class="icon">
									<span class="flaticon-google-play"></span>
								</span>
                            <span class="title">Google Play</span>
                            <span class="subtitle">Get in on</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Footer Middle Area -->
<section class="footer_middle_area p0">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-md-3 col-lg-3 col-xl-2 pb15 pt15">
                <div class="logo-widget home1">
                    <img class="img-fluid" src="{{asset('project')}}/images/header-logo.png"  alt="header-logo.png">

                </div>
            </div>
            <div class="col-sm-8 col-md-5 col-lg-6 col-xl-6 pb25 pt25 brdr_left_right">
                <div class="footer_menu_widget">
                    <ul>
                        <li class="list-inline-item"><a href="#"><img src="{{asset('project')}}/images/payment/visa.png" alt="visa.png"></a></li>
                        <li class="list-inline-item"><a href="#"><img src="{{asset('project')}}/images/payment/Mada.png" alt="visa.png"></a></li>
                        <li class="list-inline-item"><a href="#"><img src="{{asset('project')}}/images/payment/maestro.png" alt="maestro.png"></a></li>
                        <li class="list-inline-item"><a href="#"><img src="{{asset('project')}}/images/payment/paypal.png" alt="paypal.png"></a></li>
                        
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-3 col-xl-4 pb15 pt15">
                <div class="footer_social_widget mt15">
                    <ul>
                        <li class="list-inline-item"><a href="{{$footer_facebook}}"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="{{$footer_twitter}}"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="{{$footer_instagram}}"><i class="fa fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="{{$footer_youtube}}"><i class="fa fa-youtube"></i></a></li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Footer Bottom Area -->
<section class="footer_bottom_area pt25 pb25">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="copyright-widget text-center">
                    <p>{{ __('lang.copy_right') }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<a class="scrollToHome" href="#"><i class="flaticon-up-arrow-1"></i></a>
