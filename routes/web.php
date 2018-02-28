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
    return view('Home');
});
Route::get('views/ubicacion',['as' => 'ubicacion', function (){
	return view('ubicacion');
}]);
Route::get('views/galeria',['as' => 'galeria', function (){
	return view('galeria');
}]);
Route::get('views/acerca',['as' => 'acerca', function (){
	return view('acerca');
}]);
Route::get('views/paquetes',['as' => 'paquetes', function (){
	return view('paquetes');
}]);