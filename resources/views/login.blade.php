<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FelixVideos Login</title>
    <link  rel="icon" href="images/favi_icon.png">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="css/font-awesome.min.css" type="text/css" rel="stylesheet">
    <!-- NProgress -->
    <link href="css/nprogress.css" type="text/css" rel="stylesheet">    
    <!-- Animate.css -->
    <link type="text/css" href="css/animate.min.css" rel="stylesheet">
    <!-- Custom styling plus plugins -->
    <link href="css/custom.min.css" type="text/css" rel="stylesheet">
    
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
      <a class="hiddenanchor" id="reset"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form>
              <h1>LOGIN FORM</h1>
              <div>
                <input type="text" class="form-control" placeholder="E-mail" name="email" type="email" autofocus/>
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="password" type="password" value=""/>
              </div>
              <div>
                <a class="btn btn-default submit" href="{{ url ('login') }}">Log in</a>
                <a class="reset_pass" href="#reset" style="color:#72b326;">Reset Password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register" style="color:#72b326;"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                   <h1><img src="images/logo_login.png" width="200" height="34" alt="logo"></h1>
                  <p>© 2019 FelixVideos . All rights reserved.</p>
                </div>
              </div>
            </form>
          </section>
        </div>
        
        <!--<div id="reset" class="animate form reset_form">
          <section class="login_content">
            <form>
              <h1>Reset Password</h1>
              <div>
                <input type="password" class="form-control" placeholder="New Password" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Confirm Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Submit</a>                
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register" style="color:#72b326;"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                   <h1><img src="images/logo_login.png" width="200" height="34" alt="logo"></h1>
                  <p>© 2019 FelixVideos . All rights reserved.</p>
                </div>
              </div>
            </form>
          </section>
        </div>-->
        
        
        
        

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>CREATE ACCOUNT</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register" style="color:#72b326;"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><img src="images/logo_login.png" width="200" height="34" alt="logo"></h1>
                  <p>© 2019 FelixVideos . All rights reserved.</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
