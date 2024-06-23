<!-- All Nav code -->

<nav class="main-menu clearfix">
    <div class="main-menu__wrapper clearfix">
        <div class="main-menu__wrapper-inner clearfix">
            <div class="main-menu__left">
                <div class="main-menu__main-menu-box">
                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                    <ul class="main-menu__list">
                        <!-- ========================= Home page Nav Item =========================================== -->
                        <li @if(request()->routeIs('home')) class="current" @endif>
                            <a href="{{ route('home') }}">Home</a>
                        </li>

                        <!--<li class="current">
                            <!--<a href="index.html">Home </a>-->
                            <!--<a href="index.html">Home </a>-->
                            <!-- <a href="{{ route('home') }}">Home</a> -->

                            <!--<a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'current' : '' }}">Home</a>-->


                            
                        <!--</li>-->
                        <!-- ========================= About page Nav Item =========================================== -->
                        <li>
                            <!--<a href="about.html">About</a>-->
                            <!--<a href="about.html">About</a>-->
                            <!-- <a href="{{ route('about') }}">About Us</a> -->
                            <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'current' : '' }}">About</a>
                            <ul class="border-top-2px">
                                <!--<li><a href="services.html">About Our Company</a></li>-->
                                <!--<li><a href="about.html">About Us</a></li>-->
                        
                                <!--<li><a href="mission_vision.html">Mission & Vision</a></li>-->

                                <!-- <li><a href="{{ route('mission-vision') }}">Mission & Vision</a></li> -->
                                <li><a href="{{ route('mission-vision') }}" class="{{ request()->routeIs('mission-vision') ? 'current' : '' }}">Mission & Vision</a></li>


                                <!--<li><a href="single-play-roofing.html">Our Vision</a></li>-->
                                <!--<li><a href="board_of_directors.html">Board of Directors</a></li>-->

                                <!-- <li><a href="{{ route('board-of-directors') }}">Board of Directors</a></li> -->
                                <li><a href="{{ route('board-of-directors') }}" class="{{ request()->routeIs('board-of-directors') ? 'current' : '' }}">Board of Directors</a></li>

                            </ul>
                        </li>
                        <!-- ========================= Product page Nav Item ========================================== -->
                        <li class="dropdown">
                            <a href="#">Products</a>
                            <ul class="border-top-2px">
                                <!--<li><a href="cylinder.html">Cylinder</a></li>-->
                                <!--<li><a href="{{ route('cylinder') }}">Cylinder</a></li>-->
                                <li><a href="{{ route('cylinder') }}" class="{{ request()->routeIs('cylinder') ? 'current' : '' }}">Cylinder</a></li>

                                <!--<li><a href="bulk.html">Bulk</a></li>-->
                                <li><a href="{{ route('bulk') }}" class="{{ request()->routeIs('bulk') ? 'current' : '' }}">Bulk</a></li>

                                <!--<li><a href="reticulation.html">Reticulation</a></li>-->
                                <!--<li><a href="{{ route('reticulation') }}">Reticulation</a></li>-->
                                <li><a href="{{ route('reticulation') }}" class="{{ request()->routeIs('reticulation') ? 'current' : '' }}">Reticulation</a></li>
                                
                                <!--<li><a href="autogas.html">Autogas</a></li>-->
                                <!--<li><a href="{{ route('autogas') }}">Autogas</a></li>-->
                                <li><a href="{{ route('autogas') }}" class="{{ request()->routeIs('autogas') ? 'current' : '' }}">Reticulation</a></li>
                                
                                
                            </ul>
                        </li>
                        <!-- ========================= Distribution page Nav Item ==================================== -->
                        <li class="">
                            <!--<a href="distribution.html">Distribution</a>-->
                            <!--<a href="{{ route('distribution') }}">Distribution</a>-->
                            <a href="{{ route('distribution') }}" class="{{ request()->routeIs('distribution') ? 'current' : '' }}">Distribution</a>
                        </li>
                        <!-- ========================= Contact page Nav Item ========================================= -->
                        <li>
                            <!--<a href="contact.html">Contact</a>-->
                            <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'current' : '' }}">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="main-menu__right">
                <div class="main-menu__call">
                    <div class="main-menu__call-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="main-menu__call-content">
                        <p>Call Anytime</p>
                        <a href="tel:9200368090">+880 255 011 901-3</a>
                    </div>
                </div>
                <div class="main-menu__search-box">
                    <a href="#" class="main-menu__search search-toggler icon-magnifying-glass"></a>
                </div>
                <div class="main-menu__btn-box">
                    <a href="product_order_now.html" class="thm-btn main-menu__btn"> <i class="fa fa-arrow-right"></i> Order Now</a>
                </div>
            </div>
        </div>
    </div>
</nav>