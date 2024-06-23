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
            <!-- /.stricky-header -->
            <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
            </div><!-- /.stricky-header -->
            

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
                            <li>Cylinder</li>
                        </ul>
                        <h2>Cylinder</h2>
                    </div>
                </div>
            </section>
            <!--Page Header End-->

            <!-- Headline of Board of Directors -->
            <div class="product_head_margin">
                <div class="container">
                    <div class="section-title text-center">
                        <div class="section-sub-title-box">
                            <p class="section-sub-title wow fadeInUp" data-wow-delay="100ms" >Delta LPG</p>
                            <div class="section-title-shape-1">
                                <img src="assets/images/shapes/fire_icon.png" alt="">
                            </div>
                        </div>
                        <h2 class="section-title__title wow fadeInUp" data-wow-delay="100ms" >Our Products <br> </h2>
                    </div>
                </div>
            </div>

            <!-- ================================================================ Product Area One ========================================================== --> 
        <!--Services Page Start-->
        <section class="cylinder_page">
            <div class="container">
                <div class="row">
                    <!--Services One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="services-one__single">
                            <div class="services-one__img">
                                <img src="assets/images/services/product_12_kg.jpg" alt="">
                            </div>
                            <div class="services-one__content">
                                <div class="services-one__icon_design_2">
                                    <!--<span class="icon-roof"></span>-->
									<img src="assets/images/shapes/fire_icon_40.png" alt="">
                                    
                                </div>
                                <!--<h3 class="services-one__title"><a href="single-play-roofing.html">12 kg LP Gas</a></h3>-->
                                <!--<p class="services-one__text">Nulla commodo dolor massa, vel pellen esque nulla congue quis.</p>-->
                                <div class="services-one__read-more">
                                    <!--<a href="#">Read More <i class="fa fa-arrow-right"></i></a>-->
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--Services One Single End-->
					

                    <!--Services One Single Start-->
                    <div class="col-xl-8 col-lg-8 wow fadeInUp" data-wow-delay="200ms">
                        <div class="services-one__single">
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a href="modified-roofing.html">12 kg LP Gas</a></h3>
                                <p class="services-one__text">
								A 12 kg liquefied petroleum (LP) gas cylinder is a popular choice for households and small businesses. 
								These cylinders contain a propane-butane mix, compressed into liquid form, and are widely used for cooking, 
								heating, and sometimes even in off-grid energy setups.
								Safety is paramount with LP gas. Ensure the cylinder is stored upright, away from heat sources, and in a well-ventilated area. 
								Regularly check for leaks using soapy water, and always connect and disconnect appliances according to the manufacturer's instructions.
								
								<!-- 50 px Empty Div -->
								<div class="empty_div_20px"></div>
								
								</p>
                                <div class="services-one__read-more">
                                    <!--<a href="modified-roofing.html">Read More <i class="fa fa-arrow-right"></i></a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
					
                </div>
            </div>
        </section>
        <!--Services Page End-->
		
		
		<!-- ================================================================ Product Area Two ========================================================== --> 
        <!--Services Page Start-->
        <section class="cylinder_page">
            <div class="container">
                <div class="row">
				
					<!--Services One Single Start-->
                    <div class="col-xl-8 col-lg-8 wow fadeInUp" data-wow-delay="200ms">
                        <div class="services-one__single">
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a href="modified-roofing.html">33 kg LP Gas</a></h3>
                                <p class="services-one__text">
								A 33 kg liquefied petroleum (LP) gas cylinder is a robust option for high-demand applications. 
								With a mix of propane and butane, these cylinders serve as a vital fuel source for commercial kitchens, 
								industrial settings, and large households. Handling and storage of a 33 kg cylinder requires adherence 
								to safety standards. It should be kept upright in a ventilated space, away from ignition sources. 
								Regular inspections for leaks using soapy water and proper connection techniques are crucial to ensure safety.
								
								<!-- 50 px Empty Div -->
								<div class="empty_div_20px"></div>
								
								</p>
                                <div class="services-one__read-more">
                                    <!--<a href="modified-roofing.html">Read More <i class="fa fa-arrow-right"></i></a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
				
                    <!--Services One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="services-one__single">
                            <div class="services-one__img">
                                <img src="assets/images/services/product_35_kg.jpg" alt="">
                            </div>
                            <div class="services-one__content">
                                <div class="services-one__icon_design_2">
                                    <!--<span class="icon-roof"></span>-->
									<img src="assets/images/shapes/fire_icon_40.png" alt="">
                                    
                                </div>
                                <!--<h3 class="services-one__title"><a href="single-play-roofing.html">12 kg LP Gas</a></h3>-->
                                <!--<p class="services-one__text">Nulla commodo dolor massa, vel pellen esque nulla congue quis.</p>-->
                                <div class="services-one__read-more">
                                    <!--<a href="#">Read More <i class="fa fa-arrow-right"></i></a>-->
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--Services One Single End-->
					
                </div>
            </div>
        </section>
        <!--Services Page End-->
		
		<!-- ================================================================ Product Area Three ======================================================== --> 
        <!--Services Page Start-->
        <section class="cylinder_page">
            <div class="container">
                <div class="row">
                    <!--Services One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="services-one__single">
                            <div class="services-one__img">
                                <img src="assets/images/services/product_45_kg.jpg" alt="">
                            </div>
                            <div class="services-one__content">
                                <div class="services-one__icon_design_2">
                                    <!--<span class="icon-roof"></span>-->
									<img src="assets/images/shapes/fire_icon_40.png" alt="">
                                    
                                </div>
                                <!--<h3 class="services-one__title"><a href="single-play-roofing.html">12 kg LP Gas</a></h3>-->
                                <!--<p class="services-one__text">Nulla commodo dolor massa, vel pellen esque nulla congue quis.</p>-->
                                <div class="services-one__read-more">
                                    <!--<a href="#">Read More <i class="fa fa-arrow-right"></i></a>-->
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--Services One Single End-->
					
                    <!--Services One Single Start-->
                    <div class="col-xl-8 col-lg-8 wow fadeInUp" data-wow-delay="200ms">
                        <div class="services-one__single">
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a href="modified-roofing.html">45 kg LP Gas</a></h3>
                                <p class="services-one__text">
								A 45 kg liquefied petroleum (LP) gas cylinder is ideal for high-consumption environments. 
								Containing a mixture of propane and butane, these cylinders cater to a broad spectrum of uses, 
								including large households, commercial kitchens, industrial applications, and even agricultural needs.
								Safety considerations are essential with such large cylinders. They should be stored upright in a secure, 
								ventilated area, and far from ignition sources. Regular checks for leaks using soapy water and careful handling 
								during connection and disconnection are necessary to prevent hazards.
								<!-- 50 px Empty Div -->
								<!--<div class="empty_div_10px"></div>-->
								
								</p>
                                <div class="services-one__read-more">
                                    <!--<a href="modified-roofing.html">Read More <i class="fa fa-arrow-right"></i></a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
					
                </div>
            </div>
        </section>
        <!--Services Page End-->

            


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