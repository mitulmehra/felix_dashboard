@extends('master')
@section('style')
<!-- Dropzone.js -->
<link href="{{asset('/assets/css/dropzone.min.css')}}" type="text/css" rel="stylesheet">
@endsection
@section('page_content')

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
                    <h2>Passenger file uploader</h2>
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

                  <div id="fileval">
                  </div>
                 <input type="hidden" name="template_id" value="<?php  echo  (isset($_GET['template_id']) ? $_GET['template_id'] :1) ; ?>">
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

@endsection 
@section('script')
<script src="{{asset('/assets/js/dropzone.min.js')}}" type="text/javascript"></script>
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

  uploader.on("success", function(file,resp) 
  {
    resp = JSON.parse(resp);
     
    var out ='<table class="table table-bordered" id="passenger_table">';
    resp.forEach(function(item)
    {
      out +="<tr><th>Sl. No.</th><th>Traveler Name</th><th>Passenger Name</th><th>Age</th><th>Gender</th><th>Booking Date</th><th>Journey Date</th><th>Booking From</th><th>Booking To</th><th>Airport Name</th><th>Flight Time</th></tr>";
      for (var i = 1; i < item.length; i++)
      {
        out +="<tr>";
        out +="<td>"+i+"</td>";
        for (var j = 0; j < item[i].length; j++)
        {          
          out +="<td>";
          out += item[i][j];
          out +="</td>";
        }        
        out +="</tr>";
      }
    });
    out += "</table>";
    // out +="<button type=\"button\" name=\"video\" class=\"btn btn-success\" id=\"create_video\">Create Video</button>";
    out +="<a href=\"/create_video\" role=\"button\" name=\"video\" class=\"btn btn-success\" id=\"create_video\">Create Video</button>";
    $("#fileval").html(out);
  });

  

}); 
</script>
  @endsection 