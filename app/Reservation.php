<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Input;

class Reservation extends Model
{
    protected $table="reservation_users";
    public static function formstore($data)
	//geting data from reservation controller
	{
	
		$username=Input::get('uname');
		$email=Input::get('email');
		$mobile=Input::get('mobile_no');
		$check_in=Input::get('Date');
		$check_out=Input::get('tata');
		$adult=Input::get('adul');
		$kids=Input::get('kid');
		$room_type=Input::get('room');
		$room_no=Input::get('rom');
		$description=Input::get('des');
		
		
		
		
		$reser=new Reservation();	
		$reser->name=$username;
		$reser->email=$email;
		$reser->mobile=$mobile;
		$reser->checkin=$check_in;
		$reser->checkout=$check_out;
		$reser->adults=$adult;
		$reser->kids=$kids;
		$reser->roomtype=$room_type;
		$reser->roomno=$room_no;
		$reser->description=$description;
		
		$reser->save();
	}
}
