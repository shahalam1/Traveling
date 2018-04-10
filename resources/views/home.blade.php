@extends('layout')
@section('content')
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale-1,maximum-scale-1" />
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/shah.css">
</head>
<style>
#mySidenav a {
    position: absolute;
    left: -80px;
    transition: 0.3s;
    padding: 15px;
    width: 100px;
    text-decoration: none;
    font-size: 20px;
    color: white;
    border-radius: 0 5px 5px 0;
	margin-top:-1.5%;
}

#mySidenav a:hover {
    left: 0;
}
#Admin {
    top: 80px;
    background-color: #004466
}

img{
max-width:100%;
}
.caja{
border: 0.5px solid #999;
box-sizing: border-box;
color: #444;
display: inline-block;
padding:1em;
width: 32%;
margin:0.5%;
}
body{
	width:100%;
}
</style>

<body>


<div class="slider">
		<figure>
			<div class="slide">
				<img src="shah/1.jpg">
			</div>

			<div class="slide">
				<img src="shah/2.jpg">
			</div>

			<div class="slide">
				<img src="shah/3.jpg">
			</div>

			<div class="slide">
				<img src="shah/4.jpg">
			</div>
			
			<div class="slide">
				<img src="shah/1.jpg">
			</div>

			
		</figure>
	</div>

<br>


<div id="mySidenav" class="sidenav">
<a href="{{URL::to('/adminlogin')}}" id="Admin">Admin</a>
</div>

<div class="caja">
<img src="image/CoupleDelux.jpg" alt="pajaro">
<p>
Novem Couple Deluxe is at the center of Novem Empire.
You can get to the badminton court, swimming pool, lawns and restaurantand.
</p>
</div>


<div class="caja">
<img src="image/couplevilla.jpg" alt="pajaro">
<p>
Novem Couple Villa is at the hill top of Novem. You can get 
to the stunning view of pineapple gardens of adjacent valleys their own private pools and lawns.
</p>
</div>


<div class="caja">
<img src="image/woodcottage.jpg" alt="pajaro">
<p>
Novem Luxury wood cottagesredefine luxury and nobility.
Fully made and furnished with wood, the cottages have 
their own private pools and lawns.
</p>
</div>


<div class="caja">
<img src="image/Mudhouse.jpg" alt="pajaro">
<p>
Novem Mud-houses are fully made and furnished with 
mud and equipped to provide you a pleasant taste of rural Bangladesh.
</p>
</div>


<div class="caja">
<img src="image/FamilyDelux.jpg" alt="pajaro">
<p>
Novem Family Deluxe is at the center of Novem Empire.
You can get to the badminton court, swimming pool and the restaurant in no time.
</p>
</div>


<div class="caja">
<img src="image/duplexFam.jpg" alt="pajaro">
<p>
Novem Couple Villa is at the hill top of Novem. You can get
to the stunning view of pineapple gardens of adjacent valleys.
</p>
</div>


</body>
</html>



@endsection