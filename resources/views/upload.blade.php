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
    <!-- Dropzone.js -->
    <link href="css/dropzone.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
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

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Upload Files</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Dropzone multiple file uploader</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p>Drag multiple files to the box below for multi upload or click to select files. This is for demonstration purposes only, the files are not uploaded to any server.</p>
                    <form enctype="multipart/form-data" action="{{ url ('save_upload') }}" method="post" id="add-courses">
                      <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                      <input type="file" name="file" id="file">
                      <input type="submit" value="upload">
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
          @include('layout/footer')
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.min.js" type="b4de77f5c0b6e259bf3650c1-text/javascript"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js" type="b4de77f5c0b6e259bf3650c1-text/javascript"></script>
    <!-- FastClick -->
    <script src="js/fastclick.js" type="b4de77f5c0b6e259bf3650c1-text/javascript"></script>
    <!-- NProgress -->
    <script src="js/nprogress.js" type="b4de77f5c0b6e259bf3650c1-text/javascript"></script>
    <!-- Dropzone.js -->
    <script src="js/dropzone.min.js" type="b4de77f5c0b6e259bf3650c1-text/javascript"></script>
    <!-- Custom Theme Scripts -->
    <script src="js/custom.min.js" type="b4de77f5c0b6e259bf3650c1-text/javascript"></script>
<!-- Google Analytics -->
<script type="b4de77f5c0b6e259bf3650c1-text/javascript">
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-23581568-13', 'auto');
ga('send', 'pageview');
</script>
  <script src="js/rocket-loader.min.js" data-cf-settings="b4de77f5c0b6e259bf3650c1-|49" defer=""></script></body>
</html>