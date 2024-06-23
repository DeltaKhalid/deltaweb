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

            



            <!-- ===================================== Page Body Area =================================== -->
            <!-- /.stricky-header -->
            <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
            </div><!-- /.stricky-header -->

            <!--Page Header Start-->
            <section class="page-header">
                <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
                </div>
                <div class="container">
                    <div class="page-header__inner">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="index.html">Home</a></li>
                            <li><span>/</span></li>
                            <li>Autogas</li>
                        </ul>
                        <h2>Autogas</h2>
                    </div>
                </div>
            </section>
            <!--Page Header End-->

            <!-- Headline of page -->
            <div class="product_head_margin">
                <div class="container">
                    <div class="section-title text-center">
                        <div class="section-sub-title-box">
                            <p class="section-sub-title wow fadeInUp" data-wow-delay="100ms" >Delta LPG</p>
                            <div class="section-title-shape-1">
                                <img src="assets/images/shapes/fire_icon.png" alt="">
                            </div>
                        </div>
                        <h2 class="section-title__title wow fadeInUp" data-wow-delay="100ms" > AUTOGAS <br> </h2>
                    </div>
                </div>
            </div>

            <!-- ================================================================ Product Area One ========================================================== -->
        <!--Services Page Start-->
		<section class="services-page">
			<div class="container">
				<div class="row">
					<!--Services One Single Start-->
					<div class="col-xl-12 col-lg-12 wow fadeInUp" data-wow-delay="200ms">
						<div class="services-one__single">
							<div class="services-one__content">
								<h3 class="services-one__title"><a href="modified-roofing.html"></a></h3>
								<img class="centered-image" src="assets/images/resources/delta_auto_gas_06.jpg" alt="">
								<!-- 50 px Empty Div -->
								<!--<div class="empty_div"></div>-->
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
		
		
		<!-- ================================================================ Product Area One ========================================================== --> 
        <!--Services Page Start-->
        <section class="cylinder_page">
            <div class="container">
                <div class="row">
				

					

                    <!--Services One Single Start-->
                    <div class="col-xl-12 col-lg-12 wow fadeInUp" data-wow-delay="200ms">
                        <div class="services-one__single">
                            <div class="services-one__content">
                                
                                <p class="services-one__text">
								Auto Gas: The Premier Alternative Fuel for Cars
								Auto Gas is rapidly emerging as the leading alternative fuel to petrol for automobiles. Across the globe, 
								many developed nations are transitioning their vehicles from gasoline to Auto Gas. Here are the key 
								reasons driving this shift:
								
								<!-- 50 px Empty Div -->
								<!--<div class="empty_div"></div>-->
								</p>
								
								<h3 class="auto_gas_page_title_two"><a href="#">1. Environmental Benefits : </a></h3>
								<p class="auto_gas_page_body_text">
								Auto Gas produces fewer emissions compared to traditional gasoline, helping to reduce air pollution and combat climate change.
								</p>
								
								<h3 class="auto_gas_page_title_two"><a href="#">2. Cost Efficiency: : </a></h3>
								<p class="auto_gas_page_body_text">
								Auto Gas is often more affordable than petrol, offering significant savings for drivers and reducing overall transportation costs.
								</p>
								
								<h3 class="auto_gas_page_title_two"><a href="#">3. Engine Longevity: : </a></h3>
								<p class="auto_gas_page_body_text">
								Vehicles running on Auto Gas typically experience less wear and tear, which can result in longer engine life and lower maintenance expenses.
								</p>
								
								<h3 class="auto_gas_page_title_two"><a href="#">4. Energy Security : </a></h3>
								<p class="auto_gas_page_body_text">
								By diversifying fuel sources, countries can enhance their energy security and reduce dependence on imported oil.
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