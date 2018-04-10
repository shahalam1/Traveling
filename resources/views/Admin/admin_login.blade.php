@extends('layout1')
@section('content')
<style>
	.container{
		width:500px;
	}
	form{
		margin-top:30px;
	}
	input:not([type="button"]){
		width:420px;
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
		background:#f5f5f5;
		margin-top:3px;
		margin-bottom:5px;
	}
	input[type="submit"]{
		height:35px;
		width:120px;
		background:#f5f5f5;
		border:1px solid #aaa;
		color:black !important;
	}
	input[type="submit"]:hover{
		background:#4caf50;
		border:1px solid #4caf50;
		color:white !important;
		
	}
	h1{
		border:1px solid #ccc;
		padding:15px 0px;
		border-radius:3px;
		font-size:25px;
		background:#f9f9f9;
	}
	body{
		background-image: url("imge/9.jpg");
	}
	
</style>

 <center>
<h1>Admin Login</h1>
</center>
<div class="content">
<form action="admin_login" method="post">
 <input type="hidden" name="_token" value="{{csrf_token()}}">

<b>User Email:</b></br>
<Input type="email"  name="email" />
@if($errors->has('email')) <p>{{$errors->first('email')}}</p>@endif
<b>Password:</b></br>
<Input type="password" name="password" /></br>
<div>
@if($errors->has('password')) <p>{{$errors->first('password')}} </p>@endif
</div>
@if(Session::has('failure'))
<div class="row">
<div class="col-md-12">
<div class="alert alert-success">
{{ Session::get('failure')}}
<div>
<div>
<div>
@endif
</br>
<input type="submit" name="submit" value="Log In"  style="height:30px;width:100px; color:green;" /> 

@endsection


  


