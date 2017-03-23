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
    return view('welcome');
});
Route::get('belajar', function () {
    return "hallo semua";
});
Route::get('cek', function () {
    $userdata = array(
       'email'     => 'lalu@yahoo.com',
       'password'  => 'sarah cantik'
   );
    echo Auth::attempt($userdata);
});
Route::get('tambah',function (){
   $password = Hash::make('sarah cantik');
   DB::insert('insert into users (name,email, password) values (?, ?,?)',
   ['sarah','lalu@yahoo.com', $password]);

});
