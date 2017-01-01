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

use EloquentORM\User;

Route::get('/create', function () {
    //return view('welcome');

    $user = User::create([
      'name' => 'Ismael Jdz',
      'email' => 'i@ismaeljdz.com',
      'password' => bcrypt('123456'),
      'gender' => 'm',
      'biography' => 'Usuario simple'
    ]);

    return 'Usuario Guardado';
});

Route::get('/updat-user', function(){

    $user = User::find(1);

    $user->gender = 'f';
    $user->biography = 'Usuario modificado';

    $user->save();

    return 'Usuario Actualizado';

});
