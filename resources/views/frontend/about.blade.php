<!DOCTYPE html>
<html lang="en">
<!-- ================================================= css link ========================================== -->
 @include('frontend.css')

    <!-- ============================================= Body Area ========================================= -->
    <body>

        <div class="custom-cursor__cursor"></div>
        <div class="custom-cursor__cursor-two"></div>

        <!-- ========================================= Pre Loder ========================================= -->
        <div class="preloader">
            <div class="preloader__image"></div>
        </div>
        <!-- /.preloader -->

        <div class="page-wrapper">

            <!-- ===================================== Head Area Include ================================ -->
            <header class="main-header clearfix">
                @include('frontend.header')
            </header>   

            <!-- ===================================== Menu or Nav Area ================================= -->
            @include('frontend.nav')

            <!-- ===================================== Page Body Area =================================== -->

            <!--Page Header Start-->
            <section class="page-header">
                <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
                </div>
                <div class="container">
                    <div class="page-header__inner">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="index.html">Home</a></li>
                            <li><span>/</span></li>
                            <li>About</li>
                        </ul>
                        <h2>About us</h2>
                    </div>
                </div>
            </section>
            <!--Page Header End-->

            <!--About Three Start-->
            <section class="about-three about-four">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="about-three__left">
                                <div class="about-three__img-box wow slideInLeft" data-wow-delay="100ms"
                                data-wow-duration="2500ms">
                                    <div class="about-three__img">
                                        <!--<img src="assets/images/resources/about_us_page_banner_03.png" alt="">-->
                                    </div>
                                    <div class="about-three__img-two">
                                        <img src="assets/images/resources/about_us_page_banner_03.png" alt="">
                                    </div>
                                    <!--<div class="about-three__border"></div>-->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="about-three__right">
                                <div class="section-title text-left">
                                    <div class="section-sub-title-box">
                                        <p class="section-sub-title wow fadeInUp" data-wow-delay="100ms" >About Delta LP Gas Ltd.</p>
                                        <div class="section-title-shape-1">
                                            <img src="assets/images/shapes/fire_icon.png" alt="">
                                        </div>
                                    </div>
                                    <!--<h2 class="section-title__title">Roofsie - exceptional roofing services</h2>-->
                                </div>
                                <p class="about_us_text_design wow fadeInUp" data-wow-delay="100ms" >DELTA LPG LIMITED (DLPGL), is an emerging LPG company of Bangladesh, was incorporated in Bangladesh as a 
                                Private Limited Company with limited liability in the year 2016. The company is lead by two pioneer businessmen Mr. Mohammad Mustafa Haider - 
                                the only son of Mr. M. Abul Kalam, Managing Director of T.K Group as the Chairman of the Company and Mr. Mohammed Amirul Haque of Seacom Group 
                                as the Managing Director of the Company. LPG sector is booming in Bangladesh under the current government’s initiative having huge prospect 
                                of opportunity growth which created scope for setting up more LPG satellite plants to meet huge future demand of LPG in Household & 
                                transportation sector. With the modern set up and cutting edge technology Delta LPG Limited is expecting to perform very favorably in 
                                the business in coming years.</p>
                                
                                <!--<div >
                                <p class="about-three__text">DELTA LPG LIMITED (DLPGL), is an emerging LPG company of Bangladesh, was incorporated in Bangladesh as a 
                                Private Limited Company with limited liability in the year 2016. The company is lead by two pioneer businessmen Mr. Mohammad Mustafa 
                                Haider - the only son of Mr. M. Abul Kalam, Managing Director of T.K Group as the Chairman of the Company and Mr. Mohammed Amirul Haque 
                                of Seacom Group as the Managing Director of the Company.</p>
                                </div>-->
                                
                                
                                <!--<ul class="list-unstyled about-three__point">
                                    <li>
                                        <div class="icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="text">
                                            <p>Exploring version oflorem veritatis proin</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="text">
                                            <p>Auctor aliquet aenean simply free text veritatis quis</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="text">
                                            <p>Consequat ipsum nec lorem sagittis sem nibh.</p>
                                        </div>
                                    </li>
                                </ul>
                                
                                <a href="about.html" class="thm-btn about-three__btn"> <i class="fa fa-arrow-right"></i> Discover more</a>-->
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--About Three End-->
        
            <!--Awards Start-->
            <section class="awards">
                <div class="container">
                    <h4 class="awards__title">We’re certified and award winning roofing contractors</h4>
                    <div class="awards__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
                        "loop": true,
                        "autoplay": true,
                        "margin": 30,
                        "nav": false,
                        "dots": false,
                        "smartSpeed": 200,
                        "autoplayTimeout": 2000,
                        "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                        "responsive": {
                            "0": {
                                "items": 2
                            },
                            "768": {
                                "items": 3
                            },
                            "992": {
                                "items": 3
                            },
                            "1200": {
                                "items": 4
                            }
                        }
                    }'>
                        <!--Awards Single Start-->
                        <div class="item">
                            <div class="awards__single">
                                <div class="awards__img">
                                    <img src="assets/images/resources/awards-1-1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <!--Awards Single End-->
                        <!--Awards Single Start-->
                        <div class="item">
                            <div class="awards__single">
                                <div class="awards__img">
                                    <img src="assets/images/resources/awards-1-1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <!--Awards Single End-->
                        <!--Awards Single Start-->
                        <div class="item">
                            <div class="awards__single">
                                <div class="awards__img">
                                    <img src="assets/images/resources/awards-1-1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <!--Awards Single End-->
                        <!--Awards Single Start-->
                        <div class="item">
                            <div class="awards__single">
                                <div class="awards__img">
                                    <img src="assets/images/resources/awards-1-1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <!--Awards Single End-->
                    </div>
                </div>
            </section>
            <!--Awards End-->
		


            <!--Brand One Start-->
            <section class="brand-one">
            
                <div class="about_us_reward_container">
                <div class="section-sub-title-box">
                    <p class="section-sub-title wow fadeInUp" data-wow-delay="100ms" >Some of Our Valuable Client's</p>
                    <div class="section-title-shape-1">
                    <img src="assets/images/shapes/fire_icon.png" alt="">
                    </div>
                </div>
                </div>
            
                
            
                <div class="brand-one__inner">
                    <div class="brand-one__shape-1">
                        <img src="assets/images/shapes/brand-one-shape-1.png" alt="">
                    </div>
                    <div class="brand-one__shape-2">
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
            <!--Brand One End-->

            <!--Testimonial Two Start-->
            <section class="testimonial-two">
                <div class="testimonial-two-shape" style="background-image: url(assets/images/shapes/testimonial-two-shape.png);"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4">
                            <div class="testimonial-two__left">
                                <div class="section-title text-left">
                                    <div class="section-sub-title-box">
                                        <p class="section-sub-title">testimonials</p>
                                        <div class="section-title-shape-1">
                                            <img src="assets/images/shapes/fire_icon.png" alt="">
                                        </div>
                                    </div>
                                    <h2 class="section-title__title">What they’re talking about company</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8">
                            <div class="testimonial-two__right">
                                <div class="testimonial-two__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
                                    "loop": true,
                                    "autoplay": true,
                                    "margin": 50,
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
                                            "items": 1
                                        },
                                        "992": {
                                            "items": 1
                                        },
                                        "1200": {
                                            "items": 1.4884785
                                        }
                                    }
                                }'>
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
                                    <div class="item">
                                        <div class="testimonial-one__single">
                                            <div class="testimonial-one__client-info">
                                                <div class="testimonial-one__client-img-box">
                                                    <div class="testimonial-one__client-img">
                                                        <img src="assets/images/testimonial/testimonial-1-2.jpg" alt="">
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
                                                        <img src="assets/images/testimonial/testimonial-1-3.jpg" alt="">
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
                                                        <img src="assets/images/testimonial/testimonial-1-4.jpg" alt="">
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
                                    <div class="item">
                                        <div class="testimonial-one__single">
                                            <div class="testimonial-one__client-info">
                                                <div class="testimonial-one__client-img-box">
                                                    <div class="testimonial-one__client-img">
                                                        <img src="assets/images/testimonial/testimonial-1-2.jpg" alt="">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Testimonial Two End-->

            <!--Team One Start-->
            <section class="team-one team-two">
                <div class="container">
                    <div class="section-title text-center">
                        <div class="section-sub-title-box">
                            <p class="section-sub-title">Our team members</p>
                            <div class="section-title-shape-1">
                                <img src="assets/images/shapes/fire_icon.png" alt="">
                            </div>
                        </div>
                        <h2 class="section-title__title">Meet Our<br> Team Members</h2>
                    </div>
                    <div class="row">
                        <!--Team One Single Start-->
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                            <div class="team-one__single">
                                <div class="team-one__img-box">
                                    <div class="team-one__img">
                                        <img src="assets/images/team/team-1-1.jpg" alt="">
                                    </div>
                                    <ul class="list-unstyled team-one__social">
                                        <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                                <div class="team-one__content-box">
                                    <div class="team-one__content">
                                        <h3 class="team-one__name"><a href="team-details.html">Christian Bale</a></h3>
                                        <p class="team-one__sub-title">Chairman</p>
                                        <ul class="list-unstyled team-one__social-two">
                                            <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                        </ul>
                                        <div class="team-one__shape">
                                            <img src="assets/images/shapes/team-one-shape.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Team One Single End-->
                        <!--Team One Single Start-->
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                            <div class="team-one__single">
                                <div class="team-one__img-box">
                                    <div class="team-one__img">
                                        <img src="assets/images/team/team-1-1.jpg" alt="">
                                    </div>
                                    <ul class="list-unstyled team-one__social">
                                        <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                                <div class="team-one__content-box">
                                    <div class="team-one__content">
                                        <h3 class="team-one__name"><a href="team-details.html">Sarah Albert</a></h3>
                                        <p class="team-one__sub-title">Manager</p>
                                        <ul class="list-unstyled team-one__social-two">
                                            <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                        </ul>
                                        <div class="team-one__shape">
                                            <!--<img src="assets/images/shapes/team-one-shape.png" alt="">-->
                                            <img src="assets/images/shapes/team-one-shape.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Team One Single End-->
                        <!--Team One Single Start-->
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                            <div class="team-one__single">
                                <div class="team-one__img-box">
                                    <div class="team-one__img">
                                        <img src="assets/images/team/team-1-1.jpg" alt="">
                                    </div>
                                    <ul class="list-unstyled team-one__social">
                                        <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                                <div class="team-one__content-box">
                                    <div class="team-one__content">
                                        <h3 class="team-one__name"><a href="team-details.html">Mike Hardson</a></h3>
                                        <p class="team-one__sub-title">Director</p>
                                        <ul class="list-unstyled team-one__social-two">
                                            <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                        </ul>
                                        <div class="team-one__shape">
                                            <img src="assets/images/shapes/team-one-shape.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Team One Single End-->
                    </div>
                </div>
            </section>


            <!-- ------------------------------------- slider top underline ---------------------------- -->
            <div class="site-bottom_top_border">
                <!--<p class="site-footer__bottom-text">© All Copyright 2022 by <a href="#">Roofsie.com</a></p>-->
            </div>

            <!-- ===================================== Site Footer Include =============================  -->
            <footer class="site-footer">
                @include('frontend.footer')
            </footer>

        </div>

        <!-- ====================================== inclede of js ===============================================-->
        @include('frontend.js')

    </body>

</html>