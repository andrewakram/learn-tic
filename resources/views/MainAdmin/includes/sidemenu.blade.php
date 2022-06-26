<!--begin::Aside-->
<div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside"
     data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
     data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
     data-kt-drawer-toggle="#kt_aside_mobile_toggle">

    <!--begin::Brand-->
    <div class="aside-logo flex-column-auto h-160px" id="kt_aside_logo" style="background-color: white">
        <!--begin::Logo-->
        <a href="{{asset('/')}}">
            <img alt="Logo" src="{{asset('/')}}/default2.png" class="h-80px logo p-5"
                 width="200px" height="350px"/>
        </a>
        <!--end::Logo-->
        <!--begin::Aside toggler-->
        <div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle"
             data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
             data-kt-toggle-name="aside-minimize">
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
            <span class="svg-icon svg-icon-1 rotate-180">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none">
									<path opacity="0.5"
                                          d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z"
                                          fill="black"/>
									<path
                                        d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z"
                                        fill="black"/>
								</svg>
							</span>
            <!--end::Svg Icon-->
        </div>
        <!--end::Aside toggler-->
    </div>
    <!--end::Brand-->
    <!--begin::Aside menu-->
    <div class="aside-menu flex-column-fluid">
        <!--begin::Aside Menu-->
        <div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true"
             data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
             data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu"
             data-kt-scroll-offset="0">
            <!--begin::Menu-->
            <div
                class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
                id="#kt_aside_menu" data-kt-menu="true">
                <div class="menu-item">
                    <a class="menu-link @if(request()->segment(2) == 'home') active @endif" href="{{route('admin.home')}}">
                        <span class="menu-icon">
                            <i class="fa fa-home"></i>
                        </span>
                        <span class="menu-title">الرئيسية</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link @if(request()->segment(2) == 'students' ) active @endif"
                       href="{{route('admin.students')}}"
                    >
                        <span class="menu-icon">
                            <i class="fa fa-users"></i>
                        </span>
                        <span class="menu-title">الطلاب</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link @if(request()->segment(2) == 'instructors' ) active @endif"
                       href="{{route('admin.instructors')}}"
                    >
                        <span class="menu-icon">
                            <i class="fa fa-user"></i>
                        </span>
                        <span class="menu-title">المدرسين</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link @if(request()->segment(2) == 'supervisors' ) active @endif"
                       href="{{route('admin.supervisors')}}"
                    >
                        <span class="menu-icon">
                            <i class="fa fa-user-check"></i>
                        </span>
                        <span class="menu-title">المشرفين</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link @if(request()->segment(2) == 'cities' ) active @endif"
                       href="{{route('admin.cities')}}"
                    >
                        <span class="menu-icon">
                            <i class="fa fa-map-pin"></i>
                        </span>
                        <span class="menu-title">المدن</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link @if(request()->segment(2) == 'categories' ) active @endif"
                       href="{{route('admin.categories')}}"
                    >
                        <span class="menu-icon">
                            <i class="fa fa-server"></i>
                        </span>
                        <span class="menu-title">التخصصات</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link @if(request()->segment(2) == 'blogs' ) active @endif"
                       href="{{route('admin.blogs')}}"
                    >
                        <span class="menu-icon">
                            <i class="fa fa-file"></i>
                        </span>
                        <span class="menu-title">المقالات</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link @if(request()->segment(2) == 'courses' ) active @endif"
                       href="{{route('admin.courses')}}"
                    >
                        <span class="menu-icon">
                            <i class="fa fa-circle"></i>
                        </span>
                        <span class="menu-title">الكورسات</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link @if(request()->segment(2) == 'tags' ) active @endif"
                       href="{{route('admin.tags')}}"
                    >
                        <span class="menu-icon">
                            <i class="fa fa-tags"></i>
                        </span>
                        <span class="menu-title">Tags</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link @if(request()->segment(2) == 'pages' ) active @endif"
                       href="{{route('admin.pages')}}"
                    >
                        <span class="menu-icon">
                            <i class="fa fa-eye"></i>
                        </span>
                        <span class="menu-title">النصوص الثابتة</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link @if(request()->segment(2) == 'settings' ) active @endif"
                       href="{{route('admin.settings')}}"
                    >
                        <span class="menu-icon">
                            <i class="fa fa-arrow-circle-up"></i>
                        </span>
                        <span class="menu-title">الإعدادات</span>
                    </a>
                </div>

            </div>
            <!--end::Menu-->
        </div>
        <!--end::Aside Menu-->
    </div>
    <!--end::Aside menu-->
    <!--begin::Footer-->

    <!--end::Footer-->
</div>
<!--end::Aside-->
