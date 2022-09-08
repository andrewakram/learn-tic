<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    @include('InstructorAdmin.includes.head')
</head>
<body>
<div class="wrapper">
    <div class="preloader"></div>

    @include('InstructorAdmin.includes.header')

    <!-- Our Dashbord -->
    <section class="our-dashbord dashbord pb50">
        <div class="container-fluid">
            <div class="row">
                @include('InstructorAdmin.includes.sidemenu')
                <!-- Our Dashbord -->
                <div class="col-sm-12 col-lg-8 col-xl-10">
                    @yield('content')

                    @include('InstructorAdmin.includes.footer')
                </div>


            </div>
        </div>
    </section>
    <a class="scrollToHome" href="#"><i class="flaticon-up-arrow-1"></i></a>
</div>

@include('InstructorAdmin.includes.foot')

</body>
</html>
