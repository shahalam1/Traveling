@extends('layout2')
@section('content')
<div class="container">
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
#Update {
    top: 80px;
    background-color: #555
}
</style>

<div id="mySidenav" class="sidenav">
<a href="edit_profile&{{ ucwords(Auth::user()->id) }}" id="Update">Update</a>
</div>
</br></br>
</br>
</br>
</br>
</br>
	<div style="clear:right; float:left;padding-left:30px; padding-right:100px;">
	<table>
	<tr>
	<p><b>Your Profile Details</b></p>
	</br>
	<td><b>Name</b></td>
	<td style="padding-right:50px;padding-left:100px; "><b>:</b></td>
	<td>{{ ucwords(Auth::user()->name) }}</td>
	</tr>		
	</table>
	</br>
	<table>
	<tr>
	<td><b>Email</b></td>
	<td style="padding-right:50px;padding-left:100px; "><b>:</b></td>
	<td>{{ ucwords(Auth::user()->email) }}</td>

	</tr>		
	</table>
	</br>
	<table>
	<tr>
	<td ><b>Mobile Number</b></td>
	<td style="padding-right:50px;padding-left:36px; "><b>:</b></td>
	<td>{{ ucwords(Auth::user()->mobile) }}</td>

	</tr>		
	</table>
	</br>
	<table>
	<tr>
	<td><b>Date of Birth</b></td>
	<td style="padding-right:50px;padding-left:53px; "><b>:</b></td>
	<td>{{ ucwords(Auth::user()->birth) }}</td>

	</tr>		
	</table>
			
	</br>
	<table>
	<tr>
	<td ><b>Gender</b></td>
	<td style="padding-right:50px;padding-left:87px; "><b>:</b></td>
	<td>{{ ucwords(Auth::user()->gender) }}</td>

	</tr>		
	</table>
	</br>
	<table>
	<tr>
	<td ><b>Country</b></td>
	<td style="padding-right:50px;padding-left:83px; "><b>:</b></td>
	<td>{{ ucwords(Auth::user()->country) }}</td>

	</tr>		
	</table>
			
	</br>
	
	
	</br>
		
	</div>
  </div> 

@endsection