<div class="col-lg-4">
    <!-- featured-imagebox-post -->

    @foreach ($blogs as $blog)

    <div class="featured-imagebox featured-imagebox-post style2">
        <div class="featured-thumbnail">
            <img src="{{url('/blogs/' . $blog->image)}}"  width="70%" height="70%" alt="">
        </div>
        <div class="featured-content">
            {{-- <!-- ttm-box-post-date -->
            <div class="ttm-box-post-date">
                <i class="fa fa-calendar"></i>
                <time class="entry-date published" datetime="2021-03-18T04:16:25+00:00">March 18, 2021</time>
            </div><!-- ttm-box-post-date end --> --}}
            <div class="post-meta">
                <h4 class="ttm-meta-line comments-link text-danger">{{$blog->name_en}}</h4>
                {{-- <span class="ttm-meta-line tag"><i class="ti ti-folder"></i>Textile World</span> --}}
            </div>
            <div class="featured-title">
                <h3>{{$blog->title_en}}</h3>
            </div>
            <div class="featured-desc">
                <p>{!!$blog->body_en!!}</p>
            </div>
            <a class="ttm-btn ttm-btn-size-md ttm-btn-color-dark btn-inline ttm-icon-btn-right" href="blog-single.html">read more<i class="fa fa-long-arrow-right"></i></a>
        </div>
    </div><!-- featured-imagebox-post end -->

    @endforeach
</div>