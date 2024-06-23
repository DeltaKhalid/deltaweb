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
                            <li>Mission & Vision</li>
                        </ul>
                        <h2>Mission & Vision</h2>
                    </div>
                </div>
            </section>
            <!--Page Header End-->

            <!-- Headline of Board of Directors -->
			<div class="mission_vision_headline_padding">
                <div class="container">
                    <div class="section-title text-center">
                        <div class="section-sub-title-box">
                            <p class="section-sub-title wow fadeInUp" data-wow-delay="100ms" >Delta LPG</p>
                            <div class="section-title-shape-1">
                                <img src="assets/images/shapes/fire_icon.png" alt="">
                            </div>
                        </div>
                        <!--<h2 class="section-title__title wow fadeInUp" data-wow-delay="100ms" >Our Mission and  Vision <br> </h2>-->
                    </div>
                </div>
            </div>

            <!-- ----------------------------------------------------- Mission & Vision Page Content -------------------------------------- -->
            <section class="mission_vision_headline">
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
                                        <img src="assets/images/resources/mission_vision.png" alt="">
                                    </div>
                                    <div class="about-one__line">
                                        <img src="assets/images/shapes/about-one-line.png" alt="">
                                    </div>
                                    <div class="about-one__satisfied">
                                        <div class="about-one__satisfied-inner">
                                            
                                            <!--<div class="about-one__satisfied-shape">
                                                <img src="assets/images/shapes/about-one-satisfied-shape-1.png" alt="">
                                            </div>-->
                                            
                                            <!--
                                            <div class="about-one__satisfied-content">
                                                <div class="about-one__satisfied-count-box">
                                                    <h3 class="odometer" data-count="98">00</h3>
                                                    <span class="about-one__satisfied-percent">%</span>
                                                </div>
                                                <p class="about-one__satisfied-text">Satisfied customers</p>
                                            </div>-->
                                            
                                        </div>
                                    </div>
                                    <div class="about-one__big-text">Delta LPG</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="about-one__right">
                            
                                <div class="section-title text-left">
                                
                                    <!--<div class="section-sub-title-box">
                                        <p class="section-sub-title wow fadeInUp" data-wow-delay="100ms" >About Delta LPG</p>
                                        <div class="section-title-shape-1">
                                            <img src="assets/images/shapes/fire_icon.png" alt="">
                                        </div>
                                    </div>-->
                                    
                                    <h2 class="section-title__title wow fadeInUp" data-wow-delay="100ms" >Mission</h2>
                                </div>
                                <p class="about-one__text wow fadeInUp" data-wow-delay="100ms" >
                                A mission is a statement or declaration that defines the purpose, core values, and objectives of an individual, 
                                organization, or movement. It serves as a guiding star, providing direction and motivation, and it encapsulates 
                                the essence of what one seeks to achieve. A well-articulated mission aligns actions with goals, ensuring that every step 
                                taken contributes to the broader vision.
                                In organizations, a mission statement is pivotal. It informs stakeholders, from employees to customers, about 
                                the company’s purpose and ambitions. For example, a non-profit's mission might focus on social impact, 
                                like alleviating poverty or promoting education. In contrast, a tech company's mission might center on 
                                innovation and enhancing user experiences.
                                
                                
                                </p>
                                
                                <div class="section-title text-left">
                                
                                    <div class="section-sub-title-box">
                                        <!--<p class="section-sub-title wow fadeInUp" data-wow-delay="100ms" >About Delta LPG</p>-->
                                        <!--<div class="section-title-shape-1">
                                            <img src="assets/images/shapes/fire_icon.png" alt="">
                                        </div>-->
                                    </div>
                                    
                                    <h2 class="section-title__title wow fadeInUp" data-wow-delay="100ms" >Vision</h2>
                                </div>
                                <p class="about-one__text wow fadeInUp" data-wow-delay="100ms" >
                                Delta LPG aspires to be at the forefront of technological advancements in the LPG industry. The vision includes 
                                continuous investment in research and development to enhance the efficiency, safety, and accessibility of LPG solutions. 
                                This commitment to innovation ensures that Delta LPG not only meets but exceeds the evolving energy needs of its customers.
                                
                                </p>
                                
                                
                                

                                
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            


            <!-- ------------------------------------- foote top underline ----------------------------- -->
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