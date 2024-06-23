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
                            <li>Distribution</li>
                        </ul>
                        <h2>Distribution</h2>
                    </div>
                </div>
            </section>
            <!--Page Header End-->

            <!-- -------------------------------------------------------------------- Area 1 ------------------------------------------------------------------- -->
		
		
            <!-- Headline of Board of Directors -->
            <div class="mission_vision_headline_padding">
                <div class="container">
                    <div class="section-title text-center">
                        <div class="section-sub-title-box">
                            <p class="section-sub-title wow fadeInUp" data-wow-delay="100ms" >OUR FACILITIES</p>
                            <div class="section-title-shape-1">
                                <img src="assets/images/shapes/fire_icon.png" alt="">
                            </div>
                        </div>
                        <!--<h2 class="section-title__title wow fadeInUp" data-wow-delay="100ms" >Our Mission and  Vision <br> </h2>-->
                    </div>
                </div>
            </div>
            
            
            <section class="distribution_headline">
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
                                        <img src="assets/images/resources/distribution_img_1.2.png" alt="">
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
                        
                        <!-- First Section  -->
                        
                        <div class="col-xl-6">
                            <div class="about-one__right">
                            
                                <div class="section-title text-left">
                                
                                    <!--<div class="section-sub-title-box">
                                        <p class="section-sub-title wow fadeInUp" data-wow-delay="100ms" >About Delta LPG</p>
                                        <div class="section-title-shape-1">
                                            <img src="assets/images/shapes/fire_icon.png" alt="">
                                        </div>
                                    </div>-->
                                    
                                    <h2 class="section-title__title wow fadeInUp" data-wow-delay="100ms" >OUR FACILITIES</h2>
                                </div>
                                <p class="about-one__text wow fadeInUp" data-wow-delay="100ms" style = "text-align: justify">
                                With our strong Delivery network of high quality road tankers and numerous trucks - 
                                Delta LPG is able to provide service to our customers nationwide - hassle free.
                                With strategically located satellite plant and numerous RDCs all across the country - 
                                Delta LPG is poised to bring high quality liquified gas to your doorstep

                                
                                
                                </p>
                                
                                <div class="section-title text-left">
                                
                                    <div class="section-sub-title-box">
                                        <!--<p class="section-sub-title wow fadeInUp" data-wow-delay="100ms" >About Delta LPG</p>-->
                                        <!--<div class="section-title-shape-1">
                                            <img src="assets/images/shapes/fire_icon.png" alt="">
                                        </div>-->
                                    </div>
                                    
                                    <h2 class="section-title__title wow fadeInUp" data-wow-delay="100ms" >Distribution System</h2>
                                </div>
                                <p class="about-one__text wow fadeInUp" data-wow-delay="100ms" style = "text-align: justify" >
                                LPG distribution System is designed with a integrated link of supply chain 
                                to distribute LP Gas in Northern and southern Zone of Bangladesh. Mother Vessel with Imported LP Gas will arrive at our Chittagong 
                                and Mongla facility. Our LP Gas Carrying Ships will distribute LP Gas in Greater Dhaka, Comilla & Sylhet Zone Mini satellite 
                                Plant will help to mitigate cost of Carrying of Cylinder and reduce time of Cylinder refilling and also availability 
                                of LPG around the country for the end users. LP Gas will be used as a cleaner fuel in Household, Restaurant, Hotels, 
                                Mess, Workshop, Small Industries, and Factories in the form of cylinder and by Bobtail/LP Gas Tank Lorry to 
                                AUTO GAS STATION for all kinds of Vehicles use.
                                
                                </p>
                                
                                
                                

                                
                                
                                
                            </div>
                        </div>
                        
                        
                        
                        
                        
                    </div>
                </div>
            </section>
            <!-- --------------------------------------------------------------------------- Area 2 ------------------------------------------------------------ -->
            
            
                    <!-- Headline of Board of Directors -->
            <div class="mission_vision_headline_padding">
                <div class="container">
                    <div class="section-title text-center">
                        <div class="section-sub-title-box">
                            <h1 class="section-sub-title wow fadeInUp" data-wow-delay="100ms" >Our Plants</h1>
                            <div class="section-title-shape-1">
                                <img src="assets/images/shapes/fire_icon.png" alt="">
                            </div>
                        </div>
                        <!--<h2 class="section-title__title wow fadeInUp" data-wow-delay="100ms" >Our Mission and  Vision <br> </h2>-->
                    </div>
                </div>
            </div>
            
            <section class="distribution_headline">
                <div class="about-one__shape float-bob-x">
                    <img src="assets/images/shapes/about-one-shape.png" alt="">
                </div>
                <div class="container">
                    <div class="row">
                    

                        
                        <!-- First Section  -->
                        
                        <div class="col-xl-6">
                            <div class="about-one__right">
                            
                                <div class="section-title text-left">
                                
                                    <!--<div class="section-sub-title-box">
                                        <p class="section-sub-title wow fadeInUp" data-wow-delay="100ms" >About Delta LPG</p>
                                        <div class="section-title-shape-1">
                                            <img src="assets/images/shapes/fire_icon.png" alt="">
                                        </div>
                                    </div>-->
                                    
                                    <h5 class="section-title__title_2 wow fadeInUp" data-wow-delay="100ms" >Unit 01: Mongla LPG Storage and Bottling Plant</h5>
                                </div>
                                <p class="about-one__text wow fadeInUp" data-wow-delay="100ms" style = "text-align: justify" >
                                Situated in Mongla Port Industrial Area, the plan is equipped with three Spherical Tanks having total capacity of 5000mt and a 
                                yearly Storage capacity of 180,000 MT to store Imported LP Gas. The plant is equipped with its own jetty facility and easily handle 
                                any vessel upto 6M draft. The plant has filling facility for 12.5 Kg, 15 kg, 33 Kg & 45 kg LP gas Cylinders. The plant has also Bulk 
                                filling facilities to Bobtail/LP gas carrying lorry.

                                </p>
                                
                                <!-- para 2 -->
                                <div class="section-title text-left">
                                
                                    <!--<div class="section-sub-title-box">
                                        <p class="section-sub-title wow fadeInUp" data-wow-delay="100ms" >About Delta LPG</p>
                                        <div class="section-title-shape-1">
                                            <img src="assets/images/shapes/fire_icon.png" alt="">
                                        </div>
                                    </div>-->
                                    
                                    <h5 class="section-title__title_2 wow fadeInUp" data-wow-delay="100ms" >Unit 01: Mongla LPG Storage and Bottling Plant</h5>
                                </div>
                                <p class="about-one__text wow fadeInUp" data-wow-delay="100ms" style = "text-align: justify" >
                                Located in Tengramari , Rampal , Bagerhat over a area of 4.38 Acres of land. The plant has two lines production facility 
                                of 12.5 Kg, 15 kg, 33 Kg & 45 kg LP gas Cylinders. Machineries for Two full lines imported from International Machinery 
                                Industries, china a large and reputed manufacturer Cylinder Manufacturing Plant. Cylinders are made from high grade 
                                imported Raw Materials: Steel Sheet, Valve and collar, welding flux, welding wire, steel shots, Zinc wire etc.

                                </p>
                                
                                

                                
                            </div>
                        </div>
                        
                        <!-- image from Right -->
                        
                        <div class="col-xl-6">
                            <div class="about-one__righ">
                                <div class="about-one__img-box wow slideInRight" data-wow-delay="100ms"
                                data-wow-duration="2500ms">
                                    <div class="about-one__img">
                                        <img src="assets/images/resources/distribution_img_2.2.png" alt="">
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
                        
                        
                        
                        
                        
                    </div>
                </div>
            </section>
            <!-- --------------------------------------------------------------------------- Area 3 ------------------------------------------------------------ -->
            
            <section class="distribution_headline">
                <div class="about-one__shape float-bob-x">
                    <img src="assets/images/shapes/about-one-shape.png" alt="">
                </div>
                <div class="container">
                    <div class="row">
                    

                        
                        <!-- First Section  -->
                        
                        <div class="col-xl-6">
                            <div class="about-one__right">
                            
                                <div class="section-title text-left">
                                
                                    <!--<div class="section-sub-title-box">
                                        <p class="section-sub-title wow fadeInUp" data-wow-delay="100ms" >About Delta LPG</p>
                                        <div class="section-title-shape-1">
                                            <img src="assets/images/shapes/fire_icon.png" alt="">
                                        </div>
                                    </div>-->
                                    
                                    <h5 class="section-title__title_2 wow fadeInUp" data-wow-delay="100ms" >Unit 03: Sayedpur LPG Storage and Bottling Plant</h5>
                                </div>
                                <p class="about-one__text wow fadeInUp" data-wow-delay="100ms" style = "text-align: justify" >
                                Located at Sayedpur, Narayangonj , Dhaka with an area of 3 Acres land, with total yearly Storage Capacity of 216,000MT equipped with 
                                6nos Mounted Tanks. This plant also equipped with Filling hall for filling cylinders size of 12.5kg, 15kg, 33kg & 45 kg and has Bulk 
                                filling facilities to load Bobtail/LP gas carrying lorries.

                                </p>
                                

                                
                                

                                
                            </div>
                        </div>
                        
                        <!-- image from Right -->
                        
                        <div class="col-xl-6">
                            <div class="about-one__right">
                            
                                <div class="section-title text-left">
                                
                                    <!--<div class="section-sub-title-box">
                                        <p class="section-sub-title wow fadeInUp" data-wow-delay="100ms" >About Delta LPG</p>
                                        <div class="section-title-shape-1">
                                            <img src="assets/images/shapes/fire_icon.png" alt="">
                                        </div>
                                    </div>-->
                                    
                                    <h5 class="section-title__title_2 wow fadeInUp" data-wow-delay="100ms" >Unit 04: Sitakundha LPG Storage and Bottling Plant</h5>
                                </div>
                                <p class="about-one__text wow fadeInUp" data-wow-delay="100ms" style = "text-align: justify" >
                                Our Sitakunda plant is Located at:  Sitakundha, Noralia, Sitakunda, Chattogram having yearly production capacity of 288,000 MT of 
                                LP Gas with Storage tank capacity of 12000MT. It has a land area of 11.63 Acres. The plant is equipped with Filling hall having 
                                facilities of filling 12.5kg, 15kg small sizes cylinder and 33 & 45 kg big sizes cylinders. It also has capacity of filling 
                                Bobtail /Road tanker.

                                </p>
                                
                                
                                
                            </div>
                        </div>
                        
                        
                        
                        
                        
                    </div>
                </div>
            </section>
            <!-- --------------------------------------------------------------------------- About One End ------------------------------------------------------------ -->
            
            <!-- Empty Space -->
            <div class="empty_div"></div>

            


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