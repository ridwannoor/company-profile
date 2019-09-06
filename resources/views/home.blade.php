@extends('layouts.app3')

@section('main')
<div class="slider-container rev_slider_wrapper" style="height: 600px;">
    <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider
        data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 600, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500], 'parallax': { 'type': 'scroll', 'origo': 'enterpoint', 'speed': 1000, 'levels': [2,3,4,5,6,7,8,9,12,50], 'disable_onmobile': 'on' }, 'navigation' : {'arrows': { 'enable': false }, 'bullets': {'enable': true, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 70, 'h_offset': 0}}}">
        <ul>
            @foreach ($sliders as $item)
            <li class="slide-overlay slide-overlay-primary" data-transition="fade">
                    <img src="{{ asset('/storage/admin/slider/'.$item->image)}}" alt="" data-bgposition="center center"
                        data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">
    
                    <div class="tp-caption" data-x="center" data-hoffset="['-150','-150','-150','-240']" data-y="center"
                        data-voffset="['-50','-50','-50','-75']" data-start="1000"
                        data-transform_in="x:[-300%];opacity:0;s:500;" data-transform_idle="opacity:0.2;s:500;">
                        <img src="{{ asset('/front/img/slides/slide-title-border.png') }}" alt=""></div>
    
                    <div class="tp-caption text-color-light font-weight-normal" data-x="center" data-y="center"
                        data-voffset="['-50','-50','-50','-75']" data-start="700" data-fontsize="['22','22','22','40']"
                        data-lineheight="['25','25','25','45']" data-transform_in="y:[-50%];opacity:0;s:500;">{{ $item->title }}</div>
    
                    <div class="tp-caption d-none d-md-block"
                        data-frames='[{"delay":2200,"speed":500,"frame":"0","from":"opacity:0;x:10%;","to":"opacity:1;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                        data-x="center" data-hoffset="['80','80','80','135']" data-y="center"
                        data-voffset="['-33','-33','-33','-55']"><img
                            src="{{ asset('/front/img/slides/slide-white-line.png') }}" alt=""></div>
    
                    <div class="tp-caption" data-x="center" data-hoffset="['150','150','150','240']" data-y="center"
                        data-voffset="['-50','-50','-50','-75']" data-start="1000"
                        data-transform_in="x:[300%];opacity:0;s:500;" data-transform_idle="opacity:0.2;s:500;">
                        <img src="{{ asset('/front/img/slides/slide-title-border.png') }}" alt=""></div>
    
                    <h1 class="tp-caption font-weight-extra-bold text-color-light negative-ls-2"
                        data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                        data-x="center" data-y="center" data-fontsize="['50','50','50','90']"
                        data-lineheight="['55','55','55','95']">{{ $item->title }}</h1>
    
                    <div class="tp-caption text-light font-weight-light"
                        data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                        data-x="center" data-y="center" data-voffset="['40','40','40','80']"
                        data-fontsize="['18','18','18','50']" data-lineheight="['20','20','20','55']">{{ $item->deskripsi }}</div>
    
                </li>
            @endforeach            
            
        </ul>
    </div>
</div>

<div class="home-intro" id="home-intro">
    <div class="container">

        <div class="row align-items-center">
            <div class="col-lg-8">
                <p>
                    Untuk Mendapatkan Penanganan Lebih Cepat dengan 
                    {{-- <a href="https://wa.me/6287788518142" target="_blank"> Whatsapp</a> --}}
                     {{-- <span>Check out our options and features included.</span> --}}
                </p>
            </div>
            <div class="col-lg-4">
                <div class="get-started text-left text-lg-right">
                        <span class="highlighted-word text-color-primary font-weight-semibold text-5"><a href="https://wa.me/6287788518142" target="_blank" class="btn btn-success btn-lg text-3 font-weight-semibold px-4 py-3">Whatsapp</a></span> 
                     {{-- <div class="learn-more">or <a href="index.html">learn more.</a></div>  --}}
                </div>
            </div> 
        </div>

    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="my-4 lightbox appear-animation" data-appear-animation="fadeInUpShorter"
                data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">
                <div class="owl-carousel owl-theme pb-3"
                    data-plugin-options="{'items': 4, 'margin': 35, 'loop': false}">
                    @foreach ($features as $item)
                    <div class="portfolio-item">
                            <span
                                class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                                <span class="thumb-info-wrapper border-radius-0">
                                    <img src="{{ asset('/storage/admin/feature/'.$item->image)}}"
                                        class="img-fluid border-radius-0" alt="">
                                    <span class="thumb-info-title">
                                        <span
                                            class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">{{ $item->title }}</span>
                                        {{-- <span class="thumb-info-type">Brand</span> --}}
                                    </span>
                                    <span class="thumb-info-action">
                                        <a href="#">
                                            <span class="thumb-info-action-icon thumb-info-action-icon-primary"><i
                                                    class="fas fa-link"></i></span>
                                        </a>
                                        <a href="{{ asset('/storage/admin/feature/'.$item->image)}}" class="lightbox-portfolio">
                                            <span class="thumb-info-action-icon thumb-info-action-icon-light"><i
                                                    class="fas fa-search text-dark"></i></span>
                                        </a>
                                    </span>
                                </span>
                            </span>
                        </div>
                    @endforeach                    

                </div>
            </div>

            <hr class="solid my-5">

        </div>
    </div>

    <div class="row pt-3">
        @foreach ($services as $item)
        <div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter"
            data-appear-animation-delay="300">
            <div class="feature-box feature-box-style-2">
                <div class="feature-box-icon">
                    <i class="icons icon-support text-color-primary"></i>
                </div>
                <div class="feature-box-info">
                    <h4 class="font-weight-bold mb-2">{{ $item->title }}</h4>
                    <p>{{ $item->deskripsi }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>




<section class="section section-height-3 section-background section-text-light section-center overlay overlay-show overlay-op-9 overlay-color-primary m-0 appear-animation" data-appear-animation="fadeIn" style="background-image: url(img/bg-corporate-1-1.jpg); background-size: cover; background-position: center;">
    <div class="container">
        <div class="row justify-content-center">
           
            <div class="col-lg-10 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                {{-- @for ($i = 0; $i < 10; $i++) --}}
                {{-- The current value is {{ $i }} --}}
                {{-- @endfor  --}}
                {{-- @foreach ($testimonial as $key => $item) --}}
                <div class="owl-carousel owl-theme nav-bottom rounded-nav dots-light mb-0" data-plugin-options="{'items': 1, 'loop': false, 'autoHeight': true}">
                  {{-- @endforeach     <div class="owl-carousel owl-theme nav-bottom rounded-nav dots-light mb-0" data-plugin-options="{'items': {{ $i }}, }{{ $loop->true }}, 'autoHeight': true}"> --}}
                    @foreach($testimonial as $item) 
                    <div>
                        {{-- {{ -- -- }} --}}
                        <div class="col">
                            
                            <div class="testimonial testimonial-style-2 testimonial-with-quotes mb-0">
                                <div class="testimonial-author">
                                    <img src="{{ asset('/storage/admin/testi/'.$item->image)}}" class="img-fluid rounded-circle" alt="">
                                </div>
                                <blockquote>
                                    {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque
                                            imperdiet. Nulla lacinia iaculis nulla.</p> --}}
                                    <p>{{ $item->deskripsi }}</p>
                                </blockquote>
                                <div class="testimonial-author">
                                        <p><strong class="text-2 opacity-10">- {{ $item->name }}</strong></p>
                                    {{-- <p><strong class="text-2 opacity-10">- John Mayer</strong></p> --}}
                                </div>
                            </div>
                          
                        </div> 
                         {{-- @endforeach --}}
                    </div>
                    @endforeach
                </div>
                {{-- @endforeach --}}
            </div>
        </div>
    </div>
</section>

<div class="container">
        <div class="row text-center pt-4 mt-5">
            <div class="col">
                <h2 class="word-rotator slide font-weight-bold text-8 mb-2">
                    <span>We're not the only ones </span>
                    <span class="word-rotator-words bg-primary">
                        <b class="is-visible">excited</b>
                        <b>happy</b>
                    </span>
                    {{-- <span> about Porto Template...</span> --}}
                </h2>
                {{-- <h4 class="text-primary lead tall text-4">30,000 CUSTOMERS IN 100 COUNTRIES USE PORTO TEMPLATE. MEET OUR CUSTOMERS.</h4> --}}
            </div>
        </div>

        <div class="row text-center mt-5 pb-5 mb-5">
            <div class="owl-carousel owl-theme carousel-center-active-item mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 5}, '992': {'items': 7}, '1200': {'items': 7}}, 'autoplay': true, 'autoplayTimeout': 3000, 'dots': false}">
                @foreach ($sponsors as $item)
                <div>                    
                    <img class="img-fluid" src="{{ asset('/storage/admin/sponsor/'.$item->image)}}" width="5" height="5" alt="">                       
                    
                </div>
                @endforeach
            </div>
        </div>
</div>


@endsection
