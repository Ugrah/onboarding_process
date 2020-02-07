<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7 "> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>

    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>CheckInfo</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="images/favicon_infocheck.png">

    <!-- FONTS -->
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,400italic,700'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Patua+One:100,300,400,400italic,700'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic,900'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:100,300,400,400italic,500,700,700italic'>

    <!-- CSS -->
    <link rel='stylesheet' href='css/global.css'>
    
    <link rel='stylesheet' href='content/hosting/css/structure.css'>
    <link rel='stylesheet' href='content/hosting/css/hosting.css'>
    <link rel='stylesheet' href='content/hosting/css/custom.css'>

    <link rel='stylesheet' href='css/structure_cic.css'>
    <link rel='stylesheet' href='css/employment.css'>
    <link rel='stylesheet' href='css/custom_cic.css'>
    <link rel='stylesheet' href='css/main.css'>

    <!-- Revolution Slider -->
    <link rel="stylesheet" href="plugins/rs-plugin/css/settings.css">


    <link rel="stylesheet" href="OnBoarding/css/icofont.css">
    <link rel="stylesheet" href="OnBoarding/css/swiper.min.css">
    <link rel="stylesheet" href="OnBoarding/css/style1.css">
    
    <style>
    .quick_fact .title {
        font-size: 14px;
    }
    .feature_list ul li {
        width: 33%;
    }
    .hidden {
        display: none;
    }

    .cic-justify {
        text-align: justify;
    }

    .st0{fill:#C7373C;}
    .st1{fill:#CDCDCD;}
    .st2{fill:#CDCDCD;}
    .st3{fill:#CDCDCD;}
    .st4{fill:#CDCDCD;}
    .st5{fill:#CDCDCD;}
    .st6{fill:#CDCDCD;}
    .st7{fill:#CDCDCD;}
    .st8{fill:#CDCDCD;}
    .st9{fill:#CDCDCD;}
    .st10{fill:#CDCDCD;}
    .st11{fill:#CDCDCD;}

    .sti{fill:#C7373C;}
    .stn{fill:#C7373C;}
    .stf{fill:#C7373C;}
    .sto{fill:#C7373C;}




    html{
    margin :0;
    padding :0;
    }

    .wrapper{
    position: absolute;
    top: 45%;
    left: 50%;
    transform: translate(-25%, -25%);
    
    width: 100%;
    }

    path.st0 {
    stroke: #C7373C;
    fill: #C7373C;
    stroke-dasharray: 1800;
    animation : animate 1.2s cubic-bezier(.25,.1,.25,1)
    }

    path.st10 {
    stroke: #CDCDCD;
    fill: #CDCDCD;
    stroke-dasharray: 1800;
    animation : animate 0.2s cubic-bezier(0,0.23,1,.1),couleur 0.2s;
    }

    path.st9 {
    stroke: #CDCDCD;;
    fill: #CDCDCD;;
    stroke-dasharray: 1800;
    animation : animate 0.3s cubic-bezier(0,0.23,1,.1),couleur 0.3s;
    }

    path.st8 {
    stroke: #CDCDCD;;
    fill: #CDCDCD;;
    stroke-dasharray: 1800;
    animation : animate 0.4s cubic-bezier(0,0.23,1,.1),couleur 0.4s;
    }

    path.st7{
    stroke: #CDCDCD;;
    fill: #CDCDCD;;
    stroke-dasharray: 1800;
    animation : animate 0.5s cubic-bezier(0,0.23,1,.1),couleur 0.5s; 
    }
    path.st6{
    stroke: #CDCDCD;;
    fill: #CDCDCD;;
    stroke-dasharray: 1800;
    animation : animate 0.6s cubic-bezier(0,0.23,1,.1),couleur 0.6s; 
    }
    path.st5{
    stroke: #CDCDCD;;
    fill: #CDCDCD;;
    stroke-dasharray: 1800;
    animation : animate 0.7s cubic-bezier(0,0.23,1,.1),couleur 0.7s; 
    }
    path.st4{
    stroke: #CDCDCD;;
    fill: #CDCDCD;;
    stroke-dasharray: 1800;
    animation : animate 0.8s cubic-bezier(0,0.23,1,.1),couleur 0.8s; 
    }
    path.st3{
    stroke: #CDCDCD;;
    fill: #CDCDCD;;
    stroke-dasharray: 1800;
    animation : animate 0.9s cubic-bezier(0,0.23,1,.1),couleur 0.9s; 
    }
    
    
    path.st1{
    stroke: #CDCDCD;;
    fill: #CDCDCD;;
    stroke-dasharray: 1800;
    animation : animate 1s cubic-bezier(0,0.23,1,.1),couleur 1s;  
    }
    
    path.st11{
    stroke: #C7373C;
    fill: #C7373C;
    stroke-dasharray: 1800;
    animation : animate 1.1s cubic-bezier(0,0.23,1,.1),couleur 1.1s; 
    }
    path.st2{
    stroke: #CDCDCD;;
    fill: #CDCDCD;;
    stroke-dasharray: 1800;
    animation : animate 1.2s cubic-bezier(0,0.23,1,.1),couleur 1.2s; 
    }

    

    @keyframes couleur { 
    100%{ 
        fill: #C7373C;
    }
    }

    @keyframes animate {
    0% {
        opacity : 0;
        fill : none;
        stroke-dashoffset: 3000;
    }


    30% {
        opacity : 0;
        fill : none;
        stroke-dashoffset: 2100;
        
    }
    
    60% {
        stroke-dashoffset: 1200;
    }
    100% {
        fill : rgba(255,255,255,0);
        stroke-dashoffset: 0;


    }
    }


    path.stc1{
        stroke: black;;
        fill: black;
        stroke-dasharray: 2100;
        animation : animate1 1.4s cubic-bezier(0,0.23,1,.1); 
    }

    path.sth{
        stroke: black;;
        fill: black;
        stroke-dasharray: 2100;
        animation : animate1 1.6s cubic-bezier(0,0.23,1,.1); 
    }

    path.ste{
        stroke: black;;
        fill: black;
        stroke-dasharray: 2100;
        animation : animate1 1.8s cubic-bezier(0,0.23,1,.1); 
    }

    path.stc2{
        stroke: black;;
        fill: black;
        stroke-dasharray: 2100;
        animation : animate1 2s cubic-bezier(0,0.23,1,.1); 
    }

    path.stk{
        stroke: black;;
        fill: black;
        stroke-dasharray: 2100;
        animation : animate1 2.2s cubic-bezier(0,0.23,1,.1); 
    }

    polygon.sti{
        stroke: #C7373C;
        fill: #C7373C;
        stroke-dasharray: 2100;
        animation : animate1 2.4s cubic-bezier(0,0.23,1,.1); 
    }
    polygon.stn{
        stroke: #C7373C;
        fill: #C7373C;
        stroke-dasharray: 2100;
        animation : animate1 2.6s cubic-bezier(0,0.23,1,.1); 
    }
    polygon.stf{
        stroke: #C7373C;
        fill: #C7373C;
        stroke-dasharray: 2100;
        animation : animate1 2.8s cubic-bezier(0,0.23,1,.1); 
    }
    path.sto{
        stroke: #C7373C;
        fill: #C7373C;
        stroke-dasharray: 2100;
        animation : animate1 3s cubic-bezier(0,0.23,1,.1); 
    }

    @keyframes animate1 {
        0% {
        opacity : 0;
        fill : none;
        stroke-dashoffset: 3000;
        }
    
        100% {
        fill : rgba(255,255,255,0);
        stroke-dashoffset: 0;
    
    
        }
    }

    </style>

</head>

<body class="color-custom style-default button-default layout-full-width if-zoom if-border-hide no-content-padding header-classic minimalist-header-no sticky-header sticky-tb-color ab-hide subheader-both-center menu-link-color menuo-no-borders menuo-right footer-copy-center mobile-tb-center mobile-side-slide mobile-mini-mr-ll tablet-sticky mobile-header-mini mobile-sticky be-reg-2075 home page template-slider layout-full-width header-classic sticky-header sticky-white subheader-title-left no-content-padding">
    <div id="Wrapper">
        <!-- Header Wrapper -->
        <div id="Header_wrapper" class="bg-parallax" data-stellar-background-ratio="0.5">
            <!-- Header -->
            <header id="Header">
                <div class="header_placeholder"></div>
                <div id="Top_bar">
                    <div class="container">
                        <div class="column one">
                            <div class="top_bar_left clearfix">
                                <?php include('includes/logo.php');?>
                                <?php include('includes/menu.php'); ?>
                            </div>
                            <div class="top_bar_right">
                                <?php include('includes/espace_client.php');?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Revolution slider area-->
                <div class="mfn-main-slider">
                    <div id="rev_slider_1_2_wrapper" class="rev_slider_wrapper fullwidthbanner-container sections_style_1">
                        <div id="rev_slider_1_2" class="rev_slider fullwidthabanner tp-overflow-hidden" data-version="5.0.4.1">
                            <ul>
                                <li data-index="rs-1" data-transition="fade" data-slotamount="7" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="images/sliders/slider1.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-description="">
                                    <img src="images/sliders/slider1.jpg" alt="" width="1920" height="662" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                    <div class="tp-caption tp-resizeme" id="slide-1-layer-1" data-x="right" data-hoffset="60" data-y="bottom" data-voffset="-10" data-width="auto" data-height="auto" data-transform_idle="" data-transform_in="x:right;s:1000;e:Power3.easeInOut;" data-transform_out="auto:auto;s:300;" data-start="500" data-responsive_offset="on" style="z-index: 5;">

                                    <img src="content/hosting/images/home_hosting_slide_1_6.png" alt="" width="586" height="614" style="display: none;" data-no-retina >

                                    </div>
                                    <div class="tp-caption tp-resizeme" id="slide-1-layer-2" data-x="right" data-hoffset="442" data-y="center" data-voffset="-157" data-width="auto" data-height="auto" data-transform_idle="" data-transform_in="y:-50px;opacity:0.5;s:700;e:Power3.easeInOut;" data-transform_out="auto:auto;s:300;" data-start="1400" data-responsive_offset="on" style="z-index: 6;">

                                    <img src="content/hosting/images/home_hosting_slide_1_7.png" alt="" width="292" height="253" style="display: none;" data-no-retina>

                                    </div>
                                    <div class="tp-caption mfnrs_hosting_large_white tp-resizeme" id="slide-1-layer-3" data-x="30" data-y="center" data-voffset="-160" data-width="auto" data-height="auto" data-transform_idle="" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; min-width: auto; min-height: auto; white-space: nowrap; max-width: auto; max-height: auto; font-size: 45px; line-height: 35px; font-weight: 400; color: rgba(255, 255, 255, 1.00);border-color:rgba(255, 255, 255, 1.00); text-shadow: 2px 2px 4px #000000; color: #fff; margin-top: 250px;">
                                        <p><img class="logo-main scale-with-grid" src="images/logo/logo_1.png"data-height="46" alt="employment"></p> 
                                        <b>Le service de vérification</b><br><br>
                                        <b>de la régularité des chèques</b>
                                        
                                    </div>
                                    <div class="tp-caption tp-resizeme" id="slide-1-layer-11" data-x="right" data-hoffset="0" data-y="bottom" data-voffset="94" data-width="auto" data-height="auto" data-transform_idle="" data-transform_in="x:{-250,250};y:{-150,150};rX:{-90,90};rY:{-90,90};rZ:{-360,360};sX:0;sY:0;opacity:0.5;s:300;e:Power3.easeInOut;" data-transform_out="auto:auto;s:300;" data-start="4200" data-responsive_offset="on" style="z-index: 15;">
                                    <img src="content/hosting/images/home_hosting_slide_1_4.png" alt="" width="144" height="144"  style="display: none;" data-no-retina>

                                    </div>
                                    <div class="tp-caption tp-resizeme" id="slide-1-layer-12" data-x="right" data-hoffset="129" data-y="bottom" data-voffset="37" data-width="auto" data-height="auto" data-transform_idle="" data-transform_in="opacity:0.5;s:800;e:Power3.easeInOut;" data-transform_out="auto:auto;s:300;" data-start="4400" data-responsive_offset="on" style="z-index: 16;">
                                    <img src="content/hosting/images/home_hosting_slide_1_5.png" alt="" width="148" height="61" style="display: none;" data-no-retina>
                                    </div>
                                </li>

                                <li data-index="rs-2" data-transition="fade" data-slotamount="7" data-easein="default" data-easeout="default" data-masterspeed="300"             data-thumb="images/sliders/slider2.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-description="">
                                    <img src="images/sliders/slider2.jpg" alt="" width="1920" height="662" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                    <div class="tp-caption tp-resizeme" id="slide-1-layer-1" data-x="right" data-hoffset="60" data-y="bottom" data-voffset="-10" data-width="auto" data-height="auto" data-transform_idle="" data-transform_in="x:right;s:1000;e:Power3.easeInOut;" data-transform_out="auto:auto;s:300;" data-start="500" data-responsive_offset="on" style="z-index: 5;">

                                    <img src="content/hosting/images/home_hosting_slide_1_6.png" alt="" width="586" height="614" style="display: none;" data-no-retina >

                                    </div>
                                    <div class="tp-caption tp-resizeme" id="slide-1-layer-2" data-x="right" data-hoffset="442" data-y="center" data-voffset="-157" data-width="auto" data-height="auto" data-transform_idle="" data-transform_in="y:-50px;opacity:0.5;s:700;e:Power3.easeInOut;" data-transform_out="auto:auto;s:300;" data-start="1400" data-responsive_offset="on" style="z-index: 6;">

                                    <img src="content/hosting/images/home_hosting_slide_1_7.png" alt="" width="292" height="253" style="display: none;" data-no-retina>

                                    </div>
                                    <div class="tp-caption mfnrs_hosting_large_white tp-resizeme" id="slide-1-layer-3" data-x="30" data-y="center" data-voffset="-160" data-width="auto" data-height="auto" data-transform_idle="" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; min-width: auto; min-height: auto; white-space: nowrap; max-width: auto; max-height: auto; font-size: 45px; line-height: 35px; font-weight: 400; color: rgba(255, 255, 255, 1.00);border-color:rgba(255, 255, 255, 1.00); text-shadow: 2px 2px 4px #000000; color: #fff; margin-top: 250px;">
                                        <b>Accepter les chèques</b><br><br>
                                        <b>me permet d’augmenter</b><br><br>
                                        <b> mon chiffre d’affaires</b>
                                        
                                    </div>
                                    <div class="tp-caption tp-resizeme" id="slide-1-layer-11" data-x="right" data-hoffset="0" data-y="bottom" data-voffset="94" data-width="auto" data-height="auto" data-transform_idle="" data-transform_in="x:{-250,250};y:{-150,150};rX:{-90,90};rY:{-90,90};rZ:{-360,360};sX:0;sY:0;opacity:0.5;s:300;e:Power3.easeInOut;" data-transform_out="auto:auto;s:300;" data-start="4200" data-responsive_offset="on" style="z-index: 15;">
                                    <img src="content/hosting/images/home_hosting_slide_1_4.png" alt="" width="144" height="144"  style="display: none;" data-no-retina>

                                    </div>
                                    <div class="tp-caption tp-resizeme" id="slide-1-layer-12" data-x="right" data-hoffset="129" data-y="bottom" data-voffset="37" data-width="auto" data-height="auto" data-transform_idle="" data-transform_in="opacity:0.5;s:800;e:Power3.easeInOut;" data-transform_out="auto:auto;s:300;" data-start="4400" data-responsive_offset="on" style="z-index: 16;">
                                    <img src="content/hosting/images/home_hosting_slide_1_5.png" alt="" width="148" height="61" style="display: none;" data-no-retina>
                                    </div>
                                </li>

                                <li data-index="rs-3" data-transition="fade" data-slotamount="7" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="images/sliders/slider3.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-description="">
                                    <img src="images/sliders/slider3.jpg" alt="" width="1920" height="662" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                    <div class="tp-caption tp-resizeme" id="slide-1-layer-1" data-x="right" data-hoffset="60" data-y="bottom" data-voffset="-10" data-width="auto" data-height="auto" data-transform_idle="" data-transform_in="x:right;s:1000;e:Power3.easeInOut;" data-transform_out="auto:auto;s:300;" data-start="500" data-responsive_offset="on" style="z-index: 5;">

                                    <img src="content/hosting/images/home_hosting_slide_1_6.png" alt="" width="586" height="614" style="display: none;" data-no-retina >

                                    </div>
                                    <div class="tp-caption tp-resizeme" id="slide-1-layer-2" data-x="right" data-hoffset="442" data-y="center" data-voffset="-157" data-width="auto" data-height="auto" data-transform_idle="" data-transform_in="y:-50px;opacity:0.5;s:700;e:Power3.easeInOut;" data-transform_out="auto:auto;s:300;" data-start="1400" data-responsive_offset="on" style="z-index: 6;">

                                    <img src="content/hosting/images/home_hosting_slide_1_7.png" alt="" width="292" height="253" style="display: none;" data-no-retina>

                                    </div>
                                    <div class="tp-caption mfnrs_hosting_large_white tp-resizeme" id="slide-1-layer-3" data-x="30" data-y="center" data-voffset="-160" data-width="auto" data-height="auto" data-transform_idle="" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; min-width: auto; min-height: auto; white-space: nowrap; max-width: auto; max-height: auto; font-size: 45px; line-height: 35px; font-weight: 400; color: rgba(255, 255, 255, 1.00);border-color:rgba(255, 255, 255, 1.00); text-shadow: 2px 2px 4px #000000; color: #fff; margin-top: 250px;">
                                        <p style="display: flex; align-items: center;"> Avec <img src="images/retina-logo-cic.png" alt="" style="padding-left: 10px; max-width: 300px;"></p>
                                        <b> Je prends une décision fiable</b><br><br>
                                        <b>instantanément</b>
                                        
                                    </div>
                                    <div class="tp-caption tp-resizeme" id="slide-1-layer-11" data-x="right" data-hoffset="0" data-y="bottom" data-voffset="94" data-width="auto" data-height="auto" data-transform_idle="" data-transform_in="x:{-250,250};y:{-150,150};rX:{-90,90};rY:{-90,90};rZ:{-360,360};sX:0;sY:0;opacity:0.5;s:300;e:Power3.easeInOut;" data-transform_out="auto:auto;s:300;" data-start="4200" data-responsive_offset="on" style="z-index: 15;">
                                    <img src="content/hosting/images/home_hosting_slide_1_4.png" alt="" width="144" height="144"  style="display: none;" data-no-retina>

                                    </div>
                                    <div class="tp-caption tp-resizeme" id="slide-1-layer-12" data-x="right" data-hoffset="129" data-y="bottom" data-voffset="37" data-width="auto" data-height="auto" data-transform_idle="" data-transform_in="opacity:0.5;s:800;e:Power3.easeInOut;" data-transform_out="auto:auto;s:300;" data-start="4400" data-responsive_offset="on" style="z-index: 16;">
                                    <img src="content/hosting/images/home_hosting_slide_1_5.png" alt="" width="148" height="61" style="display: none;" data-no-retina>
                                    </div>
                                </li>

                                <!-- <li data-index="rs-2" data-transition="random" data-slotamount="7" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="images/sliders/slider2.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-description="">
                                    <img src="images/sliders/slider2.jpg" alt="" width="1920" height="662" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                    <div class="tp-caption tp-resizeme" id="slide-2-layer-1" data-x="right" data-hoffset="84" data-y="bottom" data-voffset="-70" data-width="auto" data-height="auto" data-transform_idle="" data-transform_in="y:bottom;s:1400;e:Power3.easeInOut;" data-transform_out="auto:auto;s:300;" data-start="500" data-responsive_offset="on" style="z-index: 5;">
                                    <img src="content/hosting/images/home_hosting_slide_2_1.png" alt="" width="596" height="654" data-no-retina style="display: none;">
                                    </div>

                                    <div class="tp-caption mfnrs_hosting_large_white tp-resizeme" id="slide-1-layer-3" data-x="30" data-y="center" data-voffset="-160" data-width="auto" data-height="auto" data-transform_idle="" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; min-width: auto; min-height: auto; white-space: nowrap; max-width: auto; max-height: auto; font-size: 45px; line-height: 35px; font-weight: 400; color: rgba(255, 255, 255, 1.00);border-color:rgba(255, 255, 255, 1.00); text-shadow: 2px 2px 4px #000000; color: #fff; margin-top: 250px;">
                                        <b>Accepter les chèques</b><br><br>
                                        <b>me permet d’augmenter</b><br><br>
                                        <b> mon chiffre d’affaires</b>

                                    </div>

                                    <div class="tp-caption tp-resizeme" id="slide-2-layer-4" data-x="30" data-y="center" data-voffset="130" data-width="auto" data-height="auto" data-transform_idle="" data-transform_in="opacity:0.5;s:1000;e:Power3.easeInOut;" data-transform_out="auto:auto;s:300;" data-start="2300" data-responsive_offset="on" style="z-index: 8;">
                                    <img src="content/hosting/images/home_hosting_slide_1_8.png" alt="" width="202" height="45" data-no-retina style="display: none;">
                                    </div>
                                </li>
                                <li data-index="rs-3" data-transition="random" data-slotamount="7" data-easein="default" data-easeout="default" data-masterspeed="300"            data-thumb="images/sliders/slider3.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-description="">
                                    <img src="images/sliders/slider3.jpg" alt="" width="1920" height="662" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                    <div class="tp-caption tp-resizeme" id="slide-2-layer-1" data-x="right" data-hoffset="84" data-y="bottom" data-voffset="-70" data-width="auto" data-height="auto" data-transform_idle="" data-transform_in="y:bottom;s:1400;e:Power3.easeInOut;" data-transform_out="auto:auto;s:300;" data-start="500" data-responsive_offset="on" style="z-index: 5;">
                                    
                                    <img src="images/sliders/slider3.jpg" alt="" width="596" height="654" style="display: none;" data-no-retina>
                                    </div>

                                    <div class="tp-caption mfnrs_hosting_large_white tp-resizeme" id="slide-1-layer-2" data-x="30" data-y="center" data-voffset="-160" data-width="auto" data-height="auto" data-transform_idle="" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; min-width: auto; min-height: auto; white-space: nowrap; max-width: auto; max-height: auto; font-size: 45px; line-height: 35px; font-weight: 400; color: rgba(255, 255, 255, 1.00);border-color:rgba(255, 255, 255, 1.00); text-shadow: 2px 2px 4px #000000; color: #fff; margin-top: 250px;">
                                        <p style="display: flex; align-items: center;"> Avec <img src="images/retina-logo-cic.png" alt="" style="padding-left: 10px; max-width: 300px;"></p>
                                        <b> Je prends une décision fiable</b><br><br>
                                        <b>instantanément</b>
                                    </div>

                                </li> -->

                            </ul>
                            <div class="tp-bannertimer tp-bottom flv_viz_hid"></div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        
        <div id="Content">
            <div class="content_wrapper clearfix">
                <div class="sections_group">
                    <div class="entry-content">

                        <div class="section mcb-section" style="padding-top:0px; padding-bottom:0px;">
                                <div class="section_wrapper mcb-section-inner">
                                    <div class="wrap mcb-wrap one valign-top clearfix" style="margin-top:20px">
                                        <div class="mcb-wrap-inner">
                                            <div class="column mcb-column one column_image ">
                                                <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                                    <div class="image_wrapper">
                                                        <!-- <img class="scale-with-grid" src="images/checkinfo_presentation.jpg" style="max-height: 60%;"> -->
                                                        <svg viewBox="0 0 1080 298">

                                                            <g>
                                                                <g>
                                                                    <path class="st0" d="M195.6,109.7v68c0,5.6,0.9,9.5,2.8,11.6c1.9,2.1,6.3,3.2,13.2,3.2v11.8h-72v-11.8h2.7
                                                                        c6.7,0,10.9-1.1,12.7-3.3c1.8-2.2,2.6-6,2.6-11.4v-33.1c0-5.5-0.9-9.3-2.7-11.5c-1.8-2.2-6-3.3-12.6-3.3h-2.7v-11.8L195.6,109.7z"
                                                                        />
                                                                    <path class="st11" d="M151.5,72.4c0-5.6,2.1-10.5,6.4-14.6c4.3-4.1,9.5-6.2,15.5-6.2c6.1,0,11.2,2,15.5,6.1c4.2,4,6.3,8.9,6.3,14.7
                                                                        c0,5.7-2.1,10.6-6.4,14.7c-4.2,4.1-9.4,6.1-15.4,6.1c-6.3,0-11.5-2.1-15.7-6.2C153.6,82.7,151.5,77.9,151.5,72.4"/>
                                                                </g>
                                                                <g>
                                                                    <path class="st1" d="M97.9,91.4c0-4.9,1.9-9.2,5.6-12.7c3.7-3.6,8.2-5.3,13.5-5.3c5.3,0,9.8,1.8,13.5,5.3
                                                                        c3.7,3.5,5.5,7.8,5.5,12.8c0,5-1.9,9.3-5.6,12.8c-3.7,3.5-8.2,5.3-13.4,5.3c-5.4,0-10-1.8-13.6-5.4
                                                                        C99.7,100.4,97.9,96.1,97.9,91.4"/>
                                                                    <path class="st2" d="M211.5,91.7c0-5.5,2.1-10.2,6.2-14.1c4.2-4,9.1-5.9,14.9-5.9c5.9,0,10.9,2,14.9,5.9c4.1,3.9,6.1,8.7,6.1,14.2
                                                                        c0,5.6-2.1,10.3-6.2,14.2c-4.1,3.9-9.1,5.9-14.9,5.9c-6,0-11.1-2-15.1-6C213.6,101.7,211.5,97,211.5,91.7"/>
                                                                    <path class="st3" d="M103.2,133.7c0,8.6-7.4,15.5-16.4,15.5c-9.1,0-16.4-6.9-16.4-15.5c0-8.6,7.4-15.5,16.4-15.5
                                                                        C95.9,118.2,103.2,125.2,103.2,133.7"/>
                                                                    <path class="st4" d="M99.2,179c0,7.3-6.2,13.2-13.9,13.2c-7.7,0-14-5.9-14-13.2c0-7.3,6.3-13.2,14-13.2
                                                                        C93,165.8,99.2,171.7,99.2,179"/>
                                                                    <path class="st5" d="M117.9,215.5c0,6.2-5.3,11.2-11.9,11.2c-6.6,0-11.9-5-11.9-11.2c0-6.2,5.3-11.2,11.9-11.2
                                                                        C112.5,204.3,117.9,209.3,117.9,215.5"/>
                                                                    <path class="st6" d="M148.9,238c0,5.3-4.5,9.5-10.1,9.5c-5.6,0-10.1-4.3-10.1-9.5c0-5.3,4.5-9.5,10.1-9.5
                                                                        C144.4,228.5,148.9,232.7,148.9,238"/>
                                                                    <path class="st7" d="M182.8,245.2c0,4.5-3.8,8.1-8.6,8.1c-4.7,0-8.6-3.6-8.6-8.1c0-4.5,3.8-8.1,8.6-8.1
                                                                        C179,237.1,182.8,240.7,182.8,245.2"/>
                                                                    <path class="st8" d="M214.4,239.6c0,3.8-3.3,6.9-7.3,6.9c-4,0-7.3-3.1-7.3-6.9c0-3.8,3.3-6.9,7.3-6.9
                                                                        C211.1,232.8,214.4,235.8,214.4,239.6"/>
                                                                    <path class="st9" d="M238.5,226.2c0,3.2-2.8,5.9-6.2,5.9c-3.4,0-6.2-2.6-6.2-5.9c0-3.2,2.8-5.8,6.2-5.8
                                                                        C235.8,220.4,238.5,223,238.5,226.2"/>
                                                                    <path class="st10" d="M255.9,208.1c0,2.7-2.3,5-5.3,5c-2.9,0-5.3-2.2-5.3-5c0-2.8,2.3-5,5.3-5C253.5,203.1,255.9,205.4,255.9,208.1
                                                                        "/>
                                                                </g>
                                                            </g>

                                                            <!-- Check -->

                                                            <g>
                                                                <g>
                                                                    <path class="stc1" d="M366.4,186.1c-6.6,5-15,7.8-24.5,7.8c-23.9,0-40.9-17.2-40.9-41.4c0-24.2,17.1-41.6,40.9-41.6c9.7,0,18.1,2.9,24.7,8
                                                                        c1.2-0.8,2.5-1.5,3.8-2.2c-7.5-6.3-17.3-9.9-28.5-9.9c-26.3,0-45.1,19.2-45.1,45.7c0,26.5,18.7,45.5,45.1,45.5
                                                                        c10.7,0,20.2-3.3,27.6-9.1C368.5,188,367.5,187.1,366.4,186.1z"/>
                                                                    <path class="ste" d="M536.3,192.7v4h-49v-88.6h47.6v4h-43.5v36.4h40.2v3.9h-40.2v40.3H536.3z"/>
                                                                    <path class="sth" d="M460.2,108.1v88.6h-4.1v-44.2h-56.7v44.2h-4.1v-88.6h4.1v40.4h56.7v-40.4H460.2z"/>

                                                                    <path class="stc2" d="M623.3,186.1c-6.6,5-15,7.8-24.5,7.8c-23.9,0-40.9-17.2-40.9-41.4c0-24.2,17.1-41.6,40.9-41.6c9.7,0,18.1,2.9,24.7,8
                                                                        c1.2-0.8,2.5-1.5,3.8-2.2c-7.5-6.3-17.3-9.9-28.5-9.9c-26.3,0-45.1,19.2-45.1,45.7c0,26.5,18.7,45.5,45.1,45.5
                                                                        c10.7,0,20.2-3.3,27.6-9.1C625.4,188,624.4,187.1,623.3,186.1z"/>

                                                                    <path class="stk" d="M656.3,196.7h-4.1v-88.6h4.1l-0.4,44.9l50.1-44.9h5.3l-50,44.4l53.3,44.2h-5.4l-53.3-43.9L656.3,196.7z"/>
                                                                </g>
                                                            </g>

                                                            <!-- Info -->
                                                            <g>
                                                                <polygon class="sti" points="741.9,197.3 719.9,197.3 719.9,108.8 741.9,108.7 	"/>
                                                                <polygon class="stn" points="838.2,197.2 820,197.2 781.9,147.9 781.9,197.3 760.1,197.3 760.1,108.5 777.9,108.5 816.9,157.6 
                                                                    816.9,108.5 838.2,108.5 	"/>
                                                                <polygon class="stf" points="911.8,166.3 878,166.3 878,197 856.7,197 856.7,108.4 914.7,108.4 914.7,127.5 877.9,127.6 
                                                                    877.9,146.4 911.8,146.4 	"/>
                                                                <path class="sto" d="M1017,152.3c0,8.3-1.7,15.9-5.2,22.9c-3.5,6.9-8.7,12.5-15.6,16.6c-6.9,4.1-15.3,6.2-25.2,6.2
                                                                    c-10,0-18.6-2.1-25.5-6.4c-7-4.2-12.2-9.8-15.5-16.8c-3.4-6.9-5.1-14.4-5.1-22.3c0-8,1.7-15.4,5-22.4c3.4-7,8.5-12.6,15.5-16.8
                                                                    c7-4.3,15.5-6.4,25.6-6.4c7.5,0,14.2,1.2,20.1,3.6c5.9,2.4,10.7,5.7,14.5,9.8c3.8,4.2,6.7,9,8.7,14.5
                                                                    C1016,140.4,1017,146.2,1017,152.3 M993.5,152.3c0-3.5-0.5-6.8-1.5-9.7c-1-2.9-2.4-5.5-4.4-7.7c-2-2.2-4.3-3.9-7.1-5.1
                                                                    c-2.8-1.2-6.1-1.8-9.7-1.8c-7,0-12.6,2.3-16.6,6.7c-4,4.5-6,10.4-6,17.6c0,7.3,2.1,13.1,6.1,17.6c4.1,4.5,9.6,6.7,16.6,6.7
                                                                    c4.8,0,8.9-1.1,12.3-3.1c3.4-2.1,6-5,7.7-8.6C992.6,161.3,993.5,157.1,993.5,152.3"/>
                                                            </g>

                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>

                        <div class="section mcb-section" style="padding-top:50px; padding-bottom:0px; background-color:#222327">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap two-fifth valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_column">
                                            <div class="column_attr clearfix" style=" padding:10px 0 0 15%; border-left: 1px solid #fff; margin-top: 80px; font-size: 17px;">
                                                <div class="presentation-1 cic-justify">
                                                    <span style="float: left; max-width: 40%; margin-right: 10px; padding-top: 1px"><img class="logo-main scale-with-grid cicLogo" src="images/logo/logo.png" data-retina="images/retina-logo-cic.png" data-height="46" alt="employment"></span>
                                                    <span class="" style="color: #fff;">
                                                    est délégataire de Bank Al-Maghrib pour la gestion du Service de Centralisation des Chèques Irréguliers.
                                                    </span>
                                                </div>
                                                <br>
                                                <!-- data-retina="images/retina-logo-cic.png" -->
                                                <div class="presentation-2 cic-justify">
                                                    <span style="float: left; max-width: 40%; margin-right: 10px; padding-top: 1px;"><img class="logo-main scale-with-grid cicLogo" src="images/logo/logo.png" data-retina="images/retina-logo-cic.png" data-height="46" alt="employment"></span>
                                                    <span class="" style="color: #fff;">
                                                    est une filiale du Groupe Creditinfo, créé en 1997, présent dans 48 pays et au Maroc depuis 2008. 
                                                    </span>
                                                </div>
                                                <br>
                                                <!-- <a href="#" class="button button_theme button_js action_button onboarding_trigger" target="_blank">
                                                    <span class="button_label">S'inscrire</span>
                                                </a> -->
                                                <!-- <div class="column one">
                                                    <h2 style="color: #fff;">Nos Services</h2>
                                                    <a href="verification.php" class="button button_theme button_js " target="_blank">
                                                        <span class="button_label">Vérification</span>
                                                    </a>

                                                    <a href="opposition.php" class="button button_theme button_js " target="_blank">
                                                        <span class="button_label">Opposition</span>
                                                    </a>
                                                </div> -->
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap three-fifth valign-top move-up clearfix" style="padding:0 0 0 5%; margin-top: 0px;" data-mobile="no-up">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_hover_box">
                                            <div class="hover_box">
                                            <!-- call_to_action  dessous-->
                                            <div class="">
                                                <div class="call_to_action_wrapper">
                                                    <div class="call_center">
                                                        <a href="https://www.youtube.com/watch?v=E6y2EGDWdmA" rel="prettyphoto"><img class="visible_photo scale-with-grid" src="images/video_main_a.jpg" style="max-height: 600px;"></a>
                                                    </div>
                                                </div>
                                            </div>
                                                <!-- <a href="#" rel="prettyphoto">
                                                    <div class="hover_box_wrapper"><img class="visible_photo scale-with-grid" src="images/video_main_a.jpg" />
                                                    <img class="hidden_photo scale-with-grid" src="images/video_main_a.jpg" />
                                                    </div>
                                                </a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="section mcb-section" style="padding-top:0px; padding-bottom:0px; background-color: #fff">
                         
                            <div class="section_wrapper mcb-section-inner">
                                
                                <div class="wrap mcb-wrap one valign-top clearfix" style="padding:50px 0 0 5%">
                                    <div class="mcb-wrap-inner">

                                        <div class="column one" style="margin-bottom: 15px;">
                                            <div class="fancy_heading">
                                                <h2 class="title"> <span style="color: #C40F11;">Services</span> <img src="images/retina-logo-cic.png" style="width: 25%; vertical-align: middle; padding-bottom: 10px; padding-left: 10px;"></h2>

                                            </div>
                                        </div>
                                        
                                        <div class="column mcb-column one column_column">
                                            <div class="column_attr clearfix align_center">
                                                
                                                <a class="button  button_right button_size_2 button_theme button_js kill_the_icon" href="?page=verification-de-cheque">
                                                    <span class="button_icon">
                                                        <i class="icon-right-circled" style="color: #fff"></i>
                                                    </span>
                                                    <span class="button_label" style="">Vérification de chèque</span></a> 

                                                <a class="button  button_right button_size_2 button_theme button_js kill_the_icon" href="?page=opposition-sur-cheque">
                                                    <span class="button_icon">
                                                        <i class="icon-right-circled" style="color: #fff"></i>
                                                    </span>
                                                    <span class="button_label" style="">Opposition sur chèque</span></a> 
                                                
                                            </div>
                                        </div>
                                                                      
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="section mcb-section" style="padding-top:0px; padding-bottom:0px; background-color:#f9faff">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_divider">
                                            <hr class="no_line" style="margin: 0 auto 200px">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section mcb-section" style="padding-top:0px; padding-bottom:0px; background-color:#303945">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one employment-shadow column-margin-20px valign-top clearfix" style="padding:60px 50px 40px; background-color:#fff; margin-top:-120px">
                                    <div class="mcb-wrap-inner">
                                    <div class="items_group clearfix">
                                        <!-- Page Title-->
                                        <!-- One full width row-->
                                        <div class="column one column_fancy_heading" style="margin-bottom: 15px;">
                                            <div class="fancy_heading fancy_heading_line">
                                                <h2 class="title">Avantages <img src="images/retina-logo-cic.png" style="width: 25%; vertical-align: middle; padding-bottom: 10px; padding-left: 10px;"></h2>

                                            </div>
                                        </div>
                                        <!-- One full width row-->
                                        <div class="column one column_feature_list">
                                            <div class="feature_list">
                                                <ul>
                                                    <li class=""> 
                                                        <!-- Animated area advantage -->
                                                        <div class="animate zoomIn cic-justify" data-anim-type="zoomIn">
                                                            <a href="#"><span class="icon"><i class="icon-thumbs-up"></i></span>
                                                                <p>
                                                                 <b> Vérification instantanée</b>
                                                                </p>
                                                                <span class="">
                                                                Vous hésitez à accepter un chèque ? <br> Vérifiez instantanément sa régularité <br> sur la plateforme Checkinfo.
                                                                </span> 
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="">
                                                        <!-- Animated area -->
                                                        <div class="animate zoomIn cic-justify" data-anim-type="zoomIn">
                                                            <a href="#"><span class="icon"><i class="icon-flash"></i></span>
                                                                <p>
                                                                 <b>Consultation multicanale</b>
                                                                </p>
                                                                <span class="">
                                                                Quand vous procédez à une vérification de chèque, vous recevez instantanément une réponse quant à sa régularité.
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="">
                                                        <!-- Animated area -->
                                                        <div class="animate zoomIn cic-justify" data-anim-type="zoomIn">
                                                            <a href="#"><span class="icon"><i class="icon-globe"></i></span>
                                                                <p>
                                                                   <b>Service disponible 24/7</b> 
                                                                </p>
                                                                <span class="">
                                                                Les services Checkinfo sont accessibles 24h/24, 7j/7. Connectez-vous où et quand vous le souhaitez.<br>&nbsp
                                                                
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </li><hr>

                                                    <!-- <li class="advantage">
                                                        <div class="animate zoomIn cic-justify" data-anim-type="zoomIn">
                                                            <a href="#"><span class="icon"><i class="icon-flag"></i></span>
                                                                <p>
                                                                Transparence des tarifs
                                                                </p>
                                                                <span class="hidden">
                                                                Tous nos forfaits sont communiqués sur notre site internet et vous ne payez rien de plus.
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="advantage">
                                                        <div class="animate zoomIn cic-justify" data-anim-type="zoomIn">
                                                            <a href="#"><span class="icon"><i class="icon-infinity"></i></span>
                                                                <p>
                                                                Consultation multicanale
                                                                </p>
                                                                <span class="hidden">
                                                                Vous pouvez procéder à une vérification de régularité d’un chèque via Web Service pour les Grands Comptes ou via notre site internet et application mobile pour les TPME et professionnels indépendants.
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="advantage">
                                                        <div class="animate zoomIn cic-justify" data-anim-type="zoomIn">
                                                            <a href="#"><span class="icon"><i class="icon-picture"></i></span>
                                                                <p>
                                                                Divers moyens de paiement
                                                                </p>
                                                                <span class="hidden">
                                                                Vous pouvez souscrire au service de vérification de chèque directement en ligne via notre plateforme ou à travers d’autres plateformes de paiement.
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </li> -->
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                       
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap one valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one">
                                            <hr class="no_line" style="margin: 0 auto 50px">
                                        </div>
                                        <div class="column mcb-column one column_column" style="margin-bottom: -9px; margin-top: -44px;">
                                          
                                            
                                            <div class="column one" style="text-align: center; color: #C40F11">
                                                <h2 style="color: #C40F11; font-size: 42px; line-height: 42px;" class="title">Chiffres clés</h2>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section mcb-section" style="" id="quickfacts">
                            <div class="section_wrapper clearfix">
                                <div class="items_group clearfix">
                                    <!-- One full width row-->
                                    <div class="column one column_column">
                                        <div class="column_attr ">
                                            <h5 class="flv_style_4"></h5>
                                        </div>
                                    </div>
                                    <!-- One Fourth (1/4) Column -->
                                    <div class="column one-fourth column_quick_fact">
                                        <!-- Counter area-->
                                        <div class="quick_fact animate-math">
                                            <div class="number" data-to="95">
                                                0 </div>
                                            <span class="title">Milliards de dirhams d’incidents de paiement non régularisés à ce jour</span>
                                            <hr class="hr_narrow" />
                                            <!-- <div class="desc">
                                            Création du Groupe en Islande
                                            </div> -->
                                        </div>
                                    </div>
                                    <!-- One Fourth (1/4) Column -->
                                    <div class="column one-fourth column_quick_fact">
                                        <!-- Counter area-->
                                        <div class="quick_fact animate-math">
                                            <div class="number" data-to="11.5">
                                                0 </div>
                                            <span class="title">Milliards d'incidents de paiement en 2018</span>
                                            <hr class="hr_narrow" />
                                            <!-- <div class="desc">
                                                Donec vestibulum justo a diam ultricies pel lentesque. Quisque mattis diam vel lac. 
                                            </div> -->
                                        </div>
                                    </div>
                                    <!-- One Fourth (1/4) Column -->
                                    <div class="column one-fourth column_quick_fact">
                                        <!-- Counter area-->
                                        <div class="quick_fact animate-math">
                                            <div class="number" data-to="670000">
                                                0 </div>
                                            <span class="title">Personnes physiques et morales interdites de chéquier</span>
                                            <hr class="hr_narrow" />
                                            <!-- <div class="desc">
                                                Donec vestibulum justo a diam ultricies pel lentesque. Quisque mattis diam vel lac. 
                                            </div> -->
                                        </div>
                                    </div>

                                    <!-- One Fourth (1/4) Column -->
                                    <div class="column one-fourth column_quick_fact">
                                        <!-- Counter area-->
                                        <div class="quick_fact animate-math">
                                            <div class="number" data-to="8">
                                                0 </div>
                                            <span class="title">Millions de compte répertoriés dans la base</span>
                                            <hr class="hr_narrow" />
                                            <!-- <div class="desc">
                                                Donec vestibulum justo a diam ultricies pel lentesque. Quisque mattis diam vel lac. 
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="section mcb-section" style="padding-top:0px; padding-bottom:0px;">
                            <div id="Subheader">
                                <div class="container">
                                    <div class="column one">
                                        <h2 class="title" style="color: #fff">NOS SERVICES</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="section_wrapper mcb-section-inner">
                                
                                <div class="wrap mcb-wrap one valign-top clearfix" style="padding:20px 0 0 5%">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_column">
                                            <div class="column_attr clearfix align_center">
                                                
                                                <a class="button  button_right button_size_2 button_theme button_js kill_the_icon" href="verification.php">
                                                    <span class="button_icon">
                                                        <i class="icon-right-circled" style="color: #fff"></i>
                                                    </span>
                                                    <span class="button_label" style="">Vérification de Chèque</span></a> 

                                                <a class="button  button_right button_size_2 button_theme button_js kill_the_icon" href="opposition.php">
                                                    <span class="button_icon">
                                                        <i class="icon-right-circled" style="color: #fff"></i>
                                                    </span>
                                                    <span class="button_label" style="">Opposition sur Chèque</span></a> 
                                                
                                            </div>
                                        </div>
                                                                      
                                    </div>
                                </div>
                            </div>
                        </div> -->

                    </div>
                </div>
            </div>
        </div>

        <?php include('includes/footer.php');?>
    </div>
    


    <!-- side menu -->
    
    <div class="body_overlay"></div>

    <!-- ici include onboarding old -->

    <!-- JS -->
    
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/mfn.menu.js"></script>
    <script src="js/jquery.plugins.js"></script>
    <script src="js/jquery.jplayer.min.js"></script>
    <script src="js/animations/animations.js"></script>
    <script src="js/translate3d.js"></script>
    <script src="js/scripts.js"></script>

    <script src="plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

    <script src="plugins/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>
    <script src="plugins/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="plugins/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="plugins/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="plugins/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="plugins/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="plugins/rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="plugins/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>

    <script src="js/scripts/index.js"></script>

    <style>
        .inline{
            display: inline-block;
        }
        .cicLogo{
            float: left;
        }
    </style>
    <!-- <script src="OnBoarding/js/swiper.min.js"></script>
    <script src="OnBoarding/js/script.js"></script> -->

    <script>
        var swiper = new Swiper('.c__slide', {
            loop: false,
            direction: 'vertical',
            pagination: {
                el: '.swiper-pagination',
                // type: 'fraction',
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            spaceBetween: 300,
            // effect: 'fade',
            lazy: true
        });
    </script>

    <script>
        var tpj = jQuery;
        tpj.noConflict();
        var revapi1;
        tpj(document).ready(function() {
            if (tpj("#rev_slider_1_2").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_1_2");
            } else {
                revapi1 = tpj("#rev_slider_1_2").show().revolution({
                    sliderType: "standard",
                    sliderLayout: "fullwidth",
                    dottedOverlay: "none",
                    delay: 300000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        onHoverStop: "on",
                        touch: {
                            touchenabled: "on",
                            swipe_threshold: 0.7,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        },
                        arrows: {
                            style: "hesperiden",
                            enable: true,
                            hide_onmobile: false,
                            hide_onleave: false,
                            tmp: '',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 20,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 20,
                                v_offset: 0
                            }
                        }
                    },
                    gridwidth: 1180,
                    gridheight: 699,
                    lazyType: "none",
                    shadow: 0,
                    spinner: "spinner3",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    disableProgressBar: "on",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    startWithSlide: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: "off",
                    }
                });
            }
        });
    </script>


</body>

</html>