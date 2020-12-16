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

Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('/hello', function () {
    //return view('welcome');
    return "<H1>Hello World</H1>";
});

// using parsed data in the URL
Route::get('/users/{id}/{name}', function ($id, $name){
    return 'This is user '.$name.' with id of'.$id ;
});
*/

// setting the 
Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');


// Auto Creation of routes for Posts Controller 
// based on the list of functions in the PostController 
Route::resource('posts', 'PostsController');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
Route::get('/manageAccounts', 'ManageAccountsController@index');
