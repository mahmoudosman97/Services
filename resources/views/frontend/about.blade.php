@extends('frontend.inc.master')
@section('title', 'Contact Home')
@section('content')

<!--about-section-->
{{-- <section class="ttm-row about-section clearfix">
    <div class="container">
        <div class="row">
            @foreach($abouts as $about)
            <div class="col-lg-6 col-md-12">
                <div class="ttm_single_image-wrapper text-left">
                    <img class="img-fluid" src="{{ url('abouts/' .$about->image) }}"  alt="single-09">
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-xs-12">
                <div class="padding_top20 res-991-padding_top40">
                    <!-- section title -->
                    <div class="section-title">
                        <div class="title-header">
                            <h3>{{ $about->title_ar }}</h3>
                        </div>
                        <div class="title-desc">
                            <p> {!!$about->body_en!!}</p>
                        </div>
                    </div>
                    <!-- section title end -->
                 
                </div>
                
            </div>
            @endforeach
        </div><!-- row end -->
    </div>
</section> --}}
<!--about-section end-->




        <!--about-section-->
        <section class="ttm-row about-section clearfix">
            <div class="container">
                <div class="row">
                    @foreach($abouts as $about)
                    <div class="col-lg-6 col-md-12">
                        <div class="ttm_single_image-wrapper text-left">
                            <img class="img-fluid" src="{{ url('abouts/' .$about->image) }}" alt="single-09">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-xs-12">
                        <div class="padding_top20 res-991-padding_top40">
                            <!-- section title -->
                            <div class="section-title">
                                <div class="title-header">
                                    <h3>WHO WE ARE</h3>
                                    <h2 class="title">{{ $about->title_en }} </h2>
                                </div>
                                <div class="title-desc">
                                    <p> {!!$about->body_en!!}</p>
                                </div>
                                <div class="title-desc">
                                    <p> {!!$about->pagetitle_en!!}</p>
                                </div>
                            </div><!-- section title end -->
                            {{-- <div class="ttm-highlight-quote margin_top35 clearfix">
                                <blockquote class=" ttm-bgcolor-grey"><p>No Matter What Problem You face You Have Found An Investigation Agency That Can Help You.</p></blockquote>
                                <div class="d-flex align-items-center">   
                                    <div class="d-inline-block">                                             
                                        <img class="img-fluid auto_size" width="90" height="89" src="images/author-quote.png" alt="author-quote">
                                    </div>
                                    <div class="d-inline-block padding_left30">                                             
                                        <h2 class="fs-20 mb-0">Jhon Martin</h2>
                                        <label>Chairnan and founder</label>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    @endforeach
                </div><!-- row end -->                
            </div>
        </section>
        <!--about-section end-->
@endsection