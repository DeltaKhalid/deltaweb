<html>

<!-- *** admin_master.blade.php is the "domain/dashboard" Link -->

<!-- ================================================= css link ========================================== -->
@include('admin.admincss')

<!-- ================================================= Body Area ========================================= -->
  <body> 
    <!-- loader starts-->
    <div class="loader-wrapper">
      <div class="theme-loader">    
        <div class="loader-p"></div>
      </div>
    </div>
    <!-- loader ends-->

    <!-- Empty Space for body content -->
    <div class="empty_space_300"></div>

    <div class="col-xxl-12 col-xl-100 box-col-12 proorder-xl-12">
      <div class="card_dashboard_body sales overview">
        <!-- Page Headline -->
        <div class="card-header card-no-border pb-0">
          <div class="header_title_default_dashboard">
              <h4>Default Dashboard</h4>
              <div class="dropdown icon-dropdown">
              <!--<button class="btn dropdown-toggle" id="userdropdown5" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>-->
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown5"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
              </div>
          </div>
        </div>

        <div class="card-body p-0"> 
          <!-- Container-fluid starts-->
          <div class="container-fluid default-dashboard">
              <div class="row">
                <!-- Empty Space 30 px -->
                <div class="empty_space_30"></div>
                <!-- ============================================ Edit Item Area is start ===================================== -->
                <div class="col-xl-12 col-xl-100 box-col-12">
                  <div class="row"> 
                    <!-- ============== Item 1 "Header" ===================== -->
                    <div class="col-xxl-3 col-xl-50 col-sm-6 proorder-xl-2">
                      <div class="card since">
                        <div class="card-body">
                          <div class="customer-card d-flex b-l-primary border-2">
                            <div class="ms-3">
                              <h3 class="mt-1"></h3>
                              <h5 class="mt-1">Header Topbar</h5>
                            </div>
                            <div class="dashboard-user bg-light-primary"><span></span>
                              <svg>
                                <!--<use href="adminasset/svg/icon-sprite.svg#male"></use>-->
                                <use href="adminasset/svg/icon-sprite.svg#edit-content"></use>
                              </svg>
                            </div>
                          </div>
                          <div class="customer mt-2"><span class="me-1">
                              <svg>
                                <use href="adminasset/svg/icon-sprite.svg#arrow-up"></use>
                              </svg></span><span class="font-success me-2"></span><span>For change Header information</span></div>
                        </div>
                      </div>
                    </div>
                    <!-- ============== Item 2 "slider" ===================== -->
                    <div class="col-xxl-3 col-xl-50 col-sm-6 proorder-xl-3">
                      <div class="card since">
                        <div class="card-body money">
                          <div class="customer-card d-flex b-l-secondary border-2">
                            <div class="ms-3">
                              <h3 class="mt-1"></h3>
                              <h5 class="mt-1">Slider</h5>
                            </div>
                            <div class="dashboard-user bg-light-secondary"><span></span>
                              <svg>
                              <use href="adminasset/svg/icon-sprite.svg#edit-content"></use>
                              </svg>
                            </div>
                          </div>
                          <div class="customer mt-2"><span class="me-1">
                              <svg>
                                <use href="adminasset/svg/icon-sprite.svg#arrow-up"></use>
                              </svg></span><span class="font-success me-2">for changeing slider Image </span></div>
                        </div>
                      </div>
                    </div>
                    <!-- ============== Item 3 "News Update" ===================== -->
                    <div class="col-xxl-3 col-xl-50 col-sm-6 proorder-xl-4">
                      <div class="card since"> 
                        <div class="card-body profit">
                          <div class="customer-card d-flex b-l-danger border-2">
                            <div class="ms-3">
                              <h3 class="mt-1"></h3>
                              <h5 class="mt-1">NEWS update</h5>
                            </div>
                            <div class="dashboard-user bg-light-danger"><span></span>
                              <svg>
                              <use href="adminasset/svg/icon-sprite.svg#edit-content"></use>
                              </svg>
                            </div>
                          </div>
                          <div class="customer mt-2"><span class="me-1">
                              <svg>
                              <use href="adminasset/svg/icon-sprite.svg#arrow-up"></use>
                              </svg></span><span class="font-success me-2">for NEWS update </span></div>
                        </div>
                      </div>
                    </div>
                    <!-- ============== Item 4 "News Update" ===================== -->
                    <div class="col-xxl-3 col-xl-50 col-sm-6 proorder-xl-5">
                      <div class="card since"> 
                        <div class="card-body invoice-profit">
                          <div class="customer-card d-flex b-l-success border-2">
                            <div class="ms-3">
                              <h3 class="mt-1"></h3>
                              <h5 class="mt-1">Delta Video</h5>
                            </div>
                            <div class="dashboard-user bg-light-success"><span></span>
                              <svg>
                              <use href="adminasset/svg/icon-sprite.svg#edit-content"></use>
                              </svg>
                            </div>
                          </div>
                          <div class="customer mt-2"><span class="me-1">
                              <svg>
                                <use href="adminasset/svg/icon-sprite.svg#arrow-up"></use>
                              </svg></span><span class="font-success me-2">For changing video click hare</span></div>
                        </div>
                      </div>
                    </div>
                    <!-- ============== Item 5 "Header" ===================== -->
                    <div class="col-xxl-3 col-xl-50 col-sm-6 proorder-xl-2">
                      <div class="card since">
                        <div class="card-body">
                          <div class="customer-card d-flex b-l-primary border-2">
                            <div class="ms-3">
                              <h3 class="mt-1"></h3>
                              <h5 class="mt-1">Footer</h5>
                            </div>
                            <div class="dashboard-user bg-light-primary"><span></span>
                              <svg>
                                <!--<use href="adminasset/svg/icon-sprite.svg#male"></use>-->
                                <use href="adminasset/svg/icon-sprite.svg#edit-content"></use>
                              </svg>
                            </div>
                          </div>
                          <div class="customer mt-2"><span class="me-1">
                              <svg>
                                <use href="adminasset/svg/icon-sprite.svg#arrow-up"></use>
                              </svg></span><span class="font-success me-2"></span><span>For change Footer information</span></div>
                        </div>
                      </div>
                    </div>
                    <!-- ============== Item 6 "Logo" ===================== -->
                    <div class="col-xxl-3 col-xl-50 col-sm-6 proorder-xl-3">
                      <div class="card since">
                        <div class="card-body money">
                          <div class="customer-card d-flex b-l-secondary border-2">
                            <div class="ms-3">
                              <h3 class="mt-1"></h3>
                              <h5 class="mt-1">Logo</h5>
                            </div>
                            <div class="dashboard-user bg-light-secondary"><span></span>
                              <svg>
                              <use href="adminasset/svg/icon-sprite.svg#edit-content"></use>
                              </svg>
                            </div>
                          </div>
                          <div class="customer mt-2"><span class="me-1">
                              <svg>
                                <use href="adminasset/svg/icon-sprite.svg#arrow-up"></use>
                              </svg></span><span class="font-success me-2">for changeing Logo Image </span></div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
          </div>

          <!--<div class="sales-chart">
              <div class="shap-2">
              <div class="rounded-shap animate-bg-secondary"><i></i><i></i></div>
              </div>
              <div class="shap-2">
              <div class="rounded-shap animate-bg-secondary"><i></i><i></i></div>
              </div>
              <div class="shap-2">
              <div class="rounded-shap animate-bg-secondary"><i></i><i></i></div>
              </div>
              <div class="shap-2">
              <div class="rounded-shap animate-bg-secondary"><i></i><i></i></div>
              </div>
              <div id="sales-overview"></div>
          </div>-->

        </div>

      </div>
    </div>
      
      <!-- tap on top starts-->
      <!--<div class="tap-top"><i data-feather="chevrons-up"></i></div>-->
      <!-- tap on tap ends-->
      <!-- page-wrapper Start-->

      <div class="page-wrapper compact-wrapper" id="pageWrapper">

      <!-- ==================================================== Page Header Menu Include ===================================================== -->
        @include('admin.admin_head_menu')



        <!-- ==================================================== Page Body Start ============================================================== -->
        <div class="page-body-wrapper">



        <!-- ===================================================  Sidebar Menu Include ========================================================= -->
        @include('admin.admin_sidebar')



          <!-- top margin as empty space for bottom text of "2024 Delta LPG. All Rights Reserved." -->
          <div class="">
            <div class="container-fluid"></div>
            <!-- 300px empty space-->
            <div class="empty_space_300"></div>

            <!-- Container-fluid Ends-->
          </div>
          <!-- ===================================================== footer start ============================================================== -->
          <footer class="footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6 p-0 footer-copyright">
                  <p class="mb-0">© 2024 Delta LPG. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 p-0">
                  <!--<p class="heart mb-0">Hand crafted &amp; made with
                    <svg class="footer-icon">
                      <use href="adminasset/svg/icon-sprite.svg#heart"></use>
                    </svg>
                  </p>-->
                </div>
              </div>
            </div>
          </footer>
        </div>
      </div>

    <!-- ====================================== inclede of js ===============================================-->
    @include('admin.js')

  </body>

</html>