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
                    <form action="{{ url ('save_upload') }}" method="post" enctype="multipart/form-data" class="dropzone" id ="dropzone">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src="js/fastclick.js" type="text/javascript"></script>
    <!-- NProgress -->
    <script src="js/nprogress.js" type="text/javascript"></script>
    <!-- Dropzone.js -->
    <script src="js/dropzone.min.js" type="text/javascript"></script>
    <!-- Custom Theme Scripts -->
    <!-- <script src="js/custom.min.js" type="b4de77f5c0b6e259bf3650c1-text/javascript"></script> -->

  <!-- <script src="js/rocket-loader.min.js" data-cf-settings="b4de77f5c0b6e259bf3650c1-|49" defer=""></script> -->

<script type="text/javascript">
Dropzone.autoDiscover = false;
$(document).ready(function(){
    uploader = new Dropzone(".dropzone",{
        paramName : "file",
        uploadMultiple :false,
        acceptedFiles : ".csv, .xls, .xlsx, .xlsm",
        addRemoveLinks: true,
        forceFallback: false,
        maxFilesize:1000,
        parallelUploads: 1,

    });//end drop zone

  uploader.on("success", function(file,response) {
   console.log(response)
  });


});
  
</script>

</body>
</html>