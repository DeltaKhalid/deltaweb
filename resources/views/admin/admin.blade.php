<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- home page css add -->
    @include('frontend.css')

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Dunzo admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Dunzo admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="adminasset/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="adminasset/images/favicon.png" type="image/x-icon">
    <title>Delta LPG </title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Outfit:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">


    <!--<link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">-->
    <!--<link rel="stylesheet" href="{{ asset('adminasset/style.css') }}" />-->
    <!--<link rel="stylesheet" href="{{ asset('adminasset/css/font-awesome.css') }}" />-->
    <!-- ico-font-->
    <!--<link rel="stylesheet" type="text/css" href="../assets/css/vendors/icofont.css">-->
    <!-- Themify icon-->
    <!--<link rel="stylesheet" type="text/css" href="../assets/css/vendors/themify.css">-->
    <!-- Flag icon-->
    <!--<link rel="stylesheet" type="text/css" href="../assets/css/vendors/flag-icon.css">-->
    <!-- Feather icon-->
    <!--<link rel="stylesheet" type="text/css" href="../assets/css/vendors/feather-icon.css">-->
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <!--<link rel="stylesheet" type="text/css" href="../assets/css/vendors/bootstrap.css">-->
    <!-- App css-->
    <!--<link rel="stylesheet" type="text/css" href="../assets/css/style.css">-->
    <!--<link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">-->
    <!-- Responsive css-->
    <!--<link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">-->


    <link rel="stylesheet" href="{{ asset('adminasset/css/font-awesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('adminasset/css/vendors/icofont.css') }}" />
    <link rel="stylesheet" href="{{ asset('adminasset/css/vendors/themify.css') }}" />
    <link rel="stylesheet" href="{{ asset('adminasset/css/vendors/flag-icon.css') }}" />
    <link rel="stylesheet" href="{{ asset('adminasset/css/vendors/feather-icon.css') }}" />
    <link rel="stylesheet" href="{{ asset('adminasset/css/vendors/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('adminasset/css/style.css') }}" />
    <link id="color" rel="stylesheet" href="{{ asset('adminasset/css/color-1.css') }}" media="screen" />
    <link rel="stylesheet" href="{{ asset('adminasset/css/responsive.css') }}" />


  </head>
  <body>

  <!--<h2 class="section-title__title wow fadeInUp" data-wow-delay="100ms" >Welcome To Delta LPG</h2>-->

    <!-- login page start-->
    <div class="" >
      <div class="row m-0">
        <div class="col-12 p-0">    
          <div class="login-card login-dark">
            <div>
              <div><a class="logo" href="index.html"><img class="img-fluid for-light" src="adminasset/images/logo/logo-1.png" alt="looginpage"><img class="img-fluid for-dark" src="../assets/images/logo/logo.png" alt="looginpage"></a></div>
              <div class="login-main"> 
                <form class="theme-form">
                  <h3>Sign in to account</h3>
                  <p>Enter your username & password to login</p>
                  <div class="form-group">
                    <label class="col-form-label">User Name</label>
                    <input class="form-control" type="email" required="" placeholder="admin user">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label">Password</label>
                    <div class="form-input position-relative">
                      <input class="form-control" type="password" name="login[password]" required="" placeholder="*********">
                      <div class="show-hide"><span class="show">                         </span></div>
                    </div>
                  </div>
                  <div class="form-group mb-0">
                    <div class="checkbox p-0">
                      <input id="checkbox1" type="checkbox">
                      <label class="text-muted" for="checkbox1">Remember password</label>
                    </div><a class="link" href="forget-password.html">Forgot password?</a>
                    <div class="text-end mt-3">
                      <button class="btn btn-primary btn-block w-100" type="submit">Sign in</button>
                    </div>
                  </div>
                  <!--<h6 class="text-muted mt-4 or">Or Sign in with</h6>-->
                  <!--<div class="social mt-4">
                    <div class="btn-showcase"><a class="btn btn-light" href="https://www.linkedin.com/login" target="_blank"><i class="txt-linkedin" data-feather="linkedin"></i> LinkedIn </a><a class="btn btn-light" href="https://twitter.com/login?lang=en" target="_blank"><i class="txt-twitter" data-feather="twitter"></i>twitter</a><a class="btn btn-light" href="https://www.facebook.com/" target="_blank"><i class="txt-fb" data-feather="facebook"></i>facebook</a></div>
                  </div>-->
                  <p class="mt-4 mb-0 text-center">Don't have account?<a class="ms-2" href="sign-up.html">Create Account</a></p>
                </form>
              </div>
            </div>
          </div>
        </div>

      </div>



    <script src="{{ asset('adminasset/js/jquery.min.js') }}"></script>
    <script src="{{ asset('adminasset/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('adminasset/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('adminasset/js/icons/feather-icon/feather-icon.js') }}"></script>
    <script src="{{ asset('adminasset/js/config.js') }}"></script>
    <script src="{{ asset('adminasset/js/script.js') }}"></script>

      <!-- latest jquery-->
      <!--<script src="../assets/js/jquery.min.js"></script>-->
      <!-- Bootstrap js-->
      <!--<script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>-->
      <!-- feather icon js-->
      <!--<script src="../assets/js/icons/feather-icon/feather.min.js"></script>-->
      <!--<script src="../assets/js/icons/feather-icon/feather-icon.js"></script>-->
      <!-- scrollbar js-->
      <!-- Sidebar jquery-->
      <!--<script src="../assets/js/config.js"></script>-->
      <!-- Plugins JS start-->
      <!-- Plugins JS Ends-->
      <!-- Theme js-->
      <!--<script src="../assets/js/script.js"></script>-->
      <!-- Plugin used-->
    </div>
  </body>
</html>