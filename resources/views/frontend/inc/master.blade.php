<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themetechmount.com/html/fablio/home-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 May 2024 13:37:49 GMT -->
@include('frontend.inc.head')


<body>

    <!--page start-->
    <div class="page">
        
       
        <div id="preloader" class="blobs-wrapper">
            <div class="ttm-bgcolor-skincolor loader-blob"></div>
        </div>

        
        <!--header start-->
        @include('frontend.inc.header')
        <!--header end-->


        <!-- Banner -->
        @include('frontend.inc.slider')
        <!-- Banner end-->

    
        <!--site-main start-->
        <div class="site-main">
   
            @yield('content')
        </div>
        <!--site-main end-->


        <!--footer start-->
        @include('frontend.inc.footer')
        <!--footer end-->

    <!--back-to-top start-->
    <a id="totop" href="#top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!--back-to-top end-->

</div><!-- page end -->


    <!-- Javascript -->
    @include('frontend.inc.script')
    <!-- Javascript end-->

</body>

<!-- Mirrored from themetechmount.com/html/fablio/home-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 May 2024 13:37:57 GMT -->
</html>