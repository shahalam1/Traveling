<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use App\Reservation;
use Redirect;
use Validator;
class ReservationController extends Controller
{
    public function store()
	{
	   $data=Input::except(array('_token'));
	     
		
		    Reservation::formstore($data);
			return Redirect::to('reservationshow')->with('success');	
		
	
}

 public function stores()
	{
	   $data=Input::except(array('_token'));
	     
		
		    Reservation::formstore($data);
			return Redirect::to('reseruser')->with('success');	
		
	
}




public function show_reser(){
		$data=Reservation::paginate();
		return view('reservation_user' , compact('data'));
	}
	
	
	public function delete_user($id)
	{
		$user= Reservation:: findOrFail($id);
         $user->delete();
			return Redirect('reseruser')->with('msg',' One User deteted successfully');
	}
	
	
	
	
	
	
	public function edit($id)
	{
		$Data= Reservation:: findOrFail($id);
		 return view('edit_user', compact('Data'));
		
	}
	
	public function update(  Request $request,$id)
	{
		$Data= Register:: findOrFail($id);
		$Data->name=$request->uname;
		$Data->email=$request->email;
		$Data->password=Hash::make($request->password);
		$Data->mobile=$request->mobile_no;
		$Data->country=$request->country;
		
		$Data->save();
		return Redirect('users');
		
	}
	
	
}








?>