

<div class="sidebar-wrapper" data-layout="fill-svg">
  <div>
    <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="adminasset/images/logo/logo.png" alt=""></a>
      <div class="toggle-sidebar">
        <svg class="sidebar-toggle"> 
          <use href="adminasset/svg/icon-sprite.svg#toggle-icon"></use>
        </svg>
      </div>
    </div>
    <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid" src="adminasset/images/logo/logo-icon.png" alt=""></a></div>
    <nav class="sidebar-main">
      <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
        <div id="sidebar-menu">
          <ul class="sidebar-links" id="simple-bar">
            <li class="back-btn"><a href="index.html"><img class="img-fluid" src="adminasset/images/logo/logo-icon.png" alt=""></a>
              <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
            </li>
            <li class="pin-title sidebar-main-title">
              <div> 
                <h6>Pinned</h6>
              </div>
            </li>
            <li class="sidebar-main-title">
              <div>
                <h6 class="lan-1">General</h6>
              </div>
            </li>
            <!-- ========================================= Dashboard Main Menu ========================== -->
            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
              <a class="sidebar-link sidebar-title link-nav" 
                 href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <svg class="stroke-icon">
                  <use href="adminasset/svg/icon-sprite.svg#fill-home"></use>
                </svg>
                <svg class="fill-icon">
                  <use href="adminasset/svg/icon-sprite.svg#fill-home"></use>
                </svg><span>Dashboard</span>
              </a>
            </li>

            <!--<li class="sidebar-list"> <i class="fa fa-thumb-tack"> </i> <a class="sidebar-link sidebar-title" href="#">
                <!--<svg class="stroke-icon">
                  <!--<use href="adminasset/svg/icon-sprite.svg#stroke-home"></use>-->
                <!--</svg>
                <!--<svg class="fill-icon">
                  <use href="adminasset/svg/icon-sprite.svg#fill-home"></use>
                </svg><span class="lan-3">Dashboard</span></a>-->

              <!--<ul class="sidebar-submenu">
                <li><a class="lan-4" href="index.html">Default</a></li>
                <li><a class="lan-5" href="dashboard-02.html">Ecommerce</a></li>
                <li><a href="dashboard-03.html">Project</a></li>
              </ul>-->

            <!--</li>-->
            <!-- ========================================= Pages Menu 999999 ===================================== -->
            <!-- ===================================================== Pages Link side menu ========================================= -->
            <li class="sidebar-main-title">
              <div>
                <h6>Pages</h6>
              </div>
            </li>
            <!-- Home Page Menu -->
            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                <!--<a class="sidebar-link sidebar-title link-nav" href="landing-page.html">-->
                <!--<a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'current' : '' }}">About</a>-->
                <!--<a class="sidebar-link sidebar-title link-nav" href="{{ route('admin_home_page') }}" class="{{ request()->routeIs('index') }}"></a>-->
              <a class="sidebar-link sidebar-title link-nav" 
                 href="{{ route('admin_home_page') }}" class="{{ request()->routeIs('admin_home_page') ? 'active' : '' }}">
                <svg class="stroke-icon">
                  <use href="adminasset/svg/icon-sprite.svg#stroke-landing-page"></use>
                </svg>
                <svg class="fill-icon">
                  <use href="adminasset/svg/icon-sprite.svg#fill-landing-page"></use>
                </svg>
                <span>Home</span>
              </a>
            </li>
            <!-- About Page Menu -->
            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
              <a class="sidebar-link sidebar-title link-nav" 
                 href="{{ route('admin_about_page') }}" class="{{ request()->routeIs('admin_about_page') ? 'active' : '' }}">
                <svg class="stroke-icon">
                  <use href="adminasset/svg/icon-sprite.svg#stroke-landing-page"></use>
                </svg>
                <svg class="fill-icon">
                  <use href="adminasset/svg/icon-sprite.svg#fill-landing-page"></use>
                </svg><span>About</span></a>
            </li>
            <!-- Mission & Vision Page Menu -->
            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                <a class="sidebar-link sidebar-title link-nav" 
                   href="{{ route('admin_mission_page') }}" class="{{ request()->routeIs('admin_mission_page') ? 'active' : '' }}">
                <svg class="stroke-icon">
                  <use href="adminasset/svg/icon-sprite.svg#stroke-sample-page"></use>
                </svg>
                <svg class="fill-icon">
                  <use href="adminasset/svg/icon-sprite.svg#fill-sample-page"></use>
                </svg><span>Mission & Vision</span></a>
            </li>
            <!-- Board of Director Page -->
            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
              <a class="sidebar-link sidebar-title link-nav" 
                 href="{{ route('admin_board_of_director') }}" class="{{ request()->routeIs('admin_board_of_director') ? 'active' : '' }}">
                <svg class="stroke-icon">
                  <use href="adminasset/svg/icon-sprite.svg#stroke-internationalization"></use>
                </svg>
                <svg class="fill-icon">
                  <use href="adminasset/svg/icon-sprite.svg#fill-internationalization"></use>
                </svg><span>Board of Directors</span></a>
            </li>
            <!-- Board of Director Page -->
            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
              <a class="sidebar-link sidebar-title link-nav" 
               href="{{ route('admin_distribution') }}" class="{{ request()->routeIs('admin_distribution') ? 'active' : '' }}">
                <svg class="stroke-icon">
                  <use href="adminasset/svg/icon-sprite.svg#stroke-starter-kit"></use>
                </svg>
                <svg class="fill-icon">
                  <use href="adminasset/svg/icon-sprite.svg#fill-starter-kit"></use>
                </svg><span>Distribution</span>
              </a>
            </li>
            <!-- Contact Page -->
            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
            <a class="sidebar-link sidebar-title link-nav" 
               href="{{ route('admin_contact') }}" class="{{ request()->routeIs('admin_contact') ? 'active' : '' }}">
                <svg class="stroke-icon">
                  <use href="adminasset/svg/icon-sprite.svg#stroke-starter-kit"></use>
                </svg>
                <svg class="fill-icon">
                  <use href="adminasset/svg/icon-sprite.svg#invoice"></use>
                </svg><span>Contact</span></a>
            </li>

              <!-- ===================================================== Products Page Link side menu ========================================= -->
            <li class="sidebar-main-title">
              <div>
                <h6>Products</h6>
              </div>
            </li>
            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="landing-page.html">
                <svg class="stroke-icon">
                  <use href="adminasset/svg/icon-sprite.svg#stroke-landing-page"></use>
                </svg>
                <svg class="fill-icon">
                  <use href="adminasset/svg/icon-sprite.svg#fill-landing-page"></use>
                </svg><span>Cylinder</span></a></li>
            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="sample-page.html">
                <svg class="stroke-icon">
                  <use href="adminasset/svg/icon-sprite.svg#stroke-sample-page"></use>
                </svg>
                <svg class="fill-icon">
                  <use href="adminasset/svg/icon-sprite.svg#fill-sample-page"></use>
                </svg><span>Bulk</span></a></li>
            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="translate.html">
                <svg class="stroke-icon">
                  <use href="adminasset/svg/icon-sprite.svg#stroke-internationalization"></use>
                </svg>
                <svg class="fill-icon">
                  <use href="adminasset/svg/icon-sprite.svg#fill-internationalization"></use>
                </svg><span>Reticulation</span></a></li>
            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="../starter-kit/index.html" target="_blank">
                <svg class="stroke-icon">
                  <use href="adminasset/svg/icon-sprite.svg#stroke-starter-kit"></use>
                </svg>
                <svg class="fill-icon">
                  <use href="adminasset/svg/icon-sprite.svg#fill-starter-kit"></use>
                </svg><span>Autogas</span></a></li>


          <!-- ======================================= Others Menu ============================================================ -->
            <li class="sidebar-main-title">
              <div>
                <h6>Others</h6>
              </div>
            </li>

            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                <svg class="stroke-icon">
                  <use href="adminasset/svg/icon-sprite.svg#stroke-widget"></use>
                </svg>
                <svg class="fill-icon">
                  <use href="adminasset/svg/icon-sprite.svg#fill-widget"></use>
                </svg>
                <!--<span class="lan-6">Manage 777</span></a>-->
                <span class="">Settings</span></a>
              <ul class="sidebar-submenu">
                <!--<li><a href="general-widget.html">Home Page 6666</a></li>-->
                <li><a href="general-widget.html">Pasword Change</a></li>
                <li><a href="chart-widget.html">User Create</a></li>
              </ul>
            </li>
          </ul>

          <!-- ======================================== side menu edn ============================================================= -->

        </div>
      <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
    </nav>
  </div>
</div>