<html>
<style>
	.container{
		width:100%;
		margin: auto;
	}
	.left, .middle, .right{
		width:30%;
		margin: 1%;
		float: left;
	}
	.middle{

	}
	
	.wrap{
		width: 93%;
    	margin-left: 16px;
	}

	h3{
		text-transform: uppercase;
		color:#444;
	}

	hr{
		border: 2px solid #ddd;
	}

	input:not([type="submit"]), select{
		height: 40px;
		width:360px;
		border:1px solid #ddd;
		border-radius: 2px;
		margin:10px 0px;
		box-shadow: inset 0px 1px 2px rgba(0,0,0,0.2);
		padding-left: 10px;
		outline: none;
	}
	.right:after{
		clear: both;
		content: "";
		display: table;
	}

	::-webkit-input-placeholder{
		color:#aaa;
	}

	textarea{
		width:95%;
		border:1px solid #ddd;
		border-radius: 2px;
		box-shadow: inset 0px 1px 2px rgba(0,0,0,0.2);
		outline: none;
		padding-left: 20px;
		box-sizing: border-box;

	}
	
	input[type="submit"]{
		height: 40px;
		width:95%;
		background: #fff;
		border:1px solid #4caf50;
		color:#4caf50;
		outline: none;
		border-radius: 3px;
	}

	input[type="submit"]:hover{
		background: #4caf50;
		color:white;
	}
	.desc{
		margin-bottom: 30px;
    	margin-left: 25px;
	}
</style>
<br>
  <form action="reservation_insert" method="post">
  <input type="hidden" name="_token" value="{{csrf_token()}}">
  	<div class="container">
  		<div class="wrap">
	  		<h3>Make Reservation</h3>
	  		<hr>
  		</div>

		<div class="left">
				<b>Your Name</b><br>
				<input type="text" name="uname" placeholder="e.g. John" /><br/>
				@if($errors->has('uname')) <p>{{$errors->first('uname')}}</p>@endif
				<b>Email Address</b><br>
				<input type="Email" name="email" placeholder="e.g.mail@example.co" /><br/>
				@if($errors->has('email')) <p>{{$errors->first('email')}}</p>@endif
				<b>Phone Number</b><br>
				<input type="tel" name="mobile_no" placeholder="018******" /><br/>
				@if($errors->has('mobile_no')) <p>{{$errors->first('mobile_no')}}</p>@endif
		</div>
		
		<div class="middle">
			<b>Check in</b></br>
			<input type="date" name="Date"/></br>
			@if($errors->has('Date')) <p>{{$errors->first('Date')}}</p>@endif
			<b>Check out</b><br>
			<input type="date" name="tata"/></br>
			@if($errors->has('data')) <p>{{$errors->first('data')}}</p>@endif
			<b>Adults</b><br>
			<input type="text" name="adul" placeholder="Number of adults" /><br/>
			@if($errors->has('adul')) <p>{{$errors->first('adul')}}</p>@endif
		</div>
		
		<div class="right">
			<b>Kids</b></br>
			<input type="text" name="kid" placeholder="Number of kids" /><br/>
			@if($errors->has('kid')) <p>{{$errors->first('kid')}}</p>@endif
			<b>Room Type</b><br/>
			<select name="room">
				<option>---Select type---</option>
					<option>Mude House</option>
					<option>Wood Cottage</option>
					<option>Twin Deluxe</option>
					<option>Duplexe Family Villa</option>
					<option>Couple Deluxe</option>
					<option>Tent</option>
					</select><br/>
					
			<b>Room NO</b><br>
			<select name="rom">
				    <option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					</select><br>
			</div>
		</div>

		<div class="desc wrap" style="width: 96%">
			<b>Description</b><br>
			<textarea cols="83" rows="10" name="des" ></textarea><br><br>
			<input type="submit" name="submit" value="Book Now" />
		</div>
	</div>
  </form>
  </html>



