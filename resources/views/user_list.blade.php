@extends('Admin.admin_panel')
@section('content')
<html>
<style>
body{
		background-image: url("imge/5.jpg");
	}
</style>
<head>

</head>
<body>
<div class="container">
<div class="row">
<div class="span5">

<table class="table table-striped table-condensed" style="margin-top:8%;margin-left:6%;">
<thead>
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Mobile</th>
<th>Date of birth</th>
<th>Gender</th>
<th>Country</th>
<th>Edit</th>
<th>Delete</th>
</tr>
</thead>
<tbody>
@foreach($data as $user)
<tr>
<td>{{ $user->id }}</td>
<td>{{ $user->name }}</td>
<td>{{ $user->email }}</td>
<td>{{ $user->mobile }}</td>
<td>{{ $user->birth }}</td>
<td>{{ $user->gender }}</td>
<td>{{ $user->country }}</td>
<td><a href="edit_user&<?php echo $user->id?>" class="">Edit</a></td>
 <td><a onclick="return confirm('Delete this record?')"  href="delete_user&<?php echo $user->id?>">Delete</a></td>
</tr>
@endforeach
</tbody>
<table>
{!! $data->render() !!}
</div>
</div>
</div>
</body>

@endsection