<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Input;
use Redirect;
use Validator;
use App\Register;
use Auth;
use Hash;
class RegisterController extends Controller
{
	public function store()
	{
		$data=Input::except(array('_token'));
	   $rule= array(
	  'uname'=>'required',
	  'email'=>'required|email',
	  'password'=>'required|min:6',
	  'mobile_no'=>'required',
	  'Date'=>'required',
	  'gender'=>'required',
	  );
	   $validator = Validator::make($data,$rule);
	    if($validator->fails())
		{
		return Redirect::to('register')->withErrors($validator);
		}
		else
		{
		    Register::formstore($data);
			return Redirect::to('login')->with('success','Succesfully registered! Login now!!');	
		}  
	}
	
	
	
	public function stores()
	{
		$data=Input::except(array('_token'));
	   $rule= array(
	  'uname'=>'required',
	  'email'=>'required|email',
	  'password'=>'required|min:6',
	  'mobile_no'=>'required',
	  'Date'=>'required',
	  'gender'=>'required',
	  );
	   $validator = Validator::make($data,$rule);
	    if($validator->fails())
		{
		return Redirect::to('insert')->withErrors($validator);
		}
		else
		{
		    Register::formstore($data);
			return Redirect::to('users')->with('success','Succesfully registered! Login now!!');	
		}  
	}
	
	
	public function login()
	{
	  $data=Input::except(array('_token'));
	  $rule= array(
	  'email'=>'required|email',
	  'password'=>'required',
	  );
	  $validator = Validator::make($data,$rule);
	  if($validator->fails())
	  { 
		  return Redirect::to('login')->withErrors($validator);
	  }
	  else
	  {
		 $userdata=array(
		 'email'=>Input::get('email'),
		 'password'=>Input::get('password'),
		 );
		  if(Auth::attempt($userdata))
		  {
			return Redirect::to('join');
		  }
		  else
		  {
			  return Redirect::to('login')->with('failure','Invalid Email or Password!');  
		  }
	  }	
	}
	
	
	public function logins()
	{
	  $data=Input::except(array('_token'));
	  $rule= array(
	  'email'=>'required|email',
	  'password'=>'required',
	  );
	  $validator = Validator::make($data,$rule);
	  if($validator->fails())
	  { 
		  return Redirect::to('login')->withErrors($validator);
	  }
	  else
	  {
		 $userdata=array(
		 'email'=>Input::get('email'),
		 'password'=>Input::get('password'),
		 );
		  if(Auth::attempt($userdata))
		  {
			return Redirect::to('dashbord');
		  }
		  else
		  {
			  return Redirect::to('adminlogin')->with('failure','Invalid Email or Password!');  
		  }
	  }	
	}
	
	public function show_users(){
		$data=Register::paginate();
		return view('user_list' , compact('data'));
	}
	
	public function edit($id)
	{
		$Data= Register:: findOrFail($id);
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
	
	
	public function edit_profile($id)
	{
		$Data= Register:: findOrFail($id);
		 return view('edit_profile', compact('Data'));
		
	}
	public function update_profile(  Request $request,$id)
	{
		$Data= Register:: findOrFail($id);
		$Data->name=$request->uname;
		$Data->email=$request->email;
		$Data->password=Hash::make($request->password);
		$Data->mobile=$request->mobile_no;
		$Data->country=$request->country;
		
		$Data->save();
		return Redirect('profile');
		
	}
	
	public function delete_user($id)
	{
		$user= Register:: findOrFail($id);
         $user->delete();
			return Redirect('users')->with('msg',' One User deteted successfully');
	}
	
	
	public function admin_profile()
    {
		$data=Input::except(array('_token'));
		$email=Input::get('email');
		$password=Input::get('password');
		if($email=="admin@gmail.com" && $password=="1234")
		{
			return redirect('/dashbord');
		}
		else
		{
			return redirect('/adminlogin');
			
		}
    }
}
