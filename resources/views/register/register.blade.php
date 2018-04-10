@extends('layout')
@section('content')
@if(Session::has('success'))
	

<div class="row">
<div class="col-md-12">
<div class="alert alert-success">
{{ Session::get('success')}}
<div>
<div>
<div>
@endif

<style>
	.container{
		width:500px;
		margin:auto;
	}
	
	input:not([type="button"]),select{
		width:380px;
		border-radius:2px;
		height:35px;
		margin-bottom:20px;
		outline:none;
		padding-left:15px;
		box-sizing:border-box;
		border:1px solid #aaa;
	}
	
	.content{
		padding:25px;
		box-sizing:border-box;
		margin-bottom:50px;
	}
	input[type="submit"]{
		height:35px;
		width:120px !important;
		background:#f5f5f5;
		border:1px solid #aaa;
		color:black !important;
		align:center;
	}
	input[type="submit"]:hover{
		background:#4caf50;
		border:1px solid #4caf50;
		color:white !important;
		align:center;
	}
	form{
		background:#f5f5f5;
		padding:20px;
		margin-top:20px;
	}
	h3{
		border:1px solid #ccc;
		padding:15px 0px;
		border-radius:3px;
		font-size:25px;
		background:#f9f9f9;
		text-align:center;
	}
	body{
		background-image: url("imge/3.jpg");
	}
	
</style>
<div class="main">

<div class="content">
<h3>Registration Here </h3>
 <form action="register_action" method="post">
 <input type="hidden" name="_token" value="{{csrf_token()}}">
 <b>User Name:</b></br>
<input type="text" name="uname" placeholder="User Name" /></br>
@if($errors->has('uname')) <p>{{$errors->first('uname')}}</p>@endif
<b>Email:</b></br>
<Input type="Email" name="email" placeholder="Email Address"  /></br>
@if($errors->has('email')) <p>{{$errors->first('email')}}</p>@endif
<b>Password:</b></br>
<input type="password" name="password" placeholder="Password"/></br>
@if($errors->has('password')) <p>{{$errors->first('password')}}</p>@endif
<b>Mobile Number:</b></br>
<Input type="tel" name="mobile_no" placeholder="017******" /></br>
@if($errors->has('mobile_no')) <p>{{$errors->first('mobile_no')}}</p>@endif

<b>Date of Birth:</b></br>
<input type="Date" name="Date"/></br>
@if($errors->has('Date')) <p>{{$errors->first('Date')}}</p>@endif
<b>Gender:</b></br>
<select name="gender">
	<option>---Select gender---</option>
        <option>Male</option>
        <option>Famale</option>
        <option>Other</option>
		</select></br>
@if($errors->has('gender')) <p>{{$errors->first('gender')}}</p>@endif

<b>Country:</b></br>
<select name="country">
<option>---Select Option---</option>
<option value="Bangladesh">Bangladesh</option>
<option value="India">India</option>
<option value="Iran">Iran</option>
<option value="China" >China</option>
</select></br>
</br>
<p style="padding-left:100px;"><input type="submit" name="submit"  style="height:30px;width:100px; color:green;" />
 <input type="reset" style="height:30px; width:100px; color:red;"/></p>
 <p style="text-align:right;"><b> Already a member??<a href="{{URL::to('/login')}}" style="text-decoration:none;""> Login Here</b></a></p> 
  </div>
  </div>
  </form>
@endsection