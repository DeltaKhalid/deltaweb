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
                            <li>Board of Directors</li>
                        </ul>
                        <h2>Board of Directors</h2>
                    </div>
                </div>
            </section>

            <!--Team Page Start-->
            <section class="team-page">
                <!-- Headline of Board of Directors -->
                <div class="project-one__top">
                    <div class="container">
                        <div class="section-title text-center">
                            <div class="section-sub-title-box">
                                <p class="section-sub-title wow fadeInUp" data-wow-delay="100ms" >Delta LPG</p>
                                <div class="section-title-shape-1">
                                    <img src="assets/images/shapes/fire_icon.png" alt="">
                                </div>
                            </div>
                            <h2 class="section-title__title wow fadeInUp" data-wow-delay="100ms" >Board of Directors <br> </h2>
                        </div>
                    </div>
                </div>
            
            
                <div class="container">
                    <div class="row">

                        <!-- ============================================== Board of Director Item 1 ================================================ -->
                        <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="team-one__single">
                                <div class="team-one__img-box">
                                    <div class="team-one__img">
                                        <img src="assets/images/team/md_sir.png" alt="">
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
                                        <h3 class="team-one__name"><a href="team-details.html">Mohammed Amirul Haque</a></h3>
                                        <p class="team-one__sub-title">Managing Director</p>
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

                        <!-- ============================================== Board of Director Item 2 ================================================ -->
                        <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="team-one__single">
                                <div class="team-one__img-box">
                                    <div class="team-one__img">
                                        <img src="assets/images/team/chairman sir.png" alt="">
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
                                        <h3 class="team-one__name"><a href="team-details.html">Mohammad Mustafa Haider</a></h3>
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

                        <!-- ============================================== Board of Director Item 3 ================================================ -->
                        <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
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
                                        <h3 class="team-one__name"><a href="team-details.html">Name</a></h3>
                                        <p class="team-one__sub-title">Designation</p>
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

                        <!-- ============================================== Board of Director Item 4 ================================================ -->
                        <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms">
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
                                        <h3 class="team-one__name"><a href="team-details.html">Name</a></h3>
                                        <p class="team-one__sub-title">Designation</p>
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

                        <!-- ============================================== Board of Director Item 5 ================================================ -->
                        <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="500ms">
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
                                        <h3 class="team-one__name"><a href="team-details.html">Name</a></h3>
                                        <p class="team-one__sub-title">Designation</p>
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

                        <!-- ============================================== Board of Director Item 6 ================================================ -->
                        <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="600ms">
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
                                        <h3 class="team-one__name"><a href="team-details.html">Name</a></h3>
                                        <p class="team-one__sub-title">Designation</p>
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
            <!--Team Page End-->

            


            <!-- ------------------------------------- foote top underline ---------------------------- -->
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