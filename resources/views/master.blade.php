<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FelixVideos</title>
    <link type="text/css" rel="icon" href="images/favi_icon.png">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="css/nprogress.css" rel="stylesheet">
    
    <!-- Custom styling plus plugins -->
    <link href="css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        
        <!-- sidebar menu -->
          @include('layout/menu')
        <!-- /sidebar menu -->
            
        <!-- top navigation -->
          @include('layout/header')
        <!-- /top navigation -->

        @yield('page_content')





         <!-- /page content -->

        <!-- footer content -->
        @include('layout/footer')
        <!-- /footer content -->
      </div>
    </div>
    <!-- jQuery -->
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src="js/fastclick.js" type="text/javascript"></script>
    <!-- NProgress -->
    <script src="js/nprogress.js" type="text/javascript"></script>
    <!-- Custom Theme Scripts -->
    <script src="js/custom.min.js" type="text/javascript"></script>

</html>