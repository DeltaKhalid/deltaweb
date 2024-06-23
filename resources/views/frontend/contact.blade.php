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
                <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/contact_header_banner_01.jpg)">
                </div>
                <div class="container">
                    <div class="page-header__inner">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="index.html">Home</a></li>
                            <li><span>/</span></li>
                            <li>Contact</li>
                        </ul>
                        <h2>Contact</h2>
                    </div>
                </div>
            </section>
            <!--Page Header End-->

            <!--Contact Details Start-->
        <section class="contact-details">
            <div class="container">
                <ul class="list-unstyled contact-details__list">
                    <li>
                        <div class="contact-details__icon">
                            <span class="icon-telephone"></span>
                        </div>
                        <div class="contact-details__content">
                            <h4>
                                <a href="tel:9200368090" class="contact-details__number-1">+880 255 011 901-3  </a>
                                <a href="tel:6668888000" class="contact-details__number-2">+880 255 011 904 </a>
                            </h4>
                        </div>
                    </li>
                    <li>
                        <div class="contact-details__icon">
                            <span class="icon-email"></span>
                        </div>
                        <div class="contact-details__content">
                            <h4>
                                <a href="mailto:info@company.com" class="contact-details__number-1">info@deltalpg.com</a>
                                <a href="mailto:needhelp@company.com"
                                    class="contact-details__number-2">sels@deltalpg.com</a>
                            </h4>
                        </div>
                    </li>
                    <li>
                        <div class="contact-details__icon_of_address">
                            <span class="icon-pin"></span>
                        </div>
                        <div class="contact-details__content">
                            <h4>TK BHABAN (16TH FLOOR) 13 <br> KARWAN BAZAR  <br>DHAKA 1215, Bangladesh</h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!--Contact Details End-->
		
				<!-- ---------------------------------------------------------- slider top underline ----------------------------------------------------------------- -->
		<div class="contact_page_form_header_underline">
			<!--<p class="site-footer__bottom-text">© All Copyright 2022 by <a href="#">Roofsie.com</a></p>-->
		</div>

        <!--Contact Page Start-->
        <section class="contact-page">
            <div class="contact-page-shape-1">
                <img src="assets/images/shapes/contact-page-shape-1.png" alt="">
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-sub-title-box">
                        <p class="section-sub-title wow fadeInUp" data-wow-delay="100ms" >Contact with us</p>
                        <div class="section-title-shape-1">
                            <img src="assets/images/shapes/fire_icon.png" alt="">
                        </div>
                    </div>
                    <!--<h2 class="section-title__title"><br></h2>-->
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="contact-page__form">
                            <form action="assets/inc/sendemail.php" class="comment-one__form contact-form-validated"
                                novalidate="novalidate">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="text" placeholder="Your name" name="name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="email" placeholder="Email address" name="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="comment-form__input-box text-message-box">
                                            <textarea name="message" placeholder="Write a message"></textarea>
                                        </div>
                                        <div class="comment-form__btn-box">
                                            <button type="submit" class="thm-btn comment-form__btn"> <i
                                                    class="fa fa-arrow-right"></i> Send a message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Page End-->

        <!--Google Map Start-->
        <section class="google-map google-map-two">
            <!--<iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
                class="google-map__one" allowfullscreen></iframe>-->
			
			<iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d3651.9004874759607!2d90.39078227605823!3d23.75092778875481!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d23.7505405!2d90.39324839999999!4m5!1s0x3755b8a2ac138305%3A0x70ddbf0dc79bfae3!2zMm5kIEZsb29yLCDgpp_gpr8g4KaV4KeHIOCml-CnjeCmsOCngeCmqiwg4Kaf4Ka_LuCmleCnhyDgpq3gpqzgpqgsIDEzIOCmleCmvuCmnOCngCDgpqjgppzgprDgp4HgprIg4KaH4Ka44Kay4Ka-4KauIOCmuOCmsOCmo-Cmvywg4Kai4Ka-4KaV4Ka-IDEyMTU!3m2!1d23.7511758!2d90.39332279999999!5e0!3m2!1sbn!2sbd!4v1715501275399!5m2!1sbn!2sbd" 
			width="1900" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </section>
        <!--Google Map End-->
		


            


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