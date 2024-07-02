{{-- @extends('frontend.inc.master')
@section('title', 'Blog Home')
@section('content')

   <!--grid-section-->
   <section class="ttm-row grid-section clearfix">
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <!-- section title -->
                <div class="section-title title-style-center_text">
                    <div class="title-header">
                        <h2 class="title"><b>Blog View</b> 01</h2>
                    </div>
                </div><!-- section title end -->
            </div>
        </div>
      

        <div class="row slick_slider mb_15" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows":false, "dots":false, "autoplay":true, "infinite":true, "responsive": [{"breakpoint":1024,"settings":{"slidesToShow": 3}} , {"breakpoint":900,"settings":{"slidesToShow": 2}}, {"breakpoint":575,"settings":{"slidesToShow": 1}}]}'>
            @foreach ($blogs as $blog)
            <div class="col-lg-4">
                <!-- featured-imagebox-post -->
                <div class="featured-imagebox featured-imagebox-post style1">
                    <div class="featured-thumbnail">
                        <img src="{{url('/blogs/' . $blog->image)}}"  width="70%" height="70%" alt="">
                    </div>
                    <div class="featured-content">
                        <!-- ttm-box-post-date -->
                        <div class="ttm-box-post-date">
                            <span class="ttm-entry-date">
                                <time class="entry-date" datetime="2021-03-18T04:16:25+00:00">18<span class="entry-month entry-year">Mar</span></time>
                            </span>
                        </div><!-- ttm-box-post-date end -->
                        <div class="post-meta">
                            <span class="ttm-meta-line byline">{ {{$blog->name_en}}}</span>
                          
                        </div>
                        <div class="featured-title">
                            <h3><a href="blog-single.html">Can textiles lead the way during the pandemic?</a></h3>
                        </div>
                        <div class="featured-desc">
                            <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our po...</p>
                        </div>
                        <a class="ttm-btn ttm-btn-size-md ttm-btn-color-dark btn-inline" href="blog-single.html" tabindex="-1">read more</a>
                    </div>
                </div><!-- featured-imagebox-post end -->
            </div> 
            @endforeach
        </div>

    </div>
</section>
<!--blog-section end-->

@endsection --}}

@extends('frontend.inc.master')
@section('title', '  page Blogs')
@section('content')
   <!-- page-title -->
    <div class="ttm-page-title-row ttm-bg ttm-bgimage-yes ttm-bgcolor-darkgrey clearfix">
        <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="ttm-page-title-row-inner">
                        <div class="page-title-heading">
                            <h2 class="title">Blogs</h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="index.html">Home</a>
                            </span>
                            <span>Blogs</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page-title end -->

    <!--site-main start-->
    <div class="site-main">

        <!--grid-section-->
        <section class="ttm-row grid-section clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- section title -->
                        <div class="section-title title-style-center_text">
                            <div class="title-header">
                                <h3>OUR BLOG</h3>
                                <h2 class="title">Your Business <b>Grow & Sucessful </b></h2>
                            </div>
                        </div><!-- section title end -->
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    @foreach ($blogs as $blog)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <!--featured-imagebox-->
                        <div class="featured-imagebox featured-imagebox-services style1">
                            <!-- featured-thumbnail -->
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{ url('/blogs/' .$blog->image) }}  "
                                    alt="image">
                            </div><!-- featured-thumbnail end-->
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3>{{$blog->name_en}}</h3>
                                    <p>{!!$blog->body_en!!}</p>
                                    
                                </div>
                                {{-- <div class="featured-desc">
                                    <p>{{$cat->text}}</p>
                                </div> --}}
                            </div>
                        </div><!-- featured-imagebox end-->
                    </div>
                   @endforeach
                </div>
                <!-- row end -->
            </div>
        </section>
        <!--grid-section end-->



    </div>
    <!--site-main end-->
@endsection