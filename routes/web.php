<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/register', function () {
    return view('register.register');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/users', function () {
    return view('user_list');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/join', function () {
    return view('join');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/reservation', function () {
    return view('reservation');
});
Route::get('/accommodation', function () {
    return view('accommodation');
});

Route::get('/adminpannel', function () {
    return view('Admin.admin_panel');
});

Route::get('/adminlogin', function () {
    return view('Admin.admin_login');
});

Route::get('/reservationshow', function () {
    return view('show_reservation');
});

Route::get('/insert', function () {
    return view('insert_user');
});
Route::get('/dashbord', function () {
    return view('Admin.home');
});

Route::get('/admincheck', function () {
    return view('admin_check');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/reseruser', function () {
    return view('reservation_user');
});

Route::get('/insertreser', function () {
    return view('insert_reservation');
});

Route::get('/editreser', function () {
    return view('edit_reservation');
});

Route::post('/insert_action','RegisterController@stores');
Route::post('/register_action','RegisterController@store');
Route::post('/login_check','RegisterController@login');
Route::get('/users','RegisterController@show_users');

Route::post('/register_action','RegisterController@store');
Route::post('/login_check','RegisterController@login');
Route::post('/admin_login','RegisterController@logins');
Route::get('/users','RegisterController@show_users');

Route::get('/edit_user&{id}','RegisterController@edit');
Route::post('/update&{id}','RegisterController@update');

Route::get('/edit_profile&{id}','RegisterController@edit_profile');
Route::post('/update_profile&{id}','RegisterController@update_profile');
Route::get('/delete_user&{id}','RegisterController@delete_user');
Route::get('/admin_login','RegisterController@admin_profile');

Route::post('/reservation_action','ReservationController@store');
Route::post('/reservation_insert','ReservationController@stores');
Route::get('/reseruser','ReservationController@show_reser');
Route::get('/delete_user&{id}','ReservationController@delete_user');
Route::get('/edit_user&{id}','ReservationController@edit');

Route::get('/logout',function(){
	Auth:: logout();
	return Redirect:: to('home');
})->middleware("auth");
	

