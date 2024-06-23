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