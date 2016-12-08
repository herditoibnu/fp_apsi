<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
	if(Auth::user()){
		if(Auth::user()->hak_akses=="admin")
		{
			return view('home');
		}
		else
		{
			return view('user');
		}
	}
	else
	{
		return view('login');
	}
});

Route::post('prosestambah','Crudcontroller@tambahdata');

Route::get('read','Crudcontroller@lihatdata');

Route::get('hapus/{id}','Crudcontroller@hapusdata');

Route::get('formedit/{id}','Crudcontroller@editdata');

Route::post('prosesedit','Crudcontroller@proseseditdata');

Route::get('login', function () {
	if(Auth::user())
	{
		if(Auth::user()->hak_akses=="admin")
		{
			return view('home');
		}
		else
		{
			return view('user');
		}
	}
	else
	{
		return view('login');
	}
});

Route::get('register', function () {
	if(Auth::user()){
		if(Auth::user()->hak_akses=="admin")
		{
			return view('home');
		}
		else
		{
			return view('user');
		}
	}
	else
	{
		return view('register');
	}
});

Route::post('tambahlogin','Crudcontroller@tambahlogin');

Route::post('login','Crudcontroller@login');

Route::get('user', function () {
	if(Auth::user())
	{
		if(Auth::user()->hak_akses=="admin")
		{
			return view('home');
		}
		else
		{
			return view('user');
		}
	}
	else
	{
		return view('login');
	}
});

Route::get('logout','Crudcontroller@logout');
