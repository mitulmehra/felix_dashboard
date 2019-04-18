<?php namespace App;


use Illuminate\Database\Eloquent\Model;

class Passenger extends Model {	

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'passenger';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['traveler_id','traveler_name', 'passenger_name', 'age', 'gender', 'booking_date', 'journey_date', 'booking_from', 'booking_to', 'airport_name', 'flight_time','video_status' ];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	// protected $hidden = ['password', 'remember_token'];

	public $timestamps = false;

}