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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('gmaps', 'HomeController@gmaps');

//ruta para el GmapsController_Nuevo mapa
Route::get('/gmaps1', ['as ' => 'gmaps1', 'uses' => 'GmapsController@index']);

//Ruta para nuevo mapa 2
//Route::get('googlemap', 'MapController@map');
//Route::get('googlemap/direction', 'MapController@direction');
Route::get('/map', 'MapController@index');
/*
Route::get('/', function(){
    $config = array();
    $config['center'] = 'Defence Garden, Karachi';
    GMaps::initialize($config);
    $map = GMaps::create_map();

    echo $map['js'];
    echo $map['html'];
});
*/