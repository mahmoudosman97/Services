@extends('frontend.inc.master')
@section('title', '  page gallary')
@section('content')
   <!-- page-title -->
    <div class="ttm-page-title-row ttm-bg ttm-bgimage-yes ttm-bgcolor-darkgrey clearfix">
        <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="ttm-page-title-row-inner">
                        <div class="page-title-heading">
                            <h2 class="title">Gallaries</h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="index.html">Home</a>
                            </span>
                            <span>Gallary</span>
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
                                <h3>OUR Gallary</h3>
                                <h2 class="title">Your Business <b>Grow & Sucessful </b></h2>
                            </div>
                        </div><!-- section title end -->
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    @foreach ($gallaries as $gallary)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <!--featured-imagebox-->
                        <div class="featured-imagebox featured-imagebox-services style1">
                            <!-- featured-thumbnail -->
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{ url('/gallary/' .$gallary->image) }}  "
                                    alt="image">
                            </div><!-- featured-thumbnail end-->
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3>{{$gallary->title_en}}</h3>
                                    <p>{!!$gallary->pagetitle_en!!}</p>
                                    
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