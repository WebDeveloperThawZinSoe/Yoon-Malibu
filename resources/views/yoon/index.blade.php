@extends('layouts.home')
@section('title',"Yoon Kitchen")
@section("content")
<style>
    .mbr-iconfont{
        color:#a42826 !important
    }
</style>
    @include('yoon.nav')
    
    <section data-bs-version="5.1" class="slider1 cid-tHHMYJhgtP" id="slider1-w">
    
    <div class="carousel slide carousel-fade" id="tHNwybKeRK" data-ride="carousel" data-bs-ride="carousel" data-interval="5000" data-bs-interval="5000">
        <ol class="carousel-indicators">
            <li data-slide-to="0" data-bs-slide-to="0" class="active" data-target="#tHNwybKeRK" data-bs-target="#tHNwybKeRK"></li>
            <li data-slide-to="1" data-bs-slide-to="1" data-target="#tHNwybKeRK" data-bs-target="#tHNwybKeRK"></li>
            <li data-slide-to="2" data-bs-slide-to="2" data-target="#tHNwybKeRK" data-bs-target="#tHNwybKeRK"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item slider-image item active">
                <div class="item-wrapper">
                    <img class="d-block w-100" src="{{ asset('/front/assets/images/cover-4-1800x790.jpg')}}" alt="Mobirise Website Builder">
                    
                    
                </div>
            </div>
            <div class="carousel-item slider-image item">
                <div class="item-wrapper">
                    <img class="d-block w-100" src="{{ asset('/front/assets/images/cover-b-2-edit-1800x790.jpg')}}" alt="Mobirise Website Builder">
                    
                    
                </div>
            </div>
            <div class="carousel-item slider-image item">
                <div class="item-wrapper">
                    <img class="d-block w-100" src="{{ asset('/front/assets/images/cover-5-1800x790.jpg')}}" alt="Mobirise Website Builder">
                    
                    
                </div>
            </div>
        </div>
        <a class="carousel-control carousel-control-prev" role="button" data-slide="prev" data-bs-slide="prev" href="#tHNwybKeRK">
            <span class="mobi-mbri mobi-mbri-arrow-prev" aria-hidden="true"></span>
            <span class="sr-only visually-hidden">Previous</span>
        </a>
        <a class="carousel-control carousel-control-next" role="button" data-slide="next" data-bs-slide="next" href="#tHNwybKeRK">
            <span class="mobi-mbri mobi-mbri-arrow-next" aria-hidden="true"></span>
            <span class="sr-only visually-hidden">Next</span>
        </a>
    </div>
</section>

<section data-bs-version="5.1" class="header15 cid-tHHI6RHDKt" id="about">
    

    
    

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md">
                <div class="text-wrapper">
                    <h2 class="mbr-section-title mb-3 mbr-fonts-style display-2">
                        <strong>Yoon Kitchen</strong></h2>
                    <p class="mbr-text mb-3 mbr-fonts-style display-7">
                        <?php 
                           $content = DB::table("content")->where("id",1)->first();
                        ?>
                       {!! $content->about !!}
                    </p>
                    <div class="mbr-section-btn"><a style="background-color:#a42826 !important" class="btn btn-secondary display-4" href="#menu">View Menu</a></div>
                </div>
            </div>
            <div class="mbr-figure col-12 col-md-7"><iframe class="mbr-embedded-video" src="https://player.vimeo.com/video/837822164?autoplay=1&amp;loop=0" width="800" height="600" frameborder="0" allowfullscreen></iframe></div>
        </div>
    </div>
</section>

<section id="menu"></section>

<section data-bs-version="5.1" class="slider6 mbr-embla cid-tHNlDzkafD" id="slider6-y">
    
    
    <div class="position-relative">
        <div class="mbr-section-head">
            <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>Events</strong></h4>
            
        </div>
        <div class="embla mt-4" data-skip-snaps="true" data-align="center" data-contain-scroll="trimSnaps" data-loop="true" data-auto-play="true" data-auto-play-interval="5" data-draggable="true">
            <div class="embla__viewport container-fluid">
                <div class="embla__container">
                    <div class="embla__slide slider-image item" style="margin-left: 1rem; margin-right: 1rem;">
                        <div class="slide-content">
                            <div class="item-wrapper">
                                <div class="item-img">
                                    <img src="{{ asset('/front/assets/images/product5.jpg')}}" alt="Mobirise Website Builder" title="">
                                </div>
                            </div>
                            <div class="item-content">
                                <h5 class="item-title mbr-fonts-style display-4"><em>Jan 10, 2025</em></h5>
                                <h6 class="item-subtitle mbr-fonts-style mt-1 display-7"><strong>Easy and Simple</strong></h6>
                                <p class="mbr-text mbr-fonts-style mt-3 display-7">Mobirise Page Maker is a free and simple
                                    website builder - just drop site blocks to your page, add content and style it!</p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2"><a href="" class="btn item-btn btn-primary-outline display-7" target="_blank" style="color:#a42826 !important">Read More &gt;</a></div>
                        </div>
                    </div>
                    <div class="embla__slide slider-image item" style="margin-left: 1rem; margin-right: 1rem;">
                        <div class="slide-content">
                            <div class="item-wrapper">
                                <div class="item-img">
                                    <img src="{{ asset('/front/assets/images/product4.jpg')}}" alt="Mobirise Website Builder" title="">
                                </div>
                            </div>
                            <div class="item-content">
                                <h5 class="item-title mbr-fonts-style display-4"><em>Jan 09, 2025</em></h5>
                                <h6 class="item-subtitle mbr-fonts-style mt-1 display-7"><strong>Automagically Mobile</strong>
                                </h6>
                                <p class="mbr-text mbr-fonts-style mt-3 display-7">Mobirise Site Creator offers a huge
                                    collection of 3500+ site blocks, templates and themes with thousands flexible options. <br>
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2"><a href="" class="btn item-btn btn-primary-outline display-7" target="_blank" style="color:#a42826 !important">Read More &gt;</a></div>
                        </div>
                    </div>
                    <div class="embla__slide slider-image item" style="margin-left: 1rem; margin-right: 1rem;">
                        <div class="slide-content">
                            <div class="item-wrapper">
                                <div class="item-img">
                                    <img src="{{ asset('/front/assets/images/product3.jpg')}}" alt="Mobirise Website Builder" title="">
                                </div>
                            </div>
                            <div class="item-content">
                                <h5 class="item-title mbr-fonts-style display-4"><em>Jan 08, 2025</em></h5>
                                <h6 class="item-subtitle mbr-fonts-style mt-1 display-7"><strong>Boost Your Ranking</strong></h6>
                                <p class="mbr-text mbr-fonts-style mt-3 display-7">Mobirise Page Maker is a free and simple
                                    website builder - just drop site blocks to your page, add content and style it!</p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2"><a href="" class="btn item-btn btn-primary-outline display-7" target="_blank" style="color:#a42826 !important">Read More &gt;</a></div>
                        </div>
                    </div>
                    <div class="embla__slide slider-image item" style="margin-left: 1rem; margin-right: 1rem;">
                        <div class="slide-content">
                            <div class="item-wrapper">
                                <div class="item-img">
                                    <img src="{{ asset('/front/assets/images/product4.jpg')}}" alt="Mobirise Website Builder" title="">
                                </div>
                            </div>
                            <div class="item-content">
                                <h5 class="item-title mbr-fonts-style display-4"><em>Jan 08, 2025</em></h5>
                                <h6 class="item-subtitle mbr-fonts-style mt-1 display-7"><strong>Boost Your Ranking</strong></h6>
                                <p class="mbr-text mbr-fonts-style mt-3 display-7">Mobirise Page Maker is a free and simple
                                    website builder - just drop site blocks to your page, add content and style it!</p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2"><a href="" class="btn item-btn btn-primary-outline display-7" target="_blank" style="color:#a42826 !important">Read More &gt;</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="embla__button embla__button--prev">
                <span class="mobi-mbri mobi-mbri-arrow-prev mbr-iconfont" aria-hidden="true"></span>
                <span class="sr-only visually-hidden visually-hidden">Previous</span>
            </button>
            <button class="embla__button embla__button--next">
                <span class="mobi-mbri mobi-mbri-arrow-next mbr-iconfont" aria-hidden="true"></span>
                <span class="sr-only visually-hidden visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="contacts2 cid-tHNlpLOqkE" id="contacts2-x">
    <!---->
    

    
    
    <div class="container">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                <strong>Contacts</strong>
            </h3>
            
        </div>
        <?php 
           $settings = DB::table("settings")->where("id",1)->first();
        ?>
        <div class="row justify-content-center mt-4">
            <div class="card col-12 col-md-6">
                <div class="card-wrapper">
                    <div class="image-wrapper">
                        <span class="mbr-iconfont mobi-mbri-phone mobi-mbri" style="color:#a42826 !important"></span>
                    </div>
                    <div class="text-wrapper">
                        <h6 class="card-title mbr-fonts-style mb-1 display-5">
                            <strong>Phone</strong>
                        </h6>
                        <p class="mbr-text mbr-fonts-style display-7">
                            <a href="tel:{{$settings->phone}}" class="text-primary">{{$settings->phone}}</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="card col-12 col-md-6">
                <div class="card-wrapper">
                    <div class="image-wrapper">
                        <span class="mbr-iconfont mobi-mbri-letter mobi-mbri"></span>
                    </div>
                    <div class="text-wrapper">
                        <h6 class="card-title mbr-fonts-style mb-1 display-5">
                            <strong>Email</strong>
                        </h6>
                        <p class="mbr-text mbr-fonts-style display-7">
                            <a href="mailto:{{$settings->email}}" class="text-primary">{{$settings->email}}</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="card col-12 col-md-6">
                <div class="card-wrapper">
                    <div class="image-wrapper">
                        <span class="mbr-iconfont mobi-mbri-globe mobi-mbri"></span>
                    </div>
                    <div class="text-wrapper">
                        <h6 class="card-title mbr-fonts-style mb-1 display-5">
                            <strong>Address</strong>
                        </h6>
                        <p class="mbr-text mbr-fonts-style display-7">
                        {{$settings->address}}
                        </p>
                    </div>
                </div>
            </div>
            <div class="card col-12 col-md-6">
                <div class="card-wrapper">
                    <div class="image-wrapper">
                        <span class="mbr-iconfont mobi-mbri-bulleted-list mobi-mbri"></span>
                    </div>
                    <div class="text-wrapper">
                        <h6 class="card-title mbr-fonts-style mb-1 display-5">
                            <strong>Working Hours</strong>
                        </h6>
                        <p class="mbr-text mbr-fonts-style display-7">
                        {{$settings->time}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    @include('yoon.footer')
@endsection