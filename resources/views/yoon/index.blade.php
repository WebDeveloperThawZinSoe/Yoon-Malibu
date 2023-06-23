@extends('layouts.home')
@section('title',"Yoon Kitchen")
@section("content")
<style>
    .mbr-iconfont{
        color:#a42826 !important
    }
    .cid-tHHI6RHDKt {
        padding-top : 2rem !important;
        padding-bottom : 2rem !important;
    }
    .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
        background-color: #e9e9e9 !important;
        border-color: #e9e9e9 !important;
    }
    .nav-tabs .nav-link.active {
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

<section id="menu"  data-bs-version="5.1" class="header15 cid-tHHI6RHDKt">
      <div class="container aos-init aos-animate" data-aos="fade-up">

        <div class="section-header">
          <h2 class="text-center cid-tHHI6RHDKt mbr-section-title display-2 " > <strong  >Our Menu</strong> </h2>
          <p  class="text-center" style="font-family: 'Open Sans', sans-serif;font-size:18px;color:#a42826 !important;padding-bottom:20px !important" >Check Our <span>Yummy Menu</span></p>
        </div>

        <ul class="nav nav-tabs d-flex justify-content-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="200" role="tablist">

          <li class="nav-item" role="presentation" style="background-color:#e9e9e9 !important;">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters" aria-selected="true" role="tab">
              <h4>All</h4>
            </a>
          </li><!-- End tab nav item -->

         <?php 
                $cats = DB::table("categories")->get();
                foreach($cats as $cat){
                    ?>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-{{$cat->id}}" aria-selected="false" tabindex="-1" role="tab">
                    <h3>{{$cat->name}}</h4>
                    </a>
                </li><!-- End tab nav item -->
                    <?php
                }
            ?>

         

        </ul>

        <div class="tab-content aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="menu-starters" role="tabpanel">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>All</h3>
              <br>
            </div>

            <div class="row gy-5">


            <?php 
              $menus = DB::table("menus")->get();
              foreach($menus as $menu){

              
            ?>
              <div class="col-lg-4 menu-item">
                <a target="_blank" href="{{$menu->image}}" class="glightbox"><img src="{{$menu->image}}" class="menu-img img-fluid" alt=""></a>
                <br> 
                <h3 class="text-center">{{$menu->name}}</h3>
                <p class="ingredients">
                {{$menu->description}}
                </p>
                <p class="price">
                    <!-- <h4 class="text-center">{{$menu->price}} Kyats </h4>  -->
                </p>
              </div><!-- Menu Item -->
              
            <?php 
                }
            ?>

            </div>
          </div><!-- End Starter Menu Content -->

          <?php 
               $cats = DB::table("categories")->get();
               foreach($cats as $cat){
          ?>
          <div class="tab-pane fade" id="menu-{{$cat->id}}" role="tabpanel">

          <div class="tab-header text-center">
            <p>Menu</p>
            <h3>{{$cat->name}}</h3>
            <br>
          </div>

          <div class="row gy-5">

          <?php 
              $menus = DB::table("menus")->where("category_id",$cat->id)->get();
              foreach($menus as $menu){

              
            ?>
                  <div class="col-lg-4 menu-item">
                <a target="_blank" href="{{$menu->image}}" class="glightbox"><img src="{{$menu->image}}" class="menu-img img-fluid" alt=""></a>
                <br> 
                <h3 class="text-center">{{$menu->name}}</h3>
                <p class="ingredients">
                {{$menu->description}}
                </p>
                <p class="price">
                    <!-- <h4 class="text-center">{{$menu->price}} Kyats </h4>  -->
                </p>
              </div><!-- Menu Item -->
              
            <?php 
                }
            ?>


          </div>
          </div><!-- End Breakfast Menu Content -->
          <?php
                }
            ?>
          


        </div>

      </div>
    </section>
<section data-bs-version="5.1" class="slider6 mbr-embla cid-tHNlDzkafD" id="slider6-y">
    
    <br>
    <div class="position-relative">
        <div class="mbr-section-head">
            <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2" style="color:#a42826 !important"><strong>Events</strong></h4>
            
        </div>
        <div class="embla mt-4" data-skip-snaps="true" data-align="center" data-contain-scroll="trimSnaps" data-loop="true" data-auto-play="true" data-auto-play-interval="5" data-draggable="true">
            <div class="embla__viewport container-fluid">
                <div class="embla__container">

                    <?php 
                        $events = DB::table("events")->get();
                        foreach($events as $event){
                            ?>
                        <div class="embla__slide slider-image item" style="margin-left: 1rem; margin-right: 1rem;">
                            <div class="slide-content">
                                <div class="item-wrapper">
                                    <div class="item-img">
                                        <img src="{{$event->image}}" alt="Mobirise Website Builder" title="">
                                    </div>
                                </div>
                                <div class="item-content">
                                    <h5 class="item-title mbr-fonts-style display-4"><em>{{$event->date}}</em></h5>
                                    <h6 class="item-subtitle mbr-fonts-style mt-1 display-7"><strong>{{$event->name}}</strong></h6>
                                    <p class="mbr-text mbr-fonts-style mt-3 display-7">
                                        {{$event->description}}
                                    </p>
                                </div>
                                <!-- <div class="mbr-section-btn item-footer mt-2"><a href="" class="btn item-btn btn-primary-outline display-7" target="_blank" style="color:#a42826 !important">Read More &gt;</a></div> -->
                            </div>
                        </div>
                            <?php
                        }
                    ?>
                    

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