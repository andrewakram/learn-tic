<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    @include('StudentAdmin.includes.head')
</head>
<body>
<div class="wrapper">
    <div class="preloader"></div>

    @include('StudentAdmin.includes.header')

    <!-- Our Dashbord -->
    <section class="our-dashbord dashbord pb50">
        <div class="container-fluid">
            <div class="row">
                @include('StudentAdmin.includes.sidemenu')
                <!-- Our Dashbord -->
                <div class="col-sm-12 col-lg-8 col-xl-10">
                    @yield('content')

                    @include('StudentAdmin.includes.footer')
                </div>


            </div>
        </div>
    </section>
    <a class="scrollToHome" href="#"><i class="flaticon-up-arrow-1"></i></a>
</div>

@include('StudentAdmin.includes.foot')

</body>
</html>
