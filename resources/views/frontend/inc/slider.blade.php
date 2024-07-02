{{-- <div class="banner_slider_wrapper">
    <div class="banner_slider banner_slider_2">
        @foreach($homesliders as $slider)
        <div class="slide">
            <div class="slide_img" style="background-image: url('{{ asset('sliders/' . $slider->image) }}');"></div>
            <div class="slide__content">
                <div class="container">
                    <div class="ori-slider-content-1 position-relative">
                        <div class="ori-slider-text text-center text-uppercase">
                            <h1>{!! $slider->text_en !!}</h1>
                            <p>{!! $slider->pagetitle_en !!}</p>
                            
                            {{-- إلخ --}}
                            
                            {{-- إذا كان هناك حاجة لعرض فيديو أو صورة آخرى --}}
                           {{-- <div class="slider-play-btn">
                                <a class="video_box d-flex align-items-center justify-content-center text-uppercase" href="{{ $slider->video_url }}">PLAY</a>
                            </div> 
                        <div class="ori-slider-img position-absolute">
                                <img src="{{ asset('sliders/' . $slider->image) }}" alt="">
                            </div>   
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>  --}}



  <!-- Banner -->
        <div class="banner_slider_wrapper">
            <div class="banner_slider banner_slider_2">
                <div class="slide">
                    <div class="slide_img" style="background-image: url(frontend/assets/images/slides/slider-mainbg-003.jpg);"></div>
                    <div class="slide__content">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="slide__content--headings ttm-textcolor-white text-center margin_bottom100 res-991-margin_bottom0">
                                        <span  data-animation="fadeInDown">Where Elegance Meeting Class</span>
                                        <h2  data-animation="fadeInDown" class="border_text">Textile</h2>
                                        <p  data-animation="fadeInDown">When select the best of your choice sucks, let our fabrics be an be an exception! </p>
                                        <div class="d-inline-block margin_top40 res-767-margin_top30" data-animation="fadeInUp" data-delay="1.4">
                                            <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor" href="contact-us.html">DISCUSS A PROJECT</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide_img" style="background-image: url(images/slides/slider-mainbg-004.jpg);"></div>
                    <div class="slide__content">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="slide__content--headings ttm-textcolor-white text-center margin_bottom100 res-991-margin_bottom0">
                                        <span  data-animation="fadeInDown" class="border_text">Since 1970</span>
                                        <h2  data-animation="fadeInDown">The Easy Fabric Pickings</h2>
                                        <p  data-animation="fadeInDown">Let's step into enhance your lifestyle like a royalty</p>
                                        <div class="d-inline-block margin_top40 res-767-margin_top30" data-animation="fadeInUp" data-delay="1.4">
                                            <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor" href="contact-us.html">DISCUSS A PROJECT</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner end-->