<style>
    .cid-tHHGHu2vkD button.navbar-toggler .hamburger span {
        background-color:#9cbbe3 !important;
    }
</style>
<section data-bs-version="5.1" class="menu menu3 cid-tHHGHu2vkD" once="menu" id="menu3-r">
    
    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    
                        <img src="{{ asset('/front/assets/images/malibu.jpg')}}" alt="Mobirise Website Builder" style="height: 3rem;">
                    
                </span>
                <span class="navbar-caption-wrap"><a style="color:#9cbbe3 !important" class="navbar-caption text-secondary display-7" href="/malibu">Malbu</a></span>
            </div>
            <button style="color:#a42826 !important" class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger" style="color:#9cbbe3 !important">
                    <span ></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item"><a style="color:#9cbbe3 !important" class="nav-link link text-secondary text-primary display-4" href="/malibu">
                            Home</a></li><li class="nav-item"><a style="color:#9cbbe3 !important" class="nav-link link text-secondary text-primary display-4" href="/malibu#about">
                            About</a></li>
                    <li class="nav-item"><a style="color:#9cbbe3 !important" class="nav-link link text-secondary display-4" href="/malibu#menu">Menu</a></li>
                    <li class="nav-item"><a style="color:#9cbbe3 !important" class="nav-link link text-secondary display-4" href="/malibu#event">Event</a>
                    </li></ul>
                <div class="icons-menu">
                    <?php 
                        $settings = DB::table("msettings")->where("id",1)->first();
                    ?>
                    @if($settings->fb != null)
                        <a style="color:#9cbbe3 !important" class="iconfont-wrapper" href="{{ $settings->fb }}" target="_blank">
                        <span class="p-2 mbr-iconfont socicon-facebook socicon"></span>
                        </a>
                    @endif

                    @if($settings->ig != null)
                        <a style="color:#9cbbe3 !important" class="iconfont-wrapper" href="{{ $settings->ig }}" target="_blank">

                            <span class="p-2 mbr-iconfont socicon-instagram socicon"></span>
                        </a>
                    @endif

                    
                   
                    @if($settings->yt != null)
                        <a style="color:#9cbbe3 !important" class="iconfont-wrapper" href="{{ $settings->yt }}" target="_blank">
                            <span class="p-2 mbr-iconfont socicon-youtube socicon"></span>
                        </a>
                    @endif
                    @if($settings->email != null)
                        <a style="color:#9cbbe3 !important" class="iconfont-wrapper" href="mailto:{{ $settings->email }}" target="_blank">
                            <span class="p-2 mbr-iconfont socicon-mail socicon"></span>
                        </a>
                    @endif
                    @if($settings->phone != null)
                        <a style="color:#9cbbe3 !important" class="iconfont-wrapper" href="tel:{{ $settings->phone }}" target="_blank">
                            <span class="p-2 mbr-iconfont socicon-viber socicon"></span>
                        </a>
                    @endif
                </div>
                
            </div>
        </div>
    </nav>
</section>