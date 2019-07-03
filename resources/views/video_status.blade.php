@extends('master')
@section('page_content')
<div class="right_col" role="main">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<table class="table table-bordered" id="passenger_table">
<tr><th>Sl. No.</th><th>Traveler Name</th><th>Passenger Name</th><th>Age</th><th>Gender</th><th>Booking Date</th><th>Journey Date</th><th>Booking From</th><th>Booking To</th><th>Airport Name</th><th>Flight Time</th><th>Status</th></tr>
    <?php $i=1 ?>
    @foreach($video_requested as $video)
    <tr class="p_detail_row">
        <td> {{$i}} </td>
        <td rel="traveler_name" class="data"> {{$video["traveler_name"]}} </td>
        <td rel="passenger_name" class="data"> {{$video["passenger_name"]}} </td>
        <td rel="age" class="data"> {{$video["age"]}} </td>
        <td rel="gender" class="data"> {{$video["gender"]}} </td>
        <td rel="booking_date" class="data"> {{$video["booking_date"]}} </td>
        <td rel="journey_date" class="data"> {{$video["journey_date"]}} </td>
        <td rel="booking_from" class="data"> {{$video["booking_from"]}} </td>
        <td rel="booking_to" class="data"> {{$video["booking_to"]}} </td>
        <td rel="airport_name" class="data"> {{$video["airport_name"]}} </td>
        <td rel="flight_time" class="data"> {{$video["flight_time"]}} </td>
        <td rel="video_status" class="data"> {{$video["video_status"]}} </td>
    </tr>
    <?php $i++; ?>
    @endforeach
</table>
<button type="button" name="video" class="btn btn-success" id="create_video">Create Video</button>
</div>    
</div>    
</div>    
@endsection     

@section('script')
<script type="text/javascript">
$(document).ready(function(){
    $("body").on("click","#create_video",function(){
        $("#passenger_table tr.p_detail_row").each(function(i) {
            var arr = {};
                $(this).find("td.data").each(function() {
                arr[$(this).attr("rel")] = $(this).text().trim();                
            });
            // console.log(i); 
            var post_data = JSON.stringify(arr);   
            console.log(post_data);
            $.post("/render_video", { "_token": "{{ csrf_token() }}",'post_data':post_data},function(resp){
              console.log(resp);
            });
        });
  });

});
</script>
@endsection 