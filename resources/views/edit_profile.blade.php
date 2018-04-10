@extends('layout2')
@section('content')
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
	}
	input[type="submit"]:hover{
		background:#4caf50;
		border:1px solid #4caf50;
		color:white !important;
		
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
		background-image: url("imge/6.jpg");
	}
	
</style>

<div class="main">

<div class="content">
<h3>Update your profile</h3>
 <form align="center" action="update_profile&<?php echo $Data->id?>" method="post">
 
 <input type="hidden" name="_token" value="{{csrf_token()}}">
 <b>User Name:</b></br>
<input type="text" name="uname" placeholder="User Name" value="{{$Data->name}}" required /></br>

<b>Email:</b></br>
<Input type="Email" name="email" placeholder="Email Address" value="{{$Data->email}}" required /></br>

<b>Password:</b></br>
<input type="password" name="password" placeholder="Password" value="{{$Data->password}}"required /></br>

<b>Mobile Number:</b></br>
<Input type="tel" name="mobile_no" placeholder="017******" value="{{$Data->mobile}}" required /></br>

<b>Country:</b></br>
<select name="country">
<option>---Select Option---</option>
<option value="Bangladesh">Bangladesh</option>
<option value="India">India</option>
<option value="Iran">Iran</option>
<option value="China" >China</option>
</select></br>
</br>
<input type="submit" name="Update" value="Update"/>
 </p>

  </div>
   </form>
  </div>
 @endsection

  
