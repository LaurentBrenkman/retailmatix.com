<!doctype html>
<html lang="en" dir="ltr">

<head>
    <?php echo view("_partials/head"); ?>

    <style>
        button {
            background-color: #4C12A1;
            color: #FFFFFF;
            border: none;
            height: 74px;
            width: 213px;
            font-weight: 400;
            font-family: lato;
            font-size: 24px;
            border-radius: 8px;
        }

        .handphone-image {
            margin-left: 3rem !important;
            padding-left: 3rem !important;
        }
        .img2000 {
            display: none;
        }

        .icon-mobile{
            display: none;
        }
        .container-new {
            max-width: 500px;
            max-height: 100px;
            padding: 15px;
            width: 100%;
            margin: 0 auto;
            background-color: #eeee;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            overflow: visible;
            transition: all 0.7s;
        }

        .container-meluas {
            margin-right: 75px;
            margin-left: 75px;
            max-height: 400px;
            height: 100%;
            transition: all 0.7s;

        }
        .container-meluas-mobile {
            margin-right: 75px;
            margin-left: 75px;
            max-height: 400px;
            height: 100%;
            transition: all 0.7s;

        }

        .container-expand {
            transition: all 0.7s;
            max-height: 850px !important;
            /* height: 100% !important; */
            /* overflow: visible !important; */
        }

        .expand-wrap {
            width: -webkit-fill-available;
            /* overflow: visible !important; */
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.5s;
        }

        .expand-wrap-active {
            opacity: 1;
            transition: opacity 0.5s;
            /* max-width: 700px; */
        }

        .cardori,
        .card-expand {
            width: -webkit-fill-available;
            /* height: -webkit-fill-available; */
            height: 100%;
            border-radius: 7px;
            background: #FFF;
            padding: 5px 5px 5px 5px;
            transition: all 0.5s ease;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.15);
            margin: 5px;
        }

        .cardori_active {
            background-color: #4c12a1;
            color: white;
        }

        .icon {
            background-color: #4c12a1;
            border-radius: 50%;
            padding: 8px;
            color: white !important;
        }

        .icon_active {
            color: #4C12A1 !important;
            background-color: white;
        }

        .img-icon {
            height: 21px;
            width: auto;
        }

        #button-more-detail {
            font-family: Arial, Helvetica, sans-serif;
        }

        #hideDetailsBtn {
            opacity: 0;
            transition: all 0.3s;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .moreDetailsBtn-active {
            opacity: 0;
            transition: all 0.3s;
            visibility: hidden;
        }

        .hideDetailsBtn-active {
            opacity: 1 !important;
            transition: all 0.3s;
        }

        .card-expand {
            background-color: blue;
        }

        .social-media {
            margin-top: 25em;
            gap: 1.5em;
            /* display: none; */
            position: absolute !important;
            top: 0;
        }

        .button-detail {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .mobile {
            display: none;
        }
        .katakata{
            display: none;
        }
        .mobile2020{
            display: none;
        }
        .mobile2022{
            display: none;
        }

        /* Tablet size */
        @media screen and (max-width: 768px) {
            #moreDetailsBtn {
                margin-top: 11em !important;
            }
            .icon-mobile {
                display: none;
            }
            .icon-mobile {
                display: none;
            }

            .button-detail {
                display: flex;
                align-items: center;
                justify-content: center;
            }

            button {
                transform: scale(.8);
            }

            .social-media {
                display: none !important;
            }

            .web {
                display: none;
            }

            .mobile {
                display: block;
            }
            .img2000 {
                display: none;
            }
            .katakata{
                display: none;
            }
            .mobile2020{
                display: none;
            }
            .mobile2022{
                display: none;
            }
        }

        /* Custom size */
        @media screen and (max-width: 900px) {
            #moreDetailsBtn {
                margin-top: 11em !important;
            }
            .icon-mobile {
                display: none;
            }

            #hideDetailsBtn {
                position: static !important;
                margin-top: 13em !important;
            }

            .about-content {
                width: 300px !important;
            }

            .bg-content-right-user {
                overflow: hidden !important;
            }

            .handphone-image {
                width: 90%;
                margin-left: 10px;
                margin-top: 80px;
                /* max-height: 220px; */
                transform: scale(.9);
                padding: 4px;
                margin: 0 !important;
                padding: 0 !important;
            }

            .content-wrapper-activity {
                margin-top: 50px !important;
            }

            .content-fraud-all {
                margin-top: 100px;
            }

            .image-fraud {
                overflow: hidden;
            }

            .gradient-hero-header {
                overflow: hidden;
            }

            .img-awd {
                overflow: hidden;
            }

            .container-meluas .col-3 {
                flex: unset !important;
                -webkit-box-flex: unset !important;
                max-width: unset !important;
            }
            .container-meluas-mobile .col-3 {
                flex: unset !important;
                -webkit-box-flex: unset !important;
                max-width: unset !important;
            }

            .container-meluas {
                max-height: unset !important;
            }
            .container-meluas-mobile {
                max-height: unset !important;
            }


            .footer-pt-retail {
                margin-top: 5em;
            }


            .button-detail {
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .web {
                display: none;
            }

            .mobile {
                display: block;
            }
            .img2000 {
                display: none;
            }
            .katakata{
                display: none;
            }
            .mobile2020{
                display: none;
            }
            .mobile2022{
                display: none;
            }
        }

        @media screen and (max-width: 640px) {
            #moreDetailsBtn {
                margin-top: 12em !important;
            }
            .icon-mobile {
                display: none;
            }

            .container-fluid {
                padding-left: 30px;
                padding-right: 30px;
            }


            .about-content {
                width: 300px !important;
            }

            .bg-content-right-user {
                overflow: hidden !important;
            }

            .handphone-image {
                width: 100%;
                max-height: 390px;
                padding: 4px;
                margin: 0 !important;
                padding: 0 !important;
            }

            .content-wrapper-activity {
                margin-top: 50px !important;
            }

            .content-fraud-all {
                margin-top: 100px;
            }

            .image-fraud {
                overflow: hidden;
            }

            .gradient-hero-header {
                overflow: hidden;
            }

            .img-awd {
                overflow: hidden;
            }

            .container-meluas .col-3 {
                flex: unset !important;
                -webkit-box-flex: unset !important;
                max-width: unset !important;
            }

            .container-meluas-mobile .col-3 {
                flex: unset !important;
                -webkit-box-flex: unset !important;
                max-width: unset !important;
            }

            .container-meluas {
                max-height: unset !important;
            }

            .container-meluas-mobile {
                max-height: unset !important;
            }


            .footer-pt-retail {
                margin-top: 5em;
            }

            .button-detail {
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .web {
                display: none;
            }

            .mobile {
                display: block;
            }
            .img2000 {
                display: none;
            }
            .katakata{
                display: none;
            }
            .mobile2020{
                display: none;
            }
            .mobile2022{
                display: none;
            }
        }

        @media screen and (max-width: 576px) {
            #moreDetailsBtn {
                margin-top: 12em !important;
            }

            #hideDetailsBtn {
                margin-top: 15em !important;
            }
            .icon-mobile {
                display: block;
            }

            .about-content {
                width: 300px !important;
            }

            .bg-content-right-user {
                overflow: hidden !important;
            }

            .handphone-image {
                display: none;
                width: 100%;
                /* max-height: 390px; */
                transform: scale(1);
                padding: 4px;
                margin-left: 30px;
                /*margin: 0 !important;*/
                padding: 0 !important;
            }

            .content-wrapper-activity {
                margin-top: 50px !important;
            }

            .content-fraud-all {
                margin-top: 100px;
            }

            .image-fraud {
                overflow: hidden;
            }

            .gradient-hero-header {
                overflow: hidden;
            }

            /*.img-awd {*/
            /*    display: block;*/
            /*    overflow: block;*/
            /*}*/

            .img-awards-partner{
                display: block;
            }

            .container-meluas .col-3 {
                flex: unset !important;
                -webkit-box-flex: unset !important;
                max-width: unset !important;
            }
            .container-meluas-mobile .col-3 {
                flex: unset !important;
                -webkit-box-flex: unset !important;
                max-width: unset !important;
            }

            .container-meluas {
                max-height: unset !important;
            }

            .container-meluas-mobile {
                max-height: unset !important;
            }

            /*mobile*/

            .fun-fact-wrapper .container .row {
                overflow: hidden;
            }

            .footer-pt-retail {
                margin-top: 5em;
            }

            .button-detail {
                display: flex;
                align-items: center;
                justify-content: center;
                /*margin-top: 1000px;*/
            }

            .web {
                display: none;
            }

            .mobile {
                display: block;
            }
            .img2000 {
                display: block;
                width: 100%;
                /* max-height: 390px; */
                transform: scale(0.8);
                padding: 4px;
                /*margin-left: 30px;*/
                /*margin: 0 !important;*/
                padding: 0 !important;
                margin-bottom: -80px;
                margin-top: -80px;
            }
            .katakata{
                display: block;
                margin-bottom: -800px;
                text-align: start;
                margin-left: 30px;
            }
            .mantull{
                display: none;
            }
            .web202{
                display: none;
            }
            .partner202{
                display: block!important;
            }
            .web2020{
                display: none;
            }
            .mobile2020{
                display: block;
            }
            .mobile2022{
                display: block;
            }
        }
    </style>
</head>

<body>
<!-- PRE-LOADER -->
<div class="preloader-activate preloader-active open_tm_preloader">
    <div class="preloader-area-wrap">
        <div class="spinner d-flex justify-content-center align-items-center h-100">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
</div>

<!--====================  header area ====================-->
<?php echo view("_partials/header"); ?>
<!--====================  End of header area  ====================-->

<div id="main-wrapper">
    <div class="site-wrapper-reveal">
        <div class="resolutions-hero-slider position-relative">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide ">
                        <div class="wraper-img-bg">
                            <div class="service-hero-wrapper resolutions-hero-space resolutions-hero-bg">
                                <div class="gradient-hero-header" style="height: 747px!important;">
                                </div>
                                <div class="container-fluid" style="position: absolute;">
                                    <div class="position-relative">
                                        <div class="social-media w-100 d-flex justify-content-end flex-column align-items-end">
                                            <img width="50" src="<?php echo base_url(); ?>/assets/images/icons/s-wa.png" />
                                            <img width="50" src="<?php echo base_url(); ?>/assets/images/icons/s-ig.png" />
                                            <img width="50" src="<?php echo base_url(); ?>/assets/images/icons/s-linkedin.png" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-10 col-md-10 ml-auto mr-auto">
                                            <div class="row">
                                                <div class="service-hero-wrap wow move-up">
                                                    <div class="service-hero-text">
                                                        <h2 class="font-weight--reguler text-white" style="font-size: 45pt;">Optimizing In-store
                                                            Execution<br>Using
                                                            Artificial Intelligence</h2>
                                                        <h6 class="font-weight--reguler text-white" style="margin-top: 50px; font-size:25px;">End-to-end
                                                            Solutions to Monitor Your</h6>
                                                        <div class="contact-us-button" style="margin-top:50px;font-size:30px">
                                                            <a href="#section-contactus" class="btn link-contactus btn-learn-more">Learn
                                                                More</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2">
                                            <div class="social-media">
                                                <!-- <h4 class="text-white">testting</h4> -->
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============ Resolutions Hero End ============-->



        <div class="container-fluid awards-container pt-5">
            <div class="col-lg-12 p-0">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="p-2">
                        <div class="card" style="width: 15rem;border-radius:40px;background-color:#F7F4FB;border: 3px solid #F2F1F6;">
                            <div class="card-body">
                                <h5 style="color:#4D129F;font-size:30px;text-align:center;">Awards</h5>
                                <p style="color: #B7B5C2;font-size:18px;font-weight: 700;text-align:center;">We got several <br>
                                    awards
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 img-awd">
                        <div class="img-awards">
                            <img src="<?php echo base_url(); ?>/assets/images/award/partner.png" alt="" class="img-fluid" style="margin-right: 20px;">
                        </div>
                    </div>
                </div>
                <div class="icon-mobile">
                    <div class="bg-content-center mt-3 icon-mobile " style="transform: scale(0.5); margin-left: -90px">
                        <div class="img-awards-partner icon-mobile ">
                            <img src="<?php echo base_url(); ?>/assets/images/icons/nvidia.png" alt="" class="icon-mobile ">
                        </div>
                    </div>
                    <div class="bg-content-center icon-mobile " style="transform: scale(0.5); margin-left: -30px">
                        <div class="img-awards-partner icon-mobile ">
                            <img src="<?php echo base_url(); ?>/assets/images/icons/identik.png" alt="" class="icon-mobile ">
                        </div>
                    </div>
                    <div class="bg-content-center icon-mobile " style="transform: scale(0.6); margin-left: -43px; margin-top: -40px">
                        <div class="img-awards-partner icon-mobile ">
                            <img src="<?php echo base_url(); ?>/assets/images/icons/satuindonesia.png" alt="" class="icon-mobile ">
                        </div>
                    </div>
                    <div class="bg-content-center icon-mobile " style="transform: scale(0.6); margin-left: -43px; margin-top: -40px">
                        <div class="img-awards-partner icon-mobile ">
                            <img src="<?php echo base_url(); ?>/assets/images/icons/BPPT_innovation.png" alt="" class="icon-mobile ">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--=========== Video Section ==========-->
        <div class="fun-fact-wrapper section-space--ptb_120" style="padding-top: 3%;">
            <div class="container-fluid awards-container">
                <h3 style="color: #4C12A1;" class="text-center pb-3">HOW WILL YOU BENEFIT</h3>
                <h5 class="font-weight--reguler text-center mb-30" style="color: #8C8F93; font-weight:500; font-size:30px">
                    Understand How Products
                    Look,
                    <br>Perform and Compete on the Shelf.
                </h5>
                <div class="iframe-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/roWzvr1iI0M?autoplay=1&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>


        </div>
        <!--=========== Video Section End ==========-->

        <!--=========== About ==========-->
        <div class="fun-fact-wrapper section-space--ptb_120 about-redesign" style="padding-top: inherit;">
            <!-- <div class="container-fluid"> -->
            <div class="content-about-right">
                <div class="d-flex">
                    <div class="d-flex align-items-center pl-5">
                        <div class="p-2 about-content">
                            <p style="color: #4C12A180;font-weight: 700;font-size: 20px;">ABOUT</p>
                            <h3 style="color: #4C12A1;font-weight: 600;">WHO WE ARE</h3>
                            <p class="mt-3" style="color: #222222;font-size: 18px;">Retailmatix is
                                dedicated to focused
                                its product
                                and<br> services on <strong>in-store execution analytic and sales force
                                    automation.</strong></p>
                            <p class="mt-1 pb-3" style="color: #222222;font-size: 18px;">We are one of
                                Nodeflux business
                                units, the 1st
                                and largest visionAI company from Indonesia since 2016.</p>
                            <div class="contact-us-button mt-20">
                                <a href="https://www.nodeflux.io/" target="_blank" class="btn btn--secondary text-color-white link-contactus btn-learn-more" style="background-color: #4C12A1;color:#FFFFFF;">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-content-right-user">
                        <img class="ml-5 pl-3" src="<?php echo base_url(); ?>/assets/images/bg/about-right-user.png" height="500em" alt="">
                    </div>
                </div>
            </div>



            <div class="bg-content-center img2000">
                <img class="img2000" src="<?php echo base_url(); ?>/assets/images/bg/left-img-activity.png" height="600em" alt="">
            </div>


            <div class="d-flex align-items-center katakata">
                <div class="modern-number-02 mr-5 pr-3 mb-5 katakata" >
                    <p style="color:#4C12A180;font-size:15pt;font-weight:bold;">ACTIVITIES</p>
                    <h3 class="heading text-color-purple">WHAT WE DO</h3>
                    <p class="mt-3 text-justify" style="color: #222222;font-size:12pt;">We provide In-store
                        execution
                        tracker by
                        utilizing Image<br> Recognition powered by Artifial Intelligence.</p>
                    <p class="mt-1 text-justify" style=" color: #222222;font-size:12pt;">We put a lot of love and
                        effort to create
                        system
                        that ease front <br> liners to do their job to track your <strong>products and
                            POSM</strong> with
                        <strong><br> Offline mode, Geotagging, Geofancing, Phone
                            Storage
                            Friendly, <br> Anti-dark and Anti-blur.</strong>
                    </p>
                    <div class=" contact-us-button mt-20 mb-10">
                        <a href="https://www.youtube.com/watch?v=v2nbT2TYzY4" target="_blank" class="btn btn--secondary text-color-white link-contactus" style="background-color: #4C12A1;border-radius:20px;">LEARN MORE</a>
                    </div>
                </div>
            </div>

            <div class="content-wrapper-activity">
                <div class="d-flex">
                    <div class="bg-content-left-mobile d-flex flex-grow-1">
                        <img class="handphone-image" src="<?php echo base_url(); ?>/assets/images/bg/left-img-activity.png" height="600em" alt="">
                    </div>
                    <div class="d-flex align-items-center ">
                        <div class="modern-number-01 mr-5 pr-3 mb-5 mantull">
                            <p style="color:#4C12A180;font-size:15pt;font-weight:bold;">ACTIVITIES</p>
                            <h3 class="heading text-color-purple">WHAT WE DO</h3>
                            <p class="mt-3 text-justify" style="color: #222222;font-size:12pt;">We provide In-store
                                execution
                                tracker by
                                utilizing Image<br> Recognition powered by Artifial Intelligence.</p>
                            <p class="mt-1 text-justify" style=" color: #222222;font-size:12pt;">We put a lot of love and
                                effort to create
                                system
                                that ease front <br> liners to do their job to track your <strong>products and
                                    POSM</strong> with
                                <strong><br> Offline mode, Geotagging, Geofancing, Phone
                                    Storage
                                    Friendly, <br> Anti-dark and Anti-blur.</strong>
                            </p>
                            <div class=" contact-us-button mt-20">
                                <a href="https://www.youtube.com/watch?v=v2nbT2TYzY4" target="_blank" class="btn btn--secondary text-color-white link-contactus" style="background-color: #4C12A1;border-radius:20px;">LEARN MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-content-center img2000">
                <img class="img2000" src="<?php echo base_url(); ?>/assets/images/bg/img-hp-fraud.png" height="400em" style="margin-top: 150px; margin-bottom: -150px" alt="">
            </div>

            <div class="content-fraud-all bg-fraud-content">
                <div class="content-about-right-fraud">
                    <div class="d-flex">
                        <div class="d-flex align-items-center pl-5">
                            <div class="p-2">
                                <h3 style="color: #4C12A1;font-weight: 600;padding-bottom:20px;">AVOID FRAUD WITH
                                    <br>IMAGE RECOGNITION
                                </h3>
                                <p style="color:#222222;font-weight:400;font-size:17pt;padding-bottom:20px;">Real-time
                                    visibility monitoring for
                                    product availibility and <br>
                                    material promo in one
                                    apps.
                                </p>
                                <div class="contact-us-button mt-20">
                                    <a href="https://www.nodeflux.io/" target="_blank" class="btn btn--secondary text-color-white link-contactus btn-learn-more" style="background-color: #4C12A1;color:#FFFFFF;">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="image-fraud">
                            <img src="<?php echo base_url(); ?>/assets/images/bg/img-hp-fraud.png" height="500em" alt="" style="margin-left: 12em;">
                        </div>
                    </div>
                </div>
            </div>
            <!-- </div> -->
        </div>
        <!--=========== About End ==========-->

        <!--===========  Why Retailmatix =============-->
        <div class="benefits-images section-space--ptb_100 mt-0 pt-0 web2020" style="padding-top: inherit;">
            <h3 class="heading text-center mr-xl-5 mb-3 text-color-purple">Why Retailmatix ?</h3>
            <div class="container-fluid mt-4">
                <div class="row">
                    <div class="col-lg-3">
                        <a href="#" class="ht-box-images style-03 wow move-up" style="background-color:#4C12A1; border-radius: 28px; box-shadow: 0px 10px #A469E2; border: 1px; margin:auto; text-align:center;">
                            <div class="image-box-wrap">
                                <div class="box-image">
                                    <img class="img-fulid" src="<?php echo base_url(); ?>/assets/images/box-image/reliable.svg" width="100px" height="103px" alt="">
                                </div>
                                <div class="content">
                                    <h5 class="heading text-center" style="color: white">RELIABLE RESULTS</h5>
                                    <div class="text text-center" style="color: white">Data from Image Recognition result is more
                                        accurate to avoid human error with 94.98 % accuracy.</div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3">
                        <a href="#" class="ht-box-images style-03 wow move-up" style="background-color: #faf7f7;border-radius: 28px; box-shadow: 0px 10px #4C12A1; border: 1px; margin:auto; text-align:center">
                            <div class="image-box-wrap">
                                <div class="box-image">
                                    <img class="img-fulid" src="<?php echo base_url(); ?>/assets/images/box-image/increase.svg" width="100px" height="103px" alt="">
                                </div>
                                <div class="content">
                                    <h5 class="heading text-color-purple text-center">INCREASE PRODUCTIVITY</h5>
                                    <div class="text text-center">More Store Coverage (Up to 70 %) and
                                        Visibility
                                        Monitoring for Product and POSM for quick action.</div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3">
                        <a href="#" class="ht-box-images style-03 wow move-up" style="background-color:#4C12A1; border-radius: 28px; box-shadow: 0px 10px #A469E2;margin:auto; text-align:center">
                            <div class="image-box-wrap">
                                <div class="box-image">
                                    <img class="img-fulid" src="<?php echo base_url(); ?>/assets/images/box-image/maximize.svg" width="100px" height="103px" alt="">
                                </div>
                                <div class="content">
                                    <h5 class="heading text-center" style="color: white">MAXIMIZE REVENUE</h5>
                                    <div class="text text-center" style="color: white">Clear store visibility helps improve store
                                        conditions and improve sales performance.</div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3">
                        <a href="#" class="ht-box-images style-03 wow move-up" style="background-color: #faf7f7; border-radius: 28px; box-shadow: 0px 10px #4C12A1;margin:auto; text-align:center">
                            <div class="image-box-wrap">
                                <div class="box-image">
                                    <img class="img-fulid" src="<?php echo base_url(); ?>/assets/images/box-image/seamles.svg" width="100px" height="103px" alt="">
                                </div>
                                <div class="content">
                                    <h5 class="heading text-color-purple text-center">SEAMLESS DATA UPLOAD</h5>
                                    <div class="text text-center">Field Force won't need continuous internet
                                        while
                                        working (background sending). Let them focus on merchandising and
                                        selling,
                                        not the data sending.</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--===========  Why Retailmatix End =============-->

        <!--===========  Why Retailmatix =============-->
        <div class="benefits-images section-space--ptb_100 mt-0 pt-0 mobile2020" style="padding-top: inherit;">
            <h3 class="heading text-center mr-xl-5 mb-3 text-color-purple">Why Retailmatix ?</h3>
            <div class="container-fluid mt-4">
                <div class="col-lg-3" style="margin-bottom: 30px">
                    <a href="#" class="ht-box-images style-03 wow move-up" style="background-color:#4C12A1; border-radius: 28px; box-shadow: 0px 10px #A469E2; border: 1px; margin:auto; text-align:center;">
                        <div class="image-box-wrap">
                            <div class="box-image">
                                <img class="img-fulid" src="<?php echo base_url(); ?>/assets/images/box-image/reliable.svg" width="100px" height="103px" alt="">
                            </div>
                            <div class="content">
                                <h5 class="heading text-center" style="color: white">RELIABLE RESULTS</h5>
                                <div class="text text-center" style="color: white">Data from Image Recognition result is more
                                    accurate to avoid human error with 94.98 % accuracy.</div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3" style="margin-bottom: 30px">
                    <a href="#" class="ht-box-images style-03 wow move-up" style="background-color: #faf7f7;border-radius: 28px; box-shadow: 0px 10px #4C12A1; border: 1px; margin:auto; text-align:center">
                        <div class="image-box-wrap">
                            <div class="box-image">
                                <img class="img-fulid" src="<?php echo base_url(); ?>/assets/images/box-image/increase.svg" width="100px" height="103px" alt="">
                            </div>
                            <div class="content">
                                <h5 class="heading text-color-purple text-center">INCREASE PRODUCTIVITY</h5>
                                <div class="text text-center">More Store Coverage (Up to 70 %) and
                                    Visibility
                                    Monitoring for Product and POSM for quick action.</div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3" style="margin-bottom: 30px">
                    <a href="#" class="ht-box-images style-03 wow move-up" style="background-color:#4C12A1; border-radius: 28px; box-shadow: 0px 10px #A469E2;margin:auto; text-align:center">
                        <div class="image-box-wrap">
                            <div class="box-image">
                                <img class="img-fulid" src="<?php echo base_url(); ?>/assets/images/box-image/maximize.svg" width="100px" height="103px" alt="">
                            </div>
                            <div class="content">
                                <h5 class="heading text-center" style="color: white">MAXIMIZE REVENUE</h5>
                                <div class="text text-center" style="color: white">Clear store visibility helps improve store
                                    conditions and improve sales performance.</div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3" style="margin-bottom: 30px">
                    <a href="#" class="ht-box-images style-03 wow move-up" style="background-color: #faf7f7; border-radius: 28px; box-shadow: 0px 10px #4C12A1;margin:auto; text-align:center">
                        <div class="image-box-wrap">
                            <div class="box-image">
                                <img class="img-fulid" src="<?php echo base_url(); ?>/assets/images/box-image/seamles.svg" width="100px" height="103px" alt="">
                            </div>
                            <div class="content">
                                <h5 class="heading text-color-purple text-center">SEAMLESS DATA UPLOAD</h5>
                                <div class="text text-center">Field Force won't need continuous internet
                                    while
                                    working (background sending). Let them focus on merchandising and
                                    selling,
                                    not the data sending.</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!--===========  Why Retailmatix End =============-->

        <!--===========  Why Retailmatix =============-->
        <div class="benefits-images section-space--ptb_100 mt-0 pt-0 web202" style="padding-top: inherit; background-color: #EFEFF1">
            <h3 class="heading text-center mb-0 text-color-purple web202" style="padding-top: 50px">What We Provide</h3><br>
            <div class="container-meluas web202">
                <div class=" col-3 col-lg-3 mb-2 web202" style="padding-left: 0px; padding-right: 0px;">
                    <div class="cardori On_Shelf_Availibility">
                        <div class="card-body d-flex justify-content-center align-items-center flex-column" onmousemove="cardHover('On_Shelf_Availibility')">
                            <div class="icon"><img class="img-icon" src="<?= base_url() ?>/assets/images/icons-new/On_Shelf_Availibility.png"></div>
                            <p class="mt-2">On Shelf Availibility</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-lg-3 mb-2 web202" style="padding-left: 0px; padding-right: 0px;">
                    <div class="cardori out_of_stock">
                        <div class="card-body d-flex justify-content-center align-items-center flex-column" onmousemove="cardHover('out_of_stock')">
                            <!-- <i class='bx bx-package bx-md'></i> -->
                            <div class="icon"><img class="img-icon" src="<?= base_url() ?>/assets/images/icons-new/out_of_stock.png"></div>
                            <p class="mt-2">Out Of Stock</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-lg-3 mb-2 web202" style="padding-left: 0px; padding-right: 0px;">
                    <div class="cardori posm">
                        <div class="card-body d-flex justify-content-center align-items-center flex-column" onmousemove="cardHover('posm')">
                            <!--                            <i class='bx bx-package bx-md'></i>-->
                            <div class="icon"><img class="img-icon" src="<?= base_url() ?>/assets/images/icons-new/posm.png"></div>
                            <p class="mt-2">Points of Sales Materials (POSM)</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-lg-3 mb-2 web202" style="padding-left: 0px; padding-right: 0px;">
                    <div class="cardori promotion">
                        <div class="card-body d-flex justify-content-center align-items-center flex-column" onmousemove="cardHover('promotion')">
                            <!--                            <i class='bx bx-package bx-md'></i>-->
                            <div class="icon"><img class="img-icon" src="<?= base_url() ?>/assets/images/icons-new/promotion.png"></div>
                            <p class="mt-2">Promotion Activity</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-lg-3 mb-2 web202" style="padding-left: 0px; padding-right: 0px;">
                    <div class="cardori sos">
                        <div class="card-body d-flex justify-content-center align-items-center flex-column" onmousemove="cardHover('sos')">
                            <!--                            <i class='bx bx-package bx-md'></i>-->
                            <div class="icon"><img class="img-icon" src="<?= base_url() ?>/assets/images/icons-new/sos.png"></div>
                            <p class="mt-2">Share of Space (SoS)</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-lg-3 mb-2 web202" style="padding-left: 0px; padding-right: 0px;">
                    <div class="cardori investment">
                        <div class="card-body d-flex justify-content-center align-items-center flex-column" onmousemove="cardHover('investment')">
                            <!--                            <i class='bx bx-package bx-md'></i>-->
                            <div class="icon"><img class="img-icon" src="<?= base_url() ?>/assets/images/icons-new/Investment.png"></div>
                            <p class="mt-2">Store Investment</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-lg-3 mb-2 web202" style="padding-left: 0px; padding-right: 0px;">
                    <div class="cardori planogram">
                        <div class="card-body d-flex justify-content-center align-items-center flex-column" onmousemove="cardHover('planogram')">
                            <!--                            <i class='bx bx-package bx-md'></i>-->
                            <div class="icon"><img class="img-icon" src="<?= base_url() ?>/assets/images/icons-new/Planogram.png"></div>
                            <p class="mt-2">Planogram Compliance</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-lg-3 mb-2 web202" style="padding-left: 0px; padding-right: 0px;">
                    <div class="cardori facing">
                        <div class="card-body d-flex justify-content-center align-items-center flex-column" onmousemove="cardHover('facing')">
                            <!--                            <i class='bx bx-package bx-md'></i>-->
                            <div class="icon"><img class="img-icon" src="<?= base_url() ?>/assets/images/icons-new/facing.png"></div>
                            <p class="mt-2">Facing</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-lg-3 mb-2 web202" style="padding-left: 0px; padding-right: 0px;">
                    <div class="cardori competitor">
                        <div class="card-body d-flex justify-content-center align-items-center flex-column" onmousemove="cardHover('competitor')">
                            <!--                            <i class='bx bx-package bx-md'></i>-->
                            <div class="icon"><img class="img-icon" src="<?= base_url() ?>/assets/images/icons-new/competitor.png"></div>
                            <p class="mt-2">Competitor Activity</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-lg-3 mb-2 web202" style="padding-left: 0px; padding-right: 0px;">
                    <div class="cardori attandance">
                        <div class="card-body d-flex justify-content-center align-items-center flex-column" onmousemove="cardHover('attandance')">
                            <!--                            <i class='bx bx-package bx-md'></i>-->
                            <div class="icon"><img class="img-icon" src="<?= base_url() ?>/assets/images/icons-new/attandance.png"></div>
                            <p class="mt-2">Attandance</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-lg-3 mb-2 web202" style="padding-left: 0px; padding-right: 0px;">
                    <div class="cardori survey">
                        <div class="card-body d-flex justify-content-center align-items-center flex-column" onmousemove="cardHover('survey')">
                            <!--                            <i class='bx bx-package bx-md'></i>-->
                            <div class="icon"><img class="img-icon" src="<?= base_url() ?>/assets/images/icons-new/survey.png"></div>
                            <p class="mt-2">Survey / Questionnaire</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-lg-3 mb-2 web202" style="padding-left: 0px; padding-right: 0px;">
                    <div class="cardori price">
                        <div class="card-body d-flex justify-content-center align-items-center flex-column" onmousemove="cardHover('price')">
                            <!--                            <i class='bx bx-package bx-md'></i>-->
                            <div class="icon"><img class="img-icon" src="<?= base_url() ?>/assets/images/icons-new/price.png"></div>
                            <p class="mt-2">Price Monitoring</p>
                        </div>
                    </div>
                </div>
                <div class="expand-wrap web202">
                    <div class="col-3 col-lg-3 mb-2 web202" style="padding-left: 0px; padding-right: 0px;">
                        <div class="cardori journey">
                            <div class="card-body d-flex justify-content-center align-items-center flex-column" onmousemove="cardHover('journey')">
                                <!--                                <i class='bx bx-package bx-md'></i>-->
                                <div class="icon"><img class="img-icon" src="<?= base_url() ?>/assets/images/icons-new/journey.png"></div>
                                <p class="mt-2">Dynamic Journey Plan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-lg-3 mb-2 web202" style="padding-left: 0px; padding-right: 0px;">
                        <div class="cardori suggest">
                            <div class="card-body d-flex justify-content-center align-items-center flex-column" onmousemove="cardHover('suggest')">
                                <!--                                <i class='bx bx-package bx-md'></i>-->
                                <div class="icon"><img class="img-icon" src="<?= base_url() ?>/assets/images/icons-new/suggest.png"></div>
                                <p class="mt-2">Suggest Order Quantity</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-lg-3 mb-2 web202" style="padding-left: 0px; padding-right: 0px;">
                        <div class="cardori visitor">
                            <div class="card-body d-flex justify-content-center align-items-center flex-column" onmousemove="cardHover('visitor')">
                                <!--                                <i class='bx bx-package bx-md'></i>-->
                                <div class="icon"><img class="img-icon" src="<?= base_url() ?>/assets/images/icons-new/visitor.png"></div>
                                <p class="mt-2">Visitor Counting</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-lg-3 mb-2 web202" style="padding-left: 0px; padding-right: 0px;">
                        <div class="cardori visitor_map">
                            <div class="card-body d-flex justify-content-center align-items-center flex-column" onmousemove="cardHover('visitor_map')">
                                <!--                                <i class='bx bx-package bx-md'></i>-->
                                <div class="icon"><img class="img-icon" src="<?= base_url() ?>/assets/images/icons-new/visitor_map.png"></div>
                                <p class="mt-2">Visitor Heatmap</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-lg-3 mb-2 web202" style="padding-left: 0px; padding-right: 0px;">
                        <div class="cardori productknowlage">
                            <div class="card-body d-flex justify-content-center align-items-center flex-column" onmousemove="cardHover('productknowlage')">
                                <!--                                <i class='bx bx-package bx-md'></i>-->
                                <div class="icon"><img class="img-icon" src="<?= base_url() ?>/assets/images/icons-new/productknowlage.png"></div>
                                <p class="mt-2">Product Knowledge</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-lg-3 mb-2 web202" style="padding-left: 0px; padding-right: 0px;">
                        <div class="cardori elerning">
                            <div class="card-body d-flex justify-content-center align-items-center flex-column" onmousemove="cardHover('elerning')">
                                <!--                                <i class='bx bx-package bx-md'></i>-->
                                <div class="icon"><img class="img-icon" src="<?= base_url() ?>/assets/images/icons-new/elerning.png"></div>
                                <p class="mt-2">E-Learning / Training</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-lg-3 mb-2 web202" style="padding-left: 0px; padding-right: 0px;">
                        <div class="cardori facerecognation">
                            <div class="card-body d-flex justify-content-center align-items-center flex-column" onmousemove="cardHover('facerecognation')">
                                <!--                                <i class='bx bx-package bx-md'></i>-->
                                <div class="icon"><img class="img-icon" src="<?= base_url() ?>/assets/images/icons-new/facerecognation.png"></div>
                                <p class="mt-2">Face Recognition</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-lg-3 mb-2 web202" style="padding-left: 0px; padding-right: 0px;">
                        <div class="cardori newotlet">
                            <div class="card-body d-flex justify-content-center align-items-center flex-column" onmousemove="cardHover('newotlet')">
                                <!--                                <i class='bx bx-package bx-md'></i>-->
                                <div class="icon"><img class="img-icon" src="<?= base_url() ?>/assets/images/icons-new/newotlet.png"></div>
                                <p class="mt-2">New Outlet Opening</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-lg-3 mb-2 web202" style="padding-left: 0px; padding-right: 0px;">
                        <div class="cardori newproduct">
                            <div class="card-body d-flex justify-content-center align-items-center flex-column" onmousemove="cardHover('newproduct')">
                                <!--                                <i class='bx bx-package bx-md'></i>-->
                                <div class="icon"><img class="img-icon" src="<?= base_url() ?>/assets/images/icons-new/newproduct.png"></div>
                                <p class="mt-2">New Product Development</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-lg-3 mb-2 web202" style="padding-left: 0px; padding-right: 0px;">
                        <div class="cardori visitortrafic">
                            <div class="card-body d-flex justify-content-center align-items-center flex-column" onmousemove="cardHover('visitortrafic')">
                                <!--                                <i class='bx bx-package bx-md'></i>-->
                                <div class="icon"><img class="img-icon" src="<?= base_url() ?>/assets/images/icons-new/visitortrafic.png"></div>
                                <p class="mt-2">Visitor Traffic Monitoring</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-lg-3 mb-2 web202" style="padding-left: 0px; padding-right: 0px;">
                        <div class="cardori demografi">
                            <div class="card-body d-flex justify-content-center align-items-center flex-column" onmousemove="cardHover('demografi')">
                                <!--                                <i class='bx bx-package bx-md'></i>-->
                                <div class="icon"><img class="img-icon" src="<?= base_url() ?>/assets/images/icons-new/demografi.png"></div>
                                <p class="mt-2">Visitor Demography</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-lg-3 mb-2 web202" style="padding-left: 0px; padding-right: 0px;">
                        <div class="cardori crm">
                            <div class="card-body d-flex justify-content-center align-items-center flex-column" onmousemove="cardHover('crm')">
                                <!--                                <i class='bx bx-package bx-md'></i>-->
                                <div class="icon"><img class="img-icon" src="<?= base_url() ?>/assets/images/icons-new/crm.png"></div>
                                <p class="mt-2">Customer Relationship Management (CRM)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="web">
                <div id="moreDetailsBtn" class="button-detail web202" style="margin-top: 5em;">
                    <button id="button-more-detail">More Details</button>
                </div>
                <div id="hideDetailsBtn" class="button-detail web202" style="margin-top: 6.5em;">
                    <button id="button-more-detail">Hide Details</button>
                </div>
            </div>
        </div>


        <!--===========  Why Retailmatix =============-->
        <div class="benefits-images section-space--ptb_100 mt-0 pt-0 mobile2022" style="padding-top: inherit; background-color: #EFEFF1">
            <h3 class="heading text-center mb-0 text-color-purple mobile2022" style="padding-top: 50px">What We Provide</h3><br>
            <div class="container-meluas-mobile mobile2022">
                <div class=" col-3 col-lg-3 mb-2 mobile2022" style="padding-left: 0px; padding-right: 0px;">
                    <div class="cardori On_Shelf_Availibility">
                        <div class="card-body d-flex justify-content-center align-items-center flex-column" onmousemove="cardHover('On_Shelf_Availibility')">
                            <div class="icon"><img class="img-icon" src="<?= base_url() ?>/assets/images/icons-new/On_Shelf_Availibility.png"></div>
                            <p class="mt-2">On Shelf Availibility</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-lg-3 mb-2 mobile2022" style="padding-left: 0px; padding-right: 0px;">
                    <div class="cardori out_of_stock">
                        <div class="card-body d-flex justify-content-center align-items-center flex-column" onmousemove="cardHover('out_of_stock')">
                            <!-- <i class='bx bx-package bx-md'></i> -->
                            <div class="icon"><img class="img-icon" src="<?= base_url() ?>/assets/images/icons-new/out_of_stock.png"></div>
                            <p class="mt-2">Out Of Stock</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-lg-3 mb-2 mobile2022" style="padding-left: 0px; padding-right: 0px;">
                    <div class="cardori posm">
                        <div class="card-body d-flex justify-content-center align-items-center flex-column" onmousemove="cardHover('posm')">
                            <!--                            <i class='bx bx-package bx-md'></i>-->
                            <div class="icon"><img class="img-icon" src="<?= base_url() ?>/assets/images/icons-new/posm.png"></div>
                            <p class="mt-2">Points of Sales Materials (POSM)</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-lg-3 mb-2 mobile2022" style="padding-left: 0px; padding-right: 0px;">
                    <div class="cardori promotion">
                        <div class="card-body d-flex justify-content-center align-items-center flex-column" onmousemove="cardHover('promotion')">
                            <!--                            <i class='bx bx-package bx-md'></i>-->
                            <div class="icon"><img class="img-icon" src="<?= base_url() ?>/assets/images/icons-new/promotion.png"></div>
                            <p class="mt-2">Promotion Activity</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-lg-3 mb-2 mobile2022" style="padding-left: 0px; padding-right: 0px;">
                    <div class="cardori sos">
                        <div class="card-body d-flex justify-content-center align-items-center flex-column" onmousemove="cardHover('sos')">
                            <!--                            <i class='bx bx-package bx-md'></i>-->
                            <div class="icon"><img class="img-icon" src="<?= base_url() ?>/assets/images/icons-new/sos.png"></div>
                            <p class="mt-2">Share of Space (SoS)</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-lg-3 mb-2 mobile2022" style="padding-left: 0px; padding-right: 0px;">
                    <div class="cardori investment">
                        <div class="card-body d-flex justify-content-center align-items-center flex-column" onmousemove="cardHover('investment')">
                            <!--                            <i class='bx bx-package bx-md'></i>-->
                            <div class="icon"><img class="img-icon" src="<?= base_url() ?>/assets/images/icons-new/Investment.png"></div>
                            <p class="mt-2">Store Investment</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-lg-3 mb-2 mobile2022" style="padding-left: 0px; padding-right: 0px;">
                    <div class="cardori planogram">
                        <div class="card-body d-flex justify-content-center align-items-center flex-column" onmousemove="cardHover('planogram')">
                            <!--                            <i class='bx bx-package bx-md'></i>-->
                            <div class="icon"><img class="img-icon" src="<?= base_url() ?>/assets/images/icons-new/Planogram.png"></div>
                            <p class="mt-2">Planogram Compliance</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-lg-3 mb-2 mobile2022" style="padding-left: 0px; padding-right: 0px;">
                    <div class="cardori facing">
                        <div class="card-body d-flex justify-content-center align-items-center flex-column" onmousemove="cardHover('facing')">
                            <!--                            <i class='bx bx-package bx-md'></i>-->
                            <div class="icon"><img class="img-icon" src="<?= base_url() ?>/assets/images/icons-new/facing.png"></div>
                            <p class="mt-2">Facing</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-lg-3 mb-2 mobile2022" style="padding-left: 0px; padding-right: 0px;">
                    <div class="cardori competitor">
                        <div class="card-body d-flex justify-content-center align-items-center flex-column" onmousemove="cardHover('competitor')">
                            <!--                            <i class='bx bx-package bx-md'></i>-->
                            <div class="icon"><img class="img-icon" src="<?= base_url() ?>/assets/images/icons-new/competitor.png"></div>
                            <p class="mt-2">Competitor Activity</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-lg-3 mb-2 mobile2022" style="padding-left: 0px; padding-right: 0px;">
                    <div class="cardori attandance">
                        <div class="card-body d-flex justify-content-center align-items-center flex-column" onmousemove="cardHover('attandance')">
                            <!--                            <i class='bx bx-package bx-md'></i>-->
                            <div class="icon"><img class="img-icon" src="<?= base_url() ?>/assets/images/icons-new/attandance.png"></div>
                            <p class="mt-2">Attandance</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-lg-3 mb-2 mobile2022" style="padding-left: 0px; padding-right: 0px;">
                    <div class="cardori survey">
                        <div class="card-body d-flex justify-content-center align-items-center flex-column" onmousemove="cardHover('survey')">
                            <!--                            <i class='bx bx-package bx-md'></i>-->
                            <div class="icon"><img class="img-icon" src="<?= base_url() ?>/assets/images/icons-new/survey.png"></div>
                            <p class="mt-2">Survey / Questionnaire</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-lg-3 mb-2 mobile2022" style="padding-left: 0px; padding-right: 0px;">
                    <div class="cardori price">
                        <div class="card-body d-flex justify-content-center align-items-center flex-column" onmousemove="cardHover('price')">
                            <!--                            <i class='bx bx-package bx-md'></i>-->
                            <div class="icon"><img class="img-icon" src="<?= base_url() ?>/assets/images/icons-new/price.png"></div>
                            <p class="mt-2">Price Monitoring</p>
                        </div>
                    </div>
                </div>
                <div class="expand-wrap-mobile mobile2022">
                    <div class="col-3 col-lg-3 mb-2 mobile2022" style="padding-left: 0px; padding-right: 0px;">
                        <div class="cardori journey">
                            <div class="card-body d-flex justify-content-center align-items-center flex-column" onmousemove="cardHover('journey')">
                                <!--                                <i class='bx bx-package bx-md'></i>-->
                                <div class="icon"><img class="img-icon" src="<?= base_url() ?>/assets/images/icons-new/journey.png"></div>
                                <p class="mt-2">Dynamic Journey Plan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-lg-3 mb-2 mobile2022" style="padding-left: 0px; padding-right: 0px;">
                        <div class="cardori suggest">
                            <div class="card-body d-flex justify-content-center align-items-center flex-column" onmousemove="cardHover('suggest')">
                                <!--                                <i class='bx bx-package bx-md'></i>-->
                                <div class="icon"><img class="img-icon" src="<?= base_url() ?>/assets/images/icons-new/suggest.png"></div>
                                <p class="mt-2">Suggest Order Quantity</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-lg-3 mb-2 mobile2022" style="padding-left: 0px; padding-right: 0px;">
                        <div class="cardori visitor">
                            <div class="card-body d-flex justify-content-center align-items-center flex-column" onmousemove="cardHover('visitor')">
                                <!--                                <i class='bx bx-package bx-md'></i>-->
                                <div class="icon"><img class="img-icon" src="<?= base_url() ?>/assets/images/icons-new/visitor.png"></div>
                                <p class="mt-2">Visitor Counting</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-lg-3 mb-2 mobile2022" style="padding-left: 0px; padding-right: 0px;">
                        <div class="cardori visitor_map">
                            <div class="card-body d-flex justify-content-center align-items-center flex-column" onmousemove="cardHover('visitor_map')">
                                <!--                                <i class='bx bx-package bx-md'></i>-->
                                <div class="icon"><img class="img-icon" src="<?= base_url() ?>/assets/images/icons-new/visitor_map.png"></div>
                                <p class="mt-2">Visitor Heatmap</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-lg-3 mb-2 mobile2022" style="padding-left: 0px; padding-right: 0px;">
                        <div class="cardori productknowlage">
                            <div class="card-body d-flex justify-content-center align-items-center flex-column" onmousemove="cardHover('productknowlage')">
                                <!--                                <i class='bx bx-package bx-md'></i>-->
                                <div class="icon"><img class="img-icon" src="<?= base_url() ?>/assets/images/icons-new/productknowlage.png"></div>
                                <p class="mt-2">Product Knowledge</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-lg-3 mb-2 mobile2022" style="padding-left: 0px; padding-right: 0px;">
                        <div class="cardori elerning">
                            <div class="card-body d-flex justify-content-center align-items-center flex-column" onmousemove="cardHover('elerning')">
                                <!--                                <i class='bx bx-package bx-md'></i>-->
                                <div class="icon"><img class="img-icon" src="<?= base_url() ?>/assets/images/icons-new/elerning.png"></div>
                                <p class="mt-2">E-Learning / Training</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-lg-3 mb-2 mobile2022" style="padding-left: 0px; padding-right: 0px;">
                        <div class="cardori facerecognation">
                            <div class="card-body d-flex justify-content-center align-items-center flex-column" onmousemove="cardHover('facerecognation')">
                                <!--                                <i class='bx bx-package bx-md'></i>-->
                                <div class="icon"><img class="img-icon" src="<?= base_url() ?>/assets/images/icons-new/facerecognation.png"></div>
                                <p class="mt-2">Face Recognition</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-lg-3 mb-2 mobile2022" style="padding-left: 0px; padding-right: 0px;">
                        <div class="cardori newotlet">
                            <div class="card-body d-flex justify-content-center align-items-center flex-column" onmousemove="cardHover('newotlet')">
                                <!--                                <i class='bx bx-package bx-md'></i>-->
                                <div class="icon"><img class="img-icon" src="<?= base_url() ?>/assets/images/icons-new/newotlet.png"></div>
                                <p class="mt-2">New Outlet Opening</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-lg-3 mb-2 mobile2022" style="padding-left: 0px; padding-right: 0px;">
                        <div class="cardori newproduct">
                            <div class="card-body d-flex justify-content-center align-items-center flex-column" onmousemove="cardHover('newproduct')">
                                <!--                                <i class='bx bx-package bx-md'></i>-->
                                <div class="icon"><img class="img-icon" src="<?= base_url() ?>/assets/images/icons-new/newproduct.png"></div>
                                <p class="mt-2">New Product Development</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-lg-3 mb-2 mobile2022" style="padding-left: 0px; padding-right: 0px;">
                        <div class="cardori visitortrafic">
                            <div class="card-body d-flex justify-content-center align-items-center flex-column" onmousemove="cardHover('visitortrafic')">
                                <!--                                <i class='bx bx-package bx-md'></i>-->
                                <div class="icon"><img class="img-icon" src="<?= base_url() ?>/assets/images/icons-new/visitortrafic.png"></div>
                                <p class="mt-2">Visitor Traffic Monitoring</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-lg-3 mb-2 mobile2022" style="padding-left: 0px; padding-right: 0px;">
                        <div class="cardori demografi">
                            <div class="card-body d-flex justify-content-center align-items-center flex-column" onmousemove="cardHover('demografi')">
                                <!--                                <i class='bx bx-package bx-md'></i>-->
                                <div class="icon"><img class="img-icon" src="<?= base_url() ?>/assets/images/icons-new/demografi.png"></div>
                                <p class="mt-2">Visitor Demography</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-lg-3 mb-2 mobile2022" style="padding-left: 0px; padding-right: 0px;">
                        <div class="cardori crm">
                            <div class="card-body d-flex justify-content-center align-items-center flex-column" onmousemove="cardHover('crm')">
                                <!--                                <i class='bx bx-package bx-md'></i>-->
                                <div class="icon"><img class="img-icon" src="<?= base_url() ?>/assets/images/icons-new/crm.png"></div>
                                <p class="mt-2">Customer Relationship Management (CRM)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile2022">
                <div id="moreDetailsBtnMobile" class="button-detail" style="margin-top: 5em;">
                    <button id="button-more-detail-mobile">More Details</button>
                </div>
                <div id="hideDetailsBtnMobile" class="button-detail" style="margin-top: 6.5em;">
                    <button id="button-more-detail-mobile">Hide Details</button>
                </div>
            </div>
        </div>


        <!--============ Contact Us Area Start =================-->
        <div id="section-contactus" class="contact-us-area section-space--ptb_100" style="padding-top: 3%; padding-bottom: 3%;">
            <div class="container">
                <div class="row pr-0 mr-0">
                    <div class="col-lg-6" style="padding-top: 1%;">
                        <div class="contact-form-wrap">
                            <h3 class="mb-30 text-color-purple">Contact Us</h3>
                            <form class="contact-form" id="contact-form-2" action="<?php echo base_url(); ?>/index.php/home/sendemail" method="post">
                                <div class="contact-form__two">
                                    <div class="contact-input">
                                        <div class="contact-inner">
                                            <label>NAME *</label>
                                            <input name="con_name" type="text" placeholder="Enter Your Name" required>
                                        </div>
                                        <div class="contact-inner">
                                            <label>EMAIL *</label>
                                            <input name="con_email" type="email" placeholder="Enter Your Email" required>
                                        </div>
                                    </div>
                                    <div class="contact-input">
                                        <div class="contact-inner">
                                            <label>COMPANY *</label>
                                            <input name="con_company" type="text" placeholder="Enter Your Company Name" required>
                                        </div>
                                        <div class="contact-inner">
                                            <label>PHONE NUMBER *</label>
                                            <input name="con_phone" type="text" placeholder="Enter Your Phone Number" required>
                                        </div>
                                    </div>
                                    <div class="contact-inner contact-message">
                                        <label>DESCRIBE WHAT YOU NEED</label>
                                        <textarea name="con_message" placeholder="Please Describe What You Need and Enter here ..." required></textarea>
                                    </div>
                                    <div class="comment-submit-btn">
                                        <button class="ht-btn ht-btn-md bg-purple" type="submit">Submit</button>
                                        <p class="form-messege-2"></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-5 overflow-hidden">
                        <div class="mapouter">
                            <div class="gmap_canvas"><iframe width="600" height="600" id="gmap_canvas" src="https://maps.google.com/maps?q=PT%20RETAILMATIX%20TEKNOLOGI%20INDONESIA,%20Jl.%20Kemang%20Timur%20No.%2024%20Jakarta%20Selatan,%2012730%20Indonesia&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br>
                                <style>
                                    .mapouter {
                                        position: relative;
                                        text-align: right;
                                        height: 600px;
                                        width: 600px;
                                    }
                                </style><a href="https://www.embedgooglemap.net">embedded maps</a>
                                <style>
                                    .gmap_canvas {
                                        overflow: hidden;
                                        background: none !important;
                                        height: 600px;
                                        width: 600px;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============ Contact Us Area End =================-->

        <!--=========== Get In Touch ==========-->
        <div class="fun-fact-wrapper bg-gray section-space--ptb_120" style="padding-top: 3%; padding-bottom: 3%;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-4" style="transform: scale(.6);margin-left:-60px">
                        <img class="" src="<?php echo base_url(); ?>/assets/images/rtix/landing/get-in-touch-pict.png" height="400em" alt="">
                    </div>
                    <div class="col-lg-6 bottom-line" style="padding-top: 4%;">
                        <div class="modern-number-01">
                            <h3 class="heading text-center text-color-purple">All Report Needs by Filter Chart
                                at
                                your Fingertips</h3>
                            <p class="text-muted mt-3 text-center">Reporting results that meet user's needs.
                                User
                                access levels can be adjusted to meet their specific requirements.</p>
                            <center>
                                <div class="contact-us-button mt-20">
                                    <a href="#section-contactus" class="btn btn--secondary text-color-white link-contactus" style="background-color: #4C12A1;">GET IN TOUCH</a>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!--=========== Get In Touch End ==========-->

    </div>

    <!--====================  footer area ====================-->
    <?php echo view("_partials/footer"); ?>
    <!--====================  End of footer area  ====================-->

</div>
<!--====================  scroll top ====================-->
<a href="#" class="scroll-top" id="scroll-top">
    <i class="arrow-top fal fa-long-arrow-up"></i>
    <i class="arrow-bottom fal fa-long-arrow-up"></i>
</a>
<!--====================  End of scroll top  ====================-->

<!--====================  mobile menu overlay ====================-->
<div class="mobile-menu-overlay" id="mobile-menu-overlay">
    <div class="mobile-menu-overlay__inner  bg-purple">
        <div class="mobile-menu-overlay__header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8">
                        <!-- logo -->
                        <div class="logo">
                            <a href="<?php echo base_url(); ?>">
                                <img src="<?php echo base_url(); ?>/assets/images/logo/retailmatix-dark.png" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-4">
                        <!-- mobile menu content -->
                        <div class="mobile-menu-content text-right">
                            <span class="mobile-navigation-close-icon" id="mobile-menu-close-trigger"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-menu-overlay__body">
            <nav class="offcanvas-navigation">
                <ul>
                    <li class="has-children">
                        <a href="#">Contact Us</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<!--====================  End of mobile menu overlay  ====================-->

<!--====================  search overlay ====================-->
<div class="search-overlay" id="search-overlay">
    <div class="search-overlay__header">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6 ml-auto col-4">
                    <!-- search content -->
                    <div class="search-content text-right">
                        <span class="mobile-navigation-close-icon" id="search-close-trigger"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="search-overlay__inner">
        <div class="search-overlay__body">
            <div class="search-overlay__form">
                <form action="#">
                    <input type="text" placeholder="Search">
                </form>
            </div>
        </div>
    </div>
</div>
<!--====================  End of search overlay  ====================-->

<script>
    const buttonMoreDetail = document.getElementById('button-more-detail');
    const buttonMoreDetailMobile = document.getElementById('button-more-detail-mobile');
    const moreDetailsBtn = document.getElementById('moreDetailsBtn');
    const moreDetailsBtnMobile = document.getElementById('moreDetailsBtnMobile');
    const hideDetailsBtn = document.getElementById('hideDetailsBtn');
    const hideDetailsBtnMobile = document.getElementById('hideDetailsBtnMobile');
    const container = document.querySelector('.container-meluas');
    const containerMobile = document.querySelector('.container-meluas-mobile');
    const containerExpand = document.querySelector('.expand-wrap');

    buttonMoreDetail.addEventListener('click', () => {
        console.log('jalan web');
        container.classList.add('container-expand');
        moreDetailsBtn.classList.add('moreDetailsBtn-active');
        hideDetailsBtn.classList.add('hideDetailsBtn-active');
        containerExpand.classList.add('expand-wrap-active');
    });

    buttonMoreDetailMobile.addEventListener('click', () => {
        console.log('jalan mobile');
        container.classList.add('container-expand');
        moreDetailsBtnMobile.classList.add('moreDetailsBtn-active');
        hideDetailsBtnMobile.classList.add('hideDetailsBtn-active');
        containerExpand.classList.add('expand-wrap-active');
    });

    hideDetailsBtn.addEventListener('click', () => {
        container.classList.remove('container-expand');
        moreDetailsBtn.classList.remove('moreDetailsBtn-active');
        hideDetailsBtn.classList.remove('hideDetailsBtn-active');
        containerExpand.classList.remove('expand-wrap-active');
    });

    hideDetailsBtnMobile.addEventListener('click', () => {
        container.classList.remove('container-expand');
        moreDetailsBtnMobile.classList.remove('moreDetailsBtn-active');
        hideDetailsBtnMobile.classList.remove('hideDetailsBtn-active');
        containerExpand.classList.remove('expand-wrap-active');
    });

    moreDetailsBtn.style.position = 'relative';
    // moreDetailsBtn.style.top = '-150px';
    moreDetailsBtn.style.display = 'flex';
    moreDetailsBtnMobile.style.position = 'relative';
    // moreDetailsBtnMobile.style.top = '-150px';
    moreDetailsBtnMobile.style.display = 'flex'
    container.style.display = 'flex';
    container.style.flexWrap = 'wrap';
    // container.style.justifyContent = 'space-between';
    moreDetailsBtn.style.justifyContent = 'center';
    moreDetailsBtn.style.alignItems = 'center';
    moreDetailsBtn.style.cursor = 'pointer';
    moreDetailsBtnMobile.style.justifyContent = 'center';
    moreDetailsBtnMobile.style.alignItems = 'center';
    moreDetailsBtnMobile.style.cursor = 'pointer'

    function cardHover(id) {
        // ketika mouse active
        $('.' + id).addClass("cardori_active");
        var image = '<img class="img-icon" src="<?= base_url() ?>/assets/images/icons-new/' + id + '_active.png">';
        $('.' + id).find('.icon').html(image);
        $('.' + id).find('.icon').addClass("icon_active");

        //ketika mouse out
        $("." + id).mouseout(function() {
            $('.' + id).removeClass("cardori_active");
            $('.' + id).find('.icon').removeClass("icon_active");
            var image = '<img class="img-icon" src="<?= base_url() ?>/assets/images/icons-new/' + id + '.png">';
            $('.' + id).find('.icon').html(image);
        });
    }
</script>


<!-- MAIN SCRIPT -->
<?php echo view("_partials/script"); ?>
<?php echo view("home/script"); ?>
</body>

</html>