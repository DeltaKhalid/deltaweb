@extends('frontend.master')

@section('home_content')

<section class="main-slider-three clearfix">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                "delay": 5000
                }}'>
                <div class="swiper-wrapper">
				    
										<div class="swiper-slide">
                        <div class="image-layer-three"
                            style="background-image: url(assets/images/backgrounds/slider_image_18.png);"></div>
                        <!-- /.image-layer -->

                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-three__content">
									<!-- Welcome Text Area 3 -->
                                        <h2 class="main-slider-three__title"><br></h2>
                                        <p class="main-slider-three__text"> <br> </p>
										<!-- Discover more Button -->
                                        <div class="main-slider-three__btn-box">
                                            <a href="about.html" class="thm-btn main-slider-three__btn"> <i class="fa fa-arrow-right"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="image-layer-three"
                            style="background-image: url(assets/images/backgrounds/slider_image_016.jpg);"></div>
                        <!-- /.image-layer -->

                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-three__content">
									<!-- Welcome Text Area 1 -->
                                        <h2 class="main-slider-three__title"><br> </h2>
                                        <p class="main-slider-three__text"> <br> </p>
                                        <div class="main-slider-three__btn-box">
                                            <a href="about.html" class="thm-btn main-slider-three__btn"> <i class="fa fa-arrow-right"></i> Discover more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="image-layer-three"
                            style="background-image: url(assets/images/backgrounds/slider_image_0017.jpg);"></div>
                        <!-- /.image-layer -->

                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-three__content">
									<!-- Welcome Text Area 2 -->
                                        <h2 class="main-slider-three__title"><br></h2>
                                        <p class="main-slider-three__text"> <br> </p>
                                        <div class="main-slider-three__btn-box">
                                            <a href="about.html" class="thm-btn main-slider-three__btn"> <i class="fa fa-arrow-right"></i> Discover more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="image-layer-three"
                            style="background-image: url(assets/images/backgrounds/slider_image_20.png);"></div>
                        <!-- /.image-layer -->

                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-three__content">
									<!-- Welcome Text Area 3 -->
                                        <h2 class="main-slider-three__title"><br></h2>
                                        <p class="main-slider-three__text"> <br> </p>
										<!-- Discover more Button -->
                                        <div class="main-slider-three__btn-box">
                                            <a href="about.html" class="thm-btn main-slider-three__btn"> <i class="fa fa-arrow-right"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					
					                    <div class="swiper-slide">
                        <div class="image-layer-three"
                            style="background-image: url(assets/images/backgrounds/slider_image_021.jpg);"></div>
                        <!-- /.image-layer -->

                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-three__content">
									<!-- Welcome Text Area 3 -->
                                        <h2 class="main-slider-three__title"><br></h2>
                                        <p class="main-slider-three__text"> <br> </p>
										<!-- Discover more Button -->
                                        <div class="main-slider-three__btn-box">
                                            <a href="about.html" class="thm-btn main-slider-three__btn"> <i class="fa fa-arrow-right"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					

                </div>
				
				<!-- Slider End -->

                
                <div class="swiper-pagination" id="main-slider-pagination"></div>
                
                <!-- If we need navigation buttons -->
                <div class="main-slider-three__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                        <i class="icon-left-arrow"></i>
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                        <i class="icon-right-arrow"></i>
                    </div>
                </div>

            </div>
        </section>
        <!-- ----------------------------------------------------------- Main Slider End ------------------------------------------------------------------ -->
		
		<!-- ----------------------------------------------------------- slider bottom underline ---------------------------------------------------------- -->
		<div class="site-header__slider_top_border">
			<!--<p class="site-footer__bottom-text">© All Copyright 2022 by <a href="#">Roofsie.com</a></p>-->
		</div>

        <!-- ----------------------------------------------------------- Feature Area ( Quality, professional work, Free Estimating ----------------------- -->

        <!--Feature One Start-->
        <section class="feature-one">
            <div class="container">
                <div class="feature-one__inner">
                    <div class="feature-one__dot">
                        <img src="assets/images/shapes/feature-one-dot.png" alt="">
                    </div>
                    <div class="row">
                        <!--Feature One Single Start-->
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                            <div class="feature-one__single">
                                <div class="feature-one__top">
                                    <div class="feature-one__icon">
                                        <span class="icon-roof-5"></span>
                                    </div>
                                    <div class="feature-one__title-box">
                                        <h3 class="feature-one__title"><a href="about.html">Quality <br> materials</a></h3>
                                    </div>
                                </div>
                                <div class="feature-one__single-inner">
                                    <p class="feature-one__text">Delta LPG always try to give you a good product for your safety.</p>
                                    <div class="feature-one__read-more">
                                        <a href="about.html">Read More <i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Feature One Single End-->
                        <!--Feature One Single Start-->
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                            <div class="feature-one__single">
                                <div class="feature-one__top">
                                    <div class="feature-one__icon">
                                        <span class="icon-construction-worker"></span>
                                    </div>
                                    <div class="feature-one__title-box">
                                        <h3 class="feature-one__title"><a href="team.html">Professional <br> workers</a></h3>
                                    </div>
                                </div>
                                <div class="feature-one__single-inner">
                                    <p class="feature-one__text">Delta LPG strive to deliver professional work of the highest quality.</p>
                                    <div class="feature-one__read-more">
                                        <a href="about.html">Read More <i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Feature One Single End-->
                        <!--Feature One Single Start-->
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                            <div class="feature-one__single">
                                <div class="feature-one__top">
                                    <div class="feature-one__icon">
                                        <span class="icon-online-registration"></span>
                                    </div>
                                    <div class="feature-one__title-box">
                                        <h3 class="feature-one__title"><a href="contact.html">Service <br> estimates</a></h3>
                                    </div>
                                </div>
                                <div class="feature-one__single-inner">
                                    <p class="feature-one__text">If you want to know the cost of your service, mail to us. </p>
                                    <div class="feature-one__read-more">
                                        <a href="contact.html">Read More <i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Feature One Single End-->
                    </div>
                </div>
            </div>
        </section>
        <!-- -------------------------------------------------------------------- Feature  End ----------------------------------------------------- -->

        <!-- -------------------------------------------------------------------- About Start ( Welcome to Delta LPG ) ----------------------------- -->
        <section class="about-one">
            <div class="about-one__shape float-bob-x">
                <img src="assets/images/shapes/about-one-shape.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-one__left">
                            <div class="about-one__img-box wow slideInLeft" data-wow-delay="100ms"
                            data-wow-duration="2500ms">
                                <div class="about-one__img">
                                    <img src="assets/images/resources/about-one-img-1.jpg" alt="">
                                </div>
                                <div class="about-one__line">
                                    <img src="assets/images/shapes/about-one-line.png" alt="">
                                </div>
                                <div class="about-one__satisfied">
                                    <div class="about-one__satisfied-inner">
                                        <div class="about-one__satisfied-shape">
                                            <img src="assets/images/shapes/about-one-satisfied-shape-1.png" alt="">
                                        </div>
                                        <div class="about-one__satisfied-content">
                                            <div class="about-one__satisfied-count-box">
                                                <h3 class="odometer" data-count="99">00</h3>
                                                <span class="about-one__satisfied-percent">%</span>
                                            </div>
                                            <p class="about-one__satisfied-text">Satisfied customers</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="about-one__big-text">Delta LPG</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-one__right">
                            <div class="section-title text-left">
                                <div class="section-sub-title-box">
                                    <p class="section-sub-title wow fadeInUp" data-wow-delay="100ms" >About Delta LPG</p>
                                    <div class="section-title-shape-1">
                                        <img src="assets/images/shapes/fire_icon.png" alt="">
                                    </div>
                                </div>
                                <h2 class="section-title__title wow fadeInUp" data-wow-delay="100ms" >Welcome To Delta LPG</h2>
                            </div>
                            <p class="about-one__text wow fadeInUp" data-wow-delay="100ms" >
							DELTA LPG LIMITED (DLPGL), is an emerging LPG company of Bangladesh, was incorporated in Bangladesh as a Private Limited Company 
							with limited liability in the year 2016.
							</p>
                            <ul class="list-unstyled about-one__points">
                                <li>
                                    <div class="icon-box">
                                        <div class="icon">
                                            <span class="icon-confirmation"></span>
                                        </div>
                                        <div class="text-box wow fadeInUp" data-wow-delay="100ms" >
                                            <p>Innovative work</p>
                                        </div>
                                    </div>
                                    <div class="text-box-two wow fadeInUp" data-wow-delay="100ms" >
                                        <p>
										Delta LPG always try to give you a good innovation service with advanced solutions to enhance efficiency, 
										safety, and sustainability in LPG operations.
										</p>
                                    </div>
                                </li>
								
                                <!--<li>
                                    <div class="icon-box">
                                        <div class="icon">
                                            <span class="icon-confirmation"></span>
                                        </div>
                                        <div class="text-box wow fadeInUp" data-wow-delay="100ms" >
                                            <p>Certified company</p>
                                        </div>
                                    </div>
                                    <div class="text-box-two wow fadeInUp" data-wow-delay="100ms" >
                                        <p>Lorem ipsum dolor sit ame sedme consectetur nod.</p>
                                    </div>
                                </li>-->
								
                            </ul>
                            <a href="about.html" class="thm-btn about-one__btn wow fadeInUp" data-wow-delay="100ms" > <i class="fa fa-arrow-right"></i> Discover more</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- --------------------------------------------------------------------------- About One End ------------------------------------------------------------ -->

        <!-- --------------------------------------------------------------------------- Services ( Now Our Product ) --------------------------------------------- -->
        <section class="services-one">
            <div class="services-one-shape-1 float-bob-x">
                <img src="assets/images/shapes/services-one-shape-1.png" alt="">
            </div>
            <div class="services-one-shape-2">
                <img src="assets/images/shapes/services-one-shape-2.png" alt="">
            </div>
            <div class="container">
                <div class="services-one__top">
                    <div class="row">
                        <div class="col-xl-7 col-lg-6">
                            <div class="services-one__top-left">
                                <div class="section-title text-left">
                                    <div class="section-sub-title-box">
                                        <p class="section-sub-title wow fadeInUp" data-wow-delay="100ms">Our Products</p>
                                        <div class="section-title-shape-1">
                                            <img src="assets/images/shapes/fire_icon.png" alt="">
                                        </div>
                                    </div>
                                    <h2 class="section-title__title_for_home wow fadeInUp" data-wow-delay="100ms">We’re providing quality LP Gas</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6">
                            <div class="services-one__top-right">
                                <p class="services-one__top-right-text"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="services-one__bottom">
                    <div class="row">
                        <!--Services One Single Start-->
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                            <div class="services-one__single">
                                <div class="services-one__img">
                                    <!--<img src="assets/images/services/services-1-1.jpg" alt="">-->
                                    <img src="assets/images/services/product_12_kg.jpg" alt="">
                                </div>
                                <div class="services-one__content">
                                    <div class="services-one__icon_design_2">
                                        <!--<span class="icon-roof"></span>-->
										<img src="assets/images/shapes/fire_icon_40.png" alt="">
                                    </div>
                                    <h3 class="services-one__title"><a href="single-play-roofing.html">12 kg LP Gas</a></h3>
                                    <!--<p class="services-one__text">Nulla commodo dolor massa, vel pellen esque nulla congue quis.</p>-->
                                    <div class="services-one__read-more">
                                        <a href="order_now_12kg.html">Read More <i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Services One Single End-->
                        <!--Services One Single Start-->
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                            <div class="services-one__single">
                                <div class="services-one__img">
                                    <!--<img src="assets/images/services/services-1-2.jpg" alt="">-->
                                    <img src="assets/images/services/product_35_kg.jpg" alt="">
                                </div>
                                <div class="services-one__content">
                                    <div class="services-one__icon_design_2">
                                        <!--<span class="icon-joist"></span>-->
										<img src="assets/images/shapes/fire_icon_40.png" alt="">
                                    </div>
                                    <h3 class="services-one__title"><a href="modified-roofing.html">33 kg LP Gas</a></h3>
                                    <!--<p class="services-one__text">Nulla commodo dolor massa, vel pellen esque nulla congue quis.</p>-->
                                    <div class="services-one__read-more">
                                        <a href="order_now_33kg.html">Read More <i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Services One Single End-->
                        <!--Services One Single Start-->
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                            <div class="services-one__single">
                                <div class="services-one__img">
                                    <img src="assets/images/services/product_45_kg.jpg" alt="">
                                </div>
                                <div class="services-one__content">
                                    <div class="services-one__icon_design_2">
                                        <!--<span class="icon-roof-1"></span>-->
										<img src="assets/images/shapes/fire_icon_40.png" alt="">
                                    </div>
                                    <h3 class="services-one__title"><a href="built-up-roofing.html">45 kg LP Gas</a></h3>
                                    <!--<p class="services-one__text">Nulla commodo dolor massa, vel pellen esque nulla congue quis.</p>-->
                                    <div class="services-one__read-more">
                                        <a href="order_now_45kg.html">Read More <i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Services One Single End-->
                    </div>
                </div>
            </div>
        </section>
        <!-- --------------------------------------------------------------------------- Services (Now Our Product) ------------------------------------------------- -->

        <!-- --------------------------------------------------------------------------- Why Choose One Start ------------------------------------------------------- -->
        <section class="why-choose-one">
            <div class="why-choose-one-bg" style="background-image: url(assets/images/backgrounds/why-choose-one-bg.jpg);"></div>
            <div class="why-choose-one-shape-3 float-bob-y-2"></div>
            <div class="why-choose-one-shape-4 float-bob-x">
                <img src="assets/images/shapes/why-choose-one-shape-4.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="why-choose-one__left">
                            <div class="section-title text-left">
                                <div class="section-sub-title-box">
                                    <p class="section-sub-title wow fadeInUp" data-wow-delay="100ms">Why choose us ?</p>
                                    <div class="section-title-shape-1">
                                        <img src="assets/images/shapes/fire_icon.png" alt="">
                                    </div>
                                </div>
                                <h2 class="section-title__title wow fadeInUp" data-wow-delay="100ms" >Few reasons to choose our company</h2>
                            </div>
                            <p class="why-choose-one__text wow fadeInUp" data-wow-delay="100ms" >Always we try to give you a best and quality service.</p>
                            <div class="why-choose-one__points-box">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms" >
                                        <div class="why-choose-one__points-single">
                                            <div class="why-choose-one__points-icon">
                                                <span class="icon-roof-2"></span>
                                            </div>
                                            <div class="why-choose-one__points-title-box wow fadeInUp" data-wow-delay="100ms" >
                                                <h4 class="why-choose-one__points-title">Quality <br> materials</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms" >
                                        <div class="why-choose-one__points-single">
                                            <div class="why-choose-one__points-icon">
                                                <span class="icon-shield"></span>
                                            </div>
                                            <div class="why-choose-one__points-title-box">
                                                <h4 class="why-choose-one__points-title">Fully <br> insured</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms" >
                                        <div class="why-choose-one__points-single">
                                            <div class="why-choose-one__points-icon">
                                                <span class="icon-mission"></span>
                                            </div>
                                            <div class="why-choose-one__points-title-box">
                                                <h4 class="why-choose-one__points-title">Mission <br> statement</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms" >
                                        <div class="why-choose-one__points-single">
                                            <div class="why-choose-one__points-icon">
                                                <span class="icon-construction-worker"></span>
                                            </div>
                                            <div class="why-choose-one__points-title-box">
                                                <h4 class="why-choose-one__points-title">Expert <br> engineers</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="why-choose-one__right">
                            <div class="why-choose-one__img-box">
                                <div class="why-choose-one__img wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                                    <img src="assets/images/resources/why-choose-one-img-1.png" alt="">
                                </div>
                                <div class="why-choose-one__shape-1"></div>
                                <div class="why-choose-one__shape-2"></div>
                                <div class="why-choose-one__author-sign wow fadeInUp" data-wow-delay="100ms" >
                                    <p>Delta LPG</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- --------------------------------------------------------------------------- Why Choose One End ------------------------------------------------------ -->

        <!-- --------------------------------------------------------------------------- Brand ( Our Client Logo ) ----------------------------------------------- -->
        <section class="brand-one">
            <div class="brand-one__inner">
                <div class="brand-one__shape-1 float-bob-y">
                    <img src="assets/images/shapes/brand-one-shape-1.png" alt="">
                </div>
                <div class="brand-one__shape-2 float-bob-y">
                    <img src="assets/images/shapes/brand-one-shape-2.png" alt="">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="brand-one__carousel thm-owl__carousel owl-theme owl-carousel" data-owl-options='{
                                "margin": 0,
                                "smartSpeed": 700,
                                "loop":true,
                                "autoplay": 6000,
                                "nav":false,
                                "dots":false,
                                "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                                "responsive":{
                                    "0":{
                                        "items":1
                                    },
                                    "600":{
                                        "items":2
                                    },
                                    "800":{
                                        "items":3
                                    },
                                    "1024":{
                                        "items": 4
                                    },
                                    "1200":{
                                        "items": 5
                                    }
                                }
                            }'>
                                <!--Brand One Single-->
                                <div class="brand-one__single">
                                    <div class="brand-one__img">
                                        <img src="assets/images/brand/brand-1-1.png" alt="">
                                    </div>
                                </div>
                                <!--Brand One Single-->
                                <div class="brand-one__single">
                                    <div class="brand-one__img">
                                        <img src="assets/images/brand/brand-1-2.png" alt="">
                                    </div>
                                </div>
                                <!--Brand One Single-->
                                <div class="brand-one__single">
                                    <div class="brand-one__img">
                                        <img src="assets/images/brand/brand-1-1.png" alt="">
                                    </div>
                                </div>
                                <!--Brand One Single-->
                                <div class="brand-one__single">
                                    <div class="brand-one__img">
                                        <img src="assets/images/brand/brand-1-2.png" alt="">
                                    </div>
                                </div>
                                <!--Brand One Single-->
                                <div class="brand-one__single">
                                    <div class="brand-one__img">
                                        <img src="assets/images/brand/brand-1-1.png" alt="">
                                    </div>
                                </div>
								<!--Brand One Single-->
                                <div class="brand-one__single">
                                    <div class="brand-one__img">
                                        <img src="assets/images/brand/brand-1-2.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ------------------------------------------------------------------------ Brand (Our Clients logo) ------------------------------------------------------- -->

        <!-- ------------------------------------------------------------------------ Project (Now Our Image Gallary) ------------------------------------------------ -->
        <section class="project-one">
            <div class="project-one__top">
                <div class="container">
                    <div class="section-title text-center">
                        <div class="section-sub-title-box">
                            <p class="section-sub-title wow fadeInUp" data-wow-delay="100ms" >Latest Projects</p>
                            <div class="section-title-shape-1">
                                <img src="assets/images/shapes/fire_icon.png" alt="">
                            </div>
                        </div>
                        <h2 class="section-title__title wow fadeInUp" data-wow-delay="100ms" >Image Gallery <br> </h2>
                    </div>
                </div>
            </div>
            <div class="project-one__bottom">
                <div class="project-one__bottom-wrapper" >
                    <div class="project-one__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
                        "loop": true,
                        "autoplay": true,
                        "margin": 30,
                        "nav": false,
                        "dots": true,
                        "smartSpeed": 500,
                        "autoplayTimeout": 10000,
                        "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                        "responsive": {
                            "0": {
                                "items": 1
                            },
                            "768": {
                                "items": 2
                            },
                            "992": {
                                "items": 3
                            },
                            "1200": {
                                "items": 4
                            }
                        }
                    }'>
                        <!--Project One Single Start-->
                        <div class="item wow fadeInUp"  data-wow-delay="100ms">
                            <div class="project-one__single">
                                <div class="project-one__img-box">
                                    <div class="project-one__img">
                                        <img src="assets/images/project/gallary_image_01.jpg" alt="">
                                    </div>
                                    <div class="project-one__content">
                                        <h4 class="project-one__title"><a href="work-details.html">Delta <br> LP Gas</a>
                                        </h4>
                                    </div>
                                    <div class="project-one__link">
                                        <a class="img-popup" href="assets/images/project/gallary_image_01.jpg"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Project One Single End-->
                        <!--Project One Single Start-->
                        <div class="item wow fadeInUp" data-wow-delay="200ms" >
                            <div class="project-one__single">
                                <div class="project-one__img-box">
                                    <div class="project-one__img">
                                        <img src="assets/images/project/gallary_image_02.jpg" alt="">
                                    </div>
                                    <div class="project-one__content">
                                        <h4 class="project-one__title"><a href="work-details.html">Delta <br> LP Gas</a>
                                        </h4>
                                    </div>
                                    <div class="project-one__link">
                                        <a class="img-popup" href="assets/images/project/gallary_image_02.jpg"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Project One Single End-->
                        <!--Project One Single Start-->
                        <div class="item wow fadeInUp" data-wow-delay="300ms" >
                            <div class="project-one__single" >
                                <div class="project-one__img-box">
                                    <div class="project-one__img">
                                        <img src="assets/images/project/gallary_image_03.jpg" alt="">
                                    </div>
                                    <div class="project-one__content">
                                        <h4 class="project-one__title"><a href="work-details.html">Delta <br> LP Gas</a>
                                        </h4>
                                    </div>
                                    <div class="project-one__link">
                                        <a class="img-popup" href="assets/images/project/gallary_image_03.jpg"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Project One Single End-->
                        <!--Project One Single Start-->
                        <div class="item wow fadeInUp" data-wow-delay="400ms" >
                            <div class="project-one__single">
                                <div class="project-one__img-box">
                                    <div class="project-one__img">
                                        <img src="assets/images/project/gallary_image_01.jpg" alt="">
                                    </div>
                                    <div class="project-one__content">
                                        <h4 class="project-one__title"><a href="work-details.html">Delta <br> LP Gas</a>
                                        </h4>
                                    </div>
                                    <div class="project-one__link">
                                        <a class="img-popup" href="assets/images/project/gallary_image_01.jpg"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Project One Single End-->
                        <!--Project One Single Start-->
                        <div class="item">
                            <div class="project-one__single">
                                <div class="project-one__img-box">
                                    <div class="project-one__img">
                                        <img src="assets/images/project/gallary_image_02.jpg" alt="">
                                    </div>
                                    <div class="project-one__content">
                                        <h4 class="project-one__title"><a href="work-details.html">Delta <br> LP Gas</a>
                                        </h4>
                                    </div>
                                    <div class="project-one__link">
                                        <a class="img-popup" href="assets/images/project/gallary_image_02.jpg"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Project One Single End-->
                        <!--Project One Single Start-->
                        <div class="item">
                            <div class="project-one__single">
                                <div class="project-one__img-box">
                                    <div class="project-one__img">
                                        <img src="assets/images/project/gallary_image_03.jpg" alt="">
                                    </div>
                                    <div class="project-one__content">
                                        <h4 class="project-one__title"><a href="work-details.html">Delta <br> LP Gas</a>
                                        </h4>
                                    </div>
                                    <div class="project-one__link">
                                        <a class="img-popup" href="assets/images/project/gallary_image_03.jpg"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Project One Single End-->
                        <!--Project One Single Start-->
                        <div class="item">
                            <div class="project-one__single">
                                <div class="project-one__img-box">
                                    <div class="project-one__img">
                                        <img src="assets/images/project/gallary_image_01.jpg" alt="">
                                    </div>
                                    <div class="project-one__content">
                                        <h4 class="project-one__title"><a href="work-details.html">Delta <br> LP Gas</a>
                                        </h4>
                                    </div>
                                    <div class="project-one__link">
                                        <a class="img-popup" href="assets/images/project/gallary_image_01.jpg"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Project One Single End-->
                        <!--Project One Single Start-->
                        <div class="item">
                            <div class="project-one__single">
                                <div class="project-one__img-box">
                                    <div class="project-one__img">
                                        <img src="assets/images/project/gallary_image_02.jpg" alt="">
                                    </div>
                                    <div class="project-one__content">
                                        <h4 class="project-one__title"><a href="work-details.html">Delta <br> LP Gas</a>
                                        </h4>
                                    </div>
                                    <div class="project-one__link">
                                        <a class="img-popup" href="assets/images/project/gallary_image_02.jpg"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Project One Single End-->
                        <!--Project One Single Start-->
                        <div class="item">
                            <div class="project-one__single">
                                <div class="project-one__img-box">
                                    <div class="project-one__img">
                                        <img src="assets/images/project/gallary_image_03.jpg" alt="">
                                    </div>
                                    <div class="project-one__content">
                                        <h4 class="project-one__title"><a href="work-details.html">Delta <br> LP Gas</a>
                                        </h4>
                                    </div>
                                    <div class="project-one__link">
                                        <a class="img-popup" href="assets/images/project/gallary_image_03.jpg"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Project One Single End-->
                        <!--Project One Single Start-->
                        <div class="item">
                            <div class="project-one__single">
                                <div class="project-one__img-box">
                                    <div class="project-one__img">
                                        <img src="assets/images/project/gallary_image_01.jpg" alt="">
                                    </div>
                                    <div class="project-one__content">
                                        <h4 class="project-one__title"><a href="work-details.html">Delta <br> LP Gas</a>
                                        </h4>
                                    </div>
                                    <div class="project-one__link">
                                        <a class="img-popup" href="assets/images/project/gallary_image_01.jpg"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Project One Single End-->
                        <!--Project One Single Start-->
                        <div class="item">
                            <div class="project-one__single">
                                <div class="project-one__img-box">
                                    <div class="project-one__img">
                                        <img src="assets/images/project/gallary_image_02.jpg" alt="">
                                    </div>
                                    <div class="project-one__content">
                                        <h4 class="project-one__title"><a href="work-details.html">Delta <br> LP Gas</a>
                                        </h4>
                                    </div>
                                    <div class="project-one__link">
                                        <a class="img-popup" href="assets/images/project/gallary_image_02.jpg"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Project One Single End-->
                        <!--Project One Single Start-->
                        <div class="item">
                            <div class="project-one__single">
                                <div class="project-one__img-box">
                                    <div class="project-one__img">
                                        <img src="assets/images/project/gallary_image_03.jpg" alt="">
                                    </div>
                                    <div class="project-one__content">
                                        <h4 class="project-one__title"><a href="work-details.html">Delta<br> LP Gas</a>
                                        </h4>
                                    </div>
                                    <div class="project-one__link">
                                        <a class="img-popup" href="assets/images/project/gallary_image_03.jpg"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Project One Single End-->
                    </div>
                </div>
            </div>
        </section>
        <!-- ------------------------------------------------------------------------ Project (Now Our Image Gallary) End ------------------------------------------------ -->

        <!-- ------------------------------------------------------------------------ Delta Company (Now Youtube Video) Start -------------------------------------------- -->
        <section class="trust-company">
            <div class="trust-company-shape-1">
                <!--<img src="assets/images/shapes/traust-company-shape-1.png" alt="">-->
            </div>
            <div class="trust-company-shape-2"></div>
            <div class="trust-company-shape-3"></div>
            <div class="trust-company-shape-4"></div>
            <div class="trust-company-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%" style="background-image: url(assets/images/backgrounds/trust-company-bg.jpg);"></div>
            <div class="container">
                <div class="row">
				
				
                    <!--<div class="col-xl-6 col-lg-7">
                        <div class="trust-company__left">
                            <div class="trust-company__video-link">
                                <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                    <div class="trust-company__video-icon">
                                        <span class="fa fa-play"></span>
                                        <i class="ripple"></i>
                                    </div>
                                </a>
                            </div>
                            <h2 class="trust-company__title">Hundreds of customers trust our company</h2>
                        </div>
                    </div>-->
					
					
					<div class="col-xl-12 col-lg-12">
					  <div class="trust-company__left">
						<mediaqueries>
						  <no-script>
							<div class="video_container">
							  <iframe width="1200" height="615" src="https://www.youtube.com/embed/ecK58sun6z8?si=xWFcOWknQKws-tto&controls=0&rel=0" 
							   title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; 
							   gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
							</div>
						  </no-script>
						  <script>
							if (window.matchMedia("(max-width: 768px)").matches) {
							  document.getElementsByClassName('video_container')[0].style.display = 'none';
							}
						  </script>
						</mediaqueries>
						</div>
					</div>

					



					
					
					<!-- rigtht side content of youtube video -->
                    <!--<div class="col-xl-6 col-lg-5">
                        <div class="trust-company__right">
                            <ul class="list-unstyled trust-compay__points">
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick"></span>
                                    </div>
                                    <div class="text">
                                        <p>We are ISO certified.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick"></span>
                                    </div>
                                    <div class="text">
                                        <p>We made it using latest technology.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick"></span>
                                    </div>
                                    <div class="text">
                                        <p>Our product is totally safe.</p>
                                    </div>
                                </li>
								<li>
                                    <div class="icon">
                                        <span class="icon-tick"></span>
                                    </div>
                                    <div class="text">
                                        <p>Proper weight and high heat tolerance.</p>
                                    </div>
                                </li>
								<li>
                                    <div class="icon">
                                        <span class="icon-tick"></span>
                                    </div>
                                    <div class="text">
                                        <p>We offer you free estimates.</p>
                                    </div>
                                </li>
						        <li>
                                    <div class="icon">
                                        <span class="icon-tick"></span>
                                    </div>
                                    <div class="text">
                                        <p>We manufacture in our own factory.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div> ->>
					<!-- End -->
					
					
					
                </div>
            </div>
        </section>
        <!-- ------------------------------------------------------------------------ Trust Company (Now Youtube Video) End -------------------------------------------- -->

        <!-- ------------------------------------------------------------------------ Testimonial Start ---------------------------------------------------------------- -->
        <section class="testimonial-one">
            <div class="testimonial-one-shape" style="background-image: url(assets/images/shapes/testimonial-one-shape.png);"></div>
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-sub-title-box">
                        <p class="section-sub-title wow fadeInUp" data-wow-delay="100ms" >testimonials</p>
                        <div class="section-title-shape-1">
                            <img src="assets/images/shapes/fire_icon.png" alt="">
                        </div>
                    </div>
                    <h2 class="section-title__title wow fadeInUp" data-wow-delay="100ms" >What they’re talking <br> about us</h2>
                </div>
                <div class="testimonial-one__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
                    "loop": true,
                    "autoplay": true,
                    "margin": 50,
                    "nav": false,
                    "dots": false,
                    "smartSpeed": 500,
                    "autoplayTimeout": 10000,
                    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                    "responsive": {
                        "0": {
                            "items": 1
                        },
                        "768": {
                            "items": 2
                        },
                        "992": {
                            "items": 2
                        },
                        "1200": {
                            "items": 2
                        }
                    }
                }'>
                    <!--Testimonial One Single Start-->
                    <div class="item wow fadeInUp" data-wow-delay="100ms" >
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__client-info">
                                <div class="testimonial-one__client-img-box">
                                    <div class="testimonial-one__client-img">
                                        <img src="assets/images/testimonial/testimonial-1-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="testimonial-one__client-details">
                                    <h4 class="testimonial-one__client-name">Jessica Brown</h4>
                                    <p class="testimonial-one__client-sub-title">CEO - Co Founder</p>
                                </div>
                            </div>
                            <p class="testimonial-one__text">Exercitation ullamco laboris nisi ut aliquip ex ea ex commodo consequat duis aute aboris nisi ut aliquip  irure reprehederit in voluptate velit esse .</p>
                            <div class="testimonial-one__rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <!--Testimonial One Single End-->
                    <!--Testimonial One Single Start-->
                    <div class="item wow fadeInUp" data-wow-delay="100ms" >
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__client-info">
                                <div class="testimonial-one__client-img-box">
                                    <div class="testimonial-one__client-img">
                                        <img src="assets/images/testimonial/testimonial-1-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="testimonial-one__client-details">
                                    <h4 class="testimonial-one__client-name">David Cooper</h4>
                                    <p class="testimonial-one__client-sub-title">CEO - Co Founder</p>
                                </div>
                            </div>
                            <p class="testimonial-one__text">Exercitation ullamco laboris nisi ut aliquip ex ea ex commodo consequat duis aute aboris nisi ut aliquip  irure reprehederit in voluptate velit esse .</p>
                            <div class="testimonial-one__rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <!--Testimonial One Single End-->
                    <!--Testimonial One Single Start-->
                    <div class="item">
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__client-info">
                                <div class="testimonial-one__client-img-box">
                                    <div class="testimonial-one__client-img">
                                        <img src="assets/images/testimonial/testimonial-1-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="testimonial-one__client-details">
                                    <h4 class="testimonial-one__client-name">Kevin Martin</h4>
                                    <p class="testimonial-one__client-sub-title">CEO - Co Founder</p>
                                </div>
                            </div>
                            <p class="testimonial-one__text">Exercitation ullamco laboris nisi ut aliquip ex ea ex commodo consequat duis aute aboris nisi ut aliquip  irure reprehederit in voluptate velit esse .</p>
                            <div class="testimonial-one__rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <!--Testimonial One Single End-->
                    <!--Testimonial One Single Start-->
                    <div class="item">
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__client-info">
                                <div class="testimonial-one__client-img-box">
                                    <div class="testimonial-one__client-img">
                                        <img src="assets/images/testimonial/testimonial-1-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="testimonial-one__client-details">
                                    <h4 class="testimonial-one__client-name">Mike Hardson</h4>
                                    <p class="testimonial-one__client-sub-title">CEO - Co Founder</p>
                                </div>
                            </div>
                            <p class="testimonial-one__text">Exercitation ullamco laboris nisi ut aliquip ex ea ex commodo consequat duis aute aboris nisi ut aliquip  irure reprehederit in voluptate velit esse .</p>
                            <div class="testimonial-one__rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <!--Testimonial One Single End-->
                </div>
            </div>
        </section>
        <!-- ------------------------------------------------------------------------ Testimonial End ---------------------------------------------------------------- -->

        <!-- ------------------------------------------------------------------------ Blog Section Start ------------------------------------------------------------- -->
        <section class="blog-one">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-sub-title-box">
                        <p class="section-sub-title wow fadeInUp" data-wow-delay="100ms" >News & Updates</p>
                        <div class="section-title-shape-1">
                            <img src="assets/images/shapes/fire_icon.png" alt="">
                        </div>
                    </div>
                    <h2 class="section-title__title wow fadeInUp" data-wow-delay="100ms" >Stay update with Delta LPG <br> news & articles</h2>
                </div>
                <div class="row">
                    <!--Blog One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="assets/images/blog/blog-1-1.jpg" alt="">
                            </div>
                            <div class="blog-one__content">
                                <div class="blog-one__user">
                                    <div class="blog-one__user-img">
                                        <img src="assets/images/blog/blog-one-user-1-1.jpg" alt="">
                                    </div>
                                    <div class="blog-one__user-content">
                                        <p>by Admin</p>
                                        <h5>January 2, 2022</h5>
                                    </div>
                                </div>
                                <h3 class="blog-one__title"><a href="blog-details.html">Ex-homeless shelter head agrees to settlement</a></h3>
                                <p class="blog-one__text">Nulla commodo dolor massa, vel pellen esque nulla congue quis.</p>
                                <div class="blog-one__read-more">
                                    <a href="blog-details.html">Read More <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Blog One Single End-->
                    <!--Blog One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="assets/images/blog/blog-1-2.jpg" alt="">
                            </div>
                            <div class="blog-one__content">
                                <div class="blog-one__user">
                                    <div class="blog-one__user-img">
                                        <img src="assets/images/blog/blog-one-user-1-2.jpg" alt="">
                                    </div>
                                    <div class="blog-one__user-content">
                                        <p>by Admin</p>
                                        <h5>January 2, 2022</h5>
                                    </div>
                                </div>
                                <h3 class="blog-one__title"><a href="blog-details.html">Roofing surveys paints optimistic outlook</a></h3>
                                <p class="blog-one__text">Nulla commodo dolor massa, vel pellen esque nulla congue quis.</p>
                                <div class="blog-one__read-more">
                                    <a href="blog-details.html">Read More <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Blog One Single End-->
                    <!--Blog One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="assets/images/blog/blog-1-3.jpg" alt="">
                            </div>
                            <div class="blog-one__content">
                                <div class="blog-one__user">
                                    <div class="blog-one__user-img">
                                        <img src="assets/images/blog/blog-one-user-1-3.jpg" alt="">
                                    </div>
                                    <div class="blog-one__user-content">
                                        <p>by Admin</p>
                                        <h5>January 2, 2022</h5>
                                    </div>
                                </div>
                                <h3 class="blog-one__title"><a href="blog-details.html">Protect your roof with 4 winter mistakes</a></h3>
                                <p class="blog-one__text">Nulla commodo dolor massa, vel pellen esque nulla congue quis.</p>
                                <div class="blog-one__read-more">
                                    <a href="blog-details.html">Read More <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Blog One Single End-->
                </div>
            </div>
        </section>
        <!-- ------------------------------------------------------------------------ Blog Section End ------------------------------------------------------------- -->

@endsection