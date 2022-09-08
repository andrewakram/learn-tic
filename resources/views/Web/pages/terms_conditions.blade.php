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
						<h4 class="breadcrumb_title">{{ trans('lang.terms_conditions') }} </h4>
						<ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="#">{{ trans('lang.home') }} </a></li>
						    <li class="breadcrumb-item active" aria-current="page">{{ trans('lang.terms_conditions') }} </li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- About Text Content -->
	<section class="about-section">
		<div class="container">
		@foreach($data['terms'] as $key => $term)
		@if($key == 0 or $key == 2 )
			
			<div class="row">
			{!! $term->body !!}
			<div class="col-lg-6">
				<div class="about_thumb">
					<img class="img-fluid" src="{{asset('project')}}/images/terms/1.png" alt="about us.jpg">
				</div>
			</div>

		@elseif($key == 1)
			<div class="row">
			<div class="col-lg-6">
				<div class="about_thumb">
					<img class="img-fluid" src="{{asset('project')}}/images/terms/1.png" alt="about us.jpg">
				</div>
			</div>
			{!! $term->body !!}
		@endif
				
			</div>
		@endforeach

			<!-- <div class="row">
			<div class="col-lg-6">
					<div class="about_thumb">
						<img class="img-fluid" src="{{asset('project')}}/images/terms/1.png" alt="about us.jpg">
					</div>
				</div>
				<div class="col-lg-6">
					<div class="terms_conditions">
						<h3>
						 شروط استرداد المبلغ  
						</h3>
		
						<ul class="terms_ul">
							<li><i class="fa fa-check"></i>   في حالة تأخر أحد الطرفين خلال مدة أقصاها ١٥ دقيقة، يحق للطرف الثاني إلغاء الموعد واسترداد جزء من المبلغ.</li>
							<li><i class="fa fa-check"></i> في حالة حدوث ظرف طارئ لأحد الطرفين يجب التبليغ قبل الموعد بساعة، والإلغاء بحيث يحق له أحد الخيارين 

								<ol> 
									<li><strong> 1- </strong> إما استرداد كامل المبلغ. </li>
									<li><strong> 2- </strong>  أو حفظ المبلغ في المحفظة الخاصة بالطالب، على أن يتم استخدام المبلغ في مدة أقصاها سنة.</li>
								</ol>
						
							</li>
								
							<li><i class="fa fa-check"></i>  في حال وجود أكثر من ٣ شكاوى على أحد الطرفين سيتم إقصاء الطرف المعني بالشكوى.</li>
							<li><i class="fa fa-check"></i> في حالة الإخلال بالآداب العامة سيسترد كامل المبلغ. </li>
							<li><i class="fa fa-check"></i>  في حالة عدم الرضا عن الخدمة المقدمة الرجاء التواصل على أحد وسائل التواصل الموضحة في الصفحة الرئيسية، وسيتم اختيار الوسيلة الأنسب لحل المشكلة. </li>
						</ul>
						

					</div>
				</div>
				
			</div>

			<div class="row">
				<div class="col-lg-6">
					<div class="terms_conditions">
						<h3>
							الاسعار و المجموعات
						</h3>
		

						<span>الأسعار: (السعر بالحصة الواحدة)</span>
						<ul class="terms_ul">

							<li><i class="fa fa-check"></i> الثانوي: يبدأ من ١٥٠</li>
							<li><i class="fa fa-check"></i>  متوسط ١٠٠</li>
							<li><i class="fa fa-check"></i> ابتدائي :٨٠  </li>
							<li><i class="fa fa-check"></i> القدرات والتحصيلي:٢٠٠</li>
						</ul>

						<span> المجموعات: (السعر بعدد١٠ حصص) </span>
						<ul class="terms_ul">

							<li><i class="fa fa-check"></i>  الثانوي: ١٢٠٠</li>
							<li><i class="fa fa-check"></i>   المتوسط:٩٠٠ </li>
							<li><i class="fa fa-check"></i> ابتدائي:٧٠٠ </li>
							<li><i class="fa fa-check"></i> قدرات وتحصيلي:١٨٠٠ </li>
						</ul>

					</div>
				</div>
				<div class="col-lg-6">
					<div class="about_thumb">
						<img class="img-fluid" src="{{asset('project')}}/images/terms/1.png" alt="about us.jpg">
					</div>
				</div>
			</div> -->
			
		</div>
	</section>

	
@endsection

@section('script')

@endsection
