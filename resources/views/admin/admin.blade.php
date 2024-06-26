<!DOCTYPE html>
<html lang="en">
  <!-- ================================================= css link ========================================== -->
 @include('admin.admincss')
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


        <!-- ====================================== inclede of js ===============================================-->
                 <!-- ====================================== inclede of js ===============================================-->
        @include('frontend.js')
        

    </div>
  </body>
</html>