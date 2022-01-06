<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/admin','AdminController@index')->name('admin');

Route::middleware('auth')->prefix('admin')->group(function (){
Route::resource('/category','CategoryController');
Route::resource('/item','ItemController');
Route::resource('/course','CourseController');
Route::get('/showdata/{id}','ItemController@showdata')->name('showdata');
Route::get('/getdata/{id}','ItemController@getdata')->name('getdata.create');
Route::resource('/city','CityController');
Route::resource('/township','TownshipController');
Route::get('/townshipdata/{id}','TownshipController@townshipdata')->name('townshipdata');
Route::get('/showtownshipdata/{id}','TownshipController@showdata')->name('showtownshipdata');
Route::get('/center/{id}','CenterController@index')->name('center.index');
Route::get('/center/create/{id}','CenterController@create')->name('center.create');
Route::post('/center','CenterController@store')->name('center.store');
Route::get('/center/{id}/edit','CenterController@edit')->name('center.edit');
Route::put('/center/{id}','CenterController@update')->name('center.update');
Route::delete('/center/{center}/destroy','CenterController@destroy')->name('center.destroy');
Route::resource('/slider','SliderController');
Route::resource('/type','TypeController');
Route::resource('/about','AboutController');
Route::resource('/groupcompany','GroupcompanyController');
Route::resource('/contact','ContactController');



});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/','UserController@index')->name('user');
Route::get('/course/{id}','UserController@course')->name('course');
Route::get('/singlecourse/{id}','UserController@singlecourse')->name('singlecourse');
Route::get('/filter','UserController@filter')->name('filter');
Route::get('/search','UserController@search')->name('search');
Route::get('/township','UserController@township')->name('township');
Route::get('/center','UserController@center')->name('center');
Route::get('/department','UserController@department')->name('department');
Route::get('/singledepartment/{id}','UserController@singledepartment')->name('singledepartment');
Route::get('/facility','UserController@facility')->name('facility');
Route::get('/singlefacility/{id}','UserController@singlefacility')->name('singlefacility');
Route::get('/aboutus','UserController@about')->name('aboutus');
Route::get('/service/{id}','UserController@service')->name('service');
Route::get('/news/{id}','UserController@news')->name('news');
Route::get('/contact','UserController@contact')->name('contact');

