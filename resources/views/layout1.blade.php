<!DOCTYPE html>
<html >
<head>
  <title>Home</title>
  
  <style>
input{width:600px; height:30px;border:1px solid #990000; border-radius: 10px;padding:2px; }
.con{background-color:; width:55%;  border-radius:5px;}
select{width:600px; height:30px; border:1px solid #990000; border-radius:5px;}
</style>
  
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-color:">
<nav class="navbar navbar-light">
  <div class="container-fluid">
    
	@if(Auth::user())
		<div class="navbar-header">
      <a class="navbar-brand" href="#">Home</a>
    </div>
	  
		  <ul class="nav navbar-nav navbar-right">
      <li><a href="{{URL::to('/logout')}}">
	  
	 <span style="color:white"> {{ ucwords(Auth::user()->name) }}</span>  <span class="glyphicon glyphicon-user"></span> Logout</a></li>
    </ul>
	  @else
	    <ul class="nav navbar-nav">  
       </ul>
    
	@endif
  </div> 
</nav>  
<div class="container">
  @yield('content')
</div>

</body>
</html>
