<!DOCTYPE html>
<html lang="en">
<head>    
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FelixVideos</title>
    <link rel="icon" href="{{asset('/assets/images/favi_icon.png')}}">
    
    <!-- Bootstrap -->
    <link href="{{asset('/assets/css/bootstrap.min.css')}}" type="text/css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('/assets/css/font-awesome.min.css')}}" type="text/css" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('/assets/css/nprogress.css')}}" type="text/css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{asset('/assets/css/animate.min.css')}}" type="text/css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('/assets/css/custom.min.css')}}" type="text/css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
      <a class="hiddenanchor" id="reset"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
          <form class="form-horizontal" method="POST" action="{{ route('login') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <h1>LOGIN FORM</h1>
              <div>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus />
                    @if ($errors->has('email'))
                    <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
              </div>
              <div>
                <input id="password" type="password" class="form-control" name="password" required />
                    @if ($errors->has('password'))
                        <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
              </div>
              <div>
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
              </div>
              <div>
                <button type="submit" class="btn btn-primary">Log in</button>
                <!-- <a class="reset_pass" href="#reset" style="color:#72b326;">Reset Password?</a> -->
                <a class="btn btn-link" href="{{ route('password.request') }}">Forgot Your Password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register" style="color:#72b326;"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                   <h1><img src="/assets/images/logo_login.png" width="200" height="34" alt="logo"></h1>
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
          <form class="form-horizontal" method="POST" action="{{ route('register') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <h1>CREATE ACCOUNT</h1>
              <div>
              <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="Username">
                @if ($errors->has('name'))
                <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
              </div>
              <div>
              <input id="email_reg" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Email">
                @if ($errors->has('email'))
                    <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
              </div>
              <div>
              <input id="password_reg" type="password" class="form-control" name="password" required placeholder="Password">
                @if ($errors->has('password'))
                <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
              </div>
              <div>
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm-Password">
              </div>
              <div>
                <button type="submit" class="btn btn-primary">Register</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register" style="color:#72b326;"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><img src="/assets/images/logo_login.png" width="200" height="34" alt="logo"></h1>
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
