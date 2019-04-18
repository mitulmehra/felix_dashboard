@extends('master')
@section('page_content')
<div class="right_col" role="main">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<table class="table table-bordered">
<tr><th>Sl. No.</th><th>Traveler Name</th><th>Passenger Name</th><th>Age</th><th>Gender</th><th>Booking Date</th><th>Journey Date</th><th>Booking From</th><th>Booking To</th><th>Airport Name</th><th>Flight Time</th><th>Status</th></tr>
    <?php $i=1 ?>
    @foreach($video_requested as $video)
    <tr>
        <td> {{$i}} </td>
        <td> {{$video["traveler_name"]}} </td>
        <td> {{$video["passenger_name"]}} </td>
        <td> {{$video["age"]}} </td>
        <td> {{$video["gender"]}} </td>
        <td> {{$video["booking_date"]}} </td>
        <td> {{$video["journey_date"]}} </td>
        <td> {{$video["booking_from"]}} </td>
        <td> {{$video["booking_to"]}} </td>
        <td> {{$video["airport_name"]}} </td>
        <td> {{$video["flight_time"]}} </td>
        <td> {{$video["video_status"]}} </td>
    </tr>
    <?php $i++; ?>
    @endforeach
</table>
</div>    
</div>    
</div>    
@endsection     