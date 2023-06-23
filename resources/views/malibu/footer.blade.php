<section data-bs-version="5.1" class="footer6 cid-tHHMSdsnBt" once="footers" id="footer6-u">

    

    <?php 
        $settings = DB::table("msettings")->where("id",1)->first();
    ?>

    <div class="container">
        <div class="row content mbr-white">
            <div class="col-12 col-md-6 mbr-fonts-style display-7">
                <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7">
                    <strong>Address</strong>
                </h5>
                <p class="mbr-text mbr-fonts-style display-7">
                    {{$settings->address}}
                </p> <br>
                <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 mt-4 display-7">
                    <strong>Contacts</strong>
                </h5>
                <p class="mbr-text mbr-fonts-style mb-4 display-7">
                    Email: <a href="mailto:{{$settings->email}}">{{$settings->email}}</a> <br>
                    Phone: <a href="tel:{{$settings->phone}}">{{$settings->phone}}</a> <br>
                </p>
            </div>
          
            <div class="col-12 col-md-6">
                <div class="google-map">
                    <!-- <iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDk89J4FSunMF33ruMVWJaJht_Ro0kvoXs&amp;q=350 5th Ave, New York, NY 10118" allowfullscreen=""></iframe> -->
                        <iframe 
     width="100%" 
    height="250" 
     frameborder="0" 
     scrolling="no" 
     marginheight="0" 
    marginwidth="0" 
    src="https://maps.google.com/maps?q= <?php echo $settings->lat ?>, <?php echo $settings->long ?>&hl=mm&z=14&amp;output=embed" >
    </iframe>
                    </div>
            </div>
          
        </div>
        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-sm-12">
                    <hr>
                </div>
            </div>
            <div class="col-sm-12 copyright pl-0">
                <p class="mbr-text text-center mbr-fonts-style mbr-white display-7">
                    © Copyright 2023 Malibu - All Rights Reserved
                </p>
            </div>
        </div>
    </div>
</section>