@extends('layout2')
@section('content')

<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale-1,maximum-scale-1" />
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/shah.css">
</head>
<style>
img{
max-width:100%;
}
.caja{
border: 0px solid #999;
box-sizing: border-box;
color: #444;
display: inline-block;
padding:1em;
width: 32%;
margin:0.5%;
}
a{
 text-decoration:none;
}
.button{
margin-top:20px;
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



<div class="caja">
<img src="image/CoupleDelux.jpg" alt="pajaro">
<p>
<button class="button" style="float:right;"><a href="{{URL::to('/reservation')}}">BOOK NOW</a></button> <h3>COUPLE VILLA</h3> 
Novem Couple Deluxe is at the center of Novem Empire.
You can get to the badminton court, swimming pool, lawns and restaurantand.
</p>
</div>


<div class="caja">
<img src="image/couplevilla.jpg" alt="pajaro">
<p>
<button class="button" style="float:right;"><a href="{{URL::to('/reservation')}}">BOOK NOW</a></button> <h3>COUPLE VILLA</h3>
Novem Couple Villa is at the hill top of Novem. You can get 
to the stunning view of pineapple gardens of adjacent valleys their own private pools and lawns.
</p>
</div>


<div class="caja">
<img src="image/woodcottage.jpg" alt="pajaro">
<p>
<button class="button" style="float:right;"><a href="{{URL::to('/reservation')}}">BOOK NOW</a></button> <h3>WOOD COTTAGE</h3>
Novem Luxury wood cottagesredefine luxury and nobility.
Fully made and furnished with wood, the cottages have 
their own private pools and lawns.
</p>
</div>


<div class="caja">
<img src="image/Mudhouse.jpg" alt="pajaro">
<p>
<button class="button" style="float:right;"><a href="{{URL::to('/reservation')}}">BOOK NOW</a></button> <h3>MUD HOUSE</h3>
Novem Mud-houses are fully made and furnished with 
mud and equipped to provide you a pleasant taste of rural Bangladesh.
</p>
</div>


<div class="caja">
<img src="image/FamilyDelux.jpg" alt="pajaro">
<p>
<button class="button" style="float:right;"><a href="{{URL::to('/reservation')}}">BOOK NOW</a></button> <h3>FAMILY DELUX</h3>
Novem Family Deluxe is at the center of Novem Empire.
You can get to the badminton court, swimming pool and the restaurant in no time.
</p>
</div>


<div class="caja">
<img src="image/duplexFam.jpg" alt="pajaro">
<p>
<button class="button" style="float:right;"><a href="{{URL::to('/reservation')}}">BOOK NOW</a></button> <h3>FAMILY VILLA</h3>
Novem Couple Villa is at the hill top of Novem. You can get
to the stunning view of pineapple gardens of adjacent valleys.
</p>
</div>


</body>
</html>


@endsection