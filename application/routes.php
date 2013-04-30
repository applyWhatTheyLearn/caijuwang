<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Simply tell Laravel the HTTP verbs and URIs it should respond to. It is a
| breeze to setup your application using Laravel's RESTful routing and it
| is perfectly suited for building large applications and simple APIs.
|
| Let's respond to a simple GET request to http://example.com/hello:
|
|		Route::get('hello', function()
|		{
|			return 'Hello World!';
|		});
|
| You can even respond to more than one URI:
|
|		Route::post(array('hello', 'world'), function()
|		{
|			return 'Hello World!';
|		});
|
| It's easy to allow URI wildcards using (:num) or (:any):
|
|		Route::put('hello/(:any)', function($name)
|		{
|			return "Welcome, $name.";
|		});
|
*/

Route::get('/', function()
           {
               return View::make('home.index');
           });
Route::get('authors', array('uses'=>'authors@index'));

Route::get('admin',array('before' => 'auth','do'=> function(){ return View::make('admin.managelist');}));
Route::get('manageleft', function(){ return View::make('admin.manageleft');});
Route::get('managedetail', function(){ return View::make('admin.managedetail');});

Route::get('login', function(){return View::make('admin.login');});
Route::post('login', array('uses'=>'users@login'));
Route::get('logout', function() {
    Auth::logout();
    return Redirect::to('admin');
});

Route::group(array('before'=>'auth'),function(){
    Route::get('fileDel', 'utils@fileDel');
    /* area */
    Route::get('area/area_list.html', 'areas@list');
    Route::get('area/area_add.html', 'areas@add');
    Route::post('area/area_add.html', 'areas@add');
    Route::get('area/area_modi.html', 'areas@modi');
    Route::post('area/area_modi.html', 'areas@modi');
    Route::any('area/area_del.html', 'areas@del');

    /* gong-gao */
    Route::get('gonggao/gonggao_list.html', 'gonggaos@list');
    Route::get('gonggao/gonggao_add.html', 'gonggaos@add');
    Route::post('gonggao/gonggao_add.html', 'gonggaos@add');
    Route::get('gonggao/gonggao_modi.html', 'gonggaos@modi');
    Route::post('gonggao/gonggao_modi.html', 'gonggaos@modi');
    Route::any('gonggao/gonggao_del.html', 'gonggaos@del');
    Route::get('gonggao/gonggao_detail.html', 'gonggaos@detail');
      /* area_gonggao */
    Route::get('gonggao/area_gonggao_list.html', 'area_gonggaos@list');
    Route::get('gonggao/area_gonggao_add.html', 'area_gonggaos@add');
    Route::post('gonggao/area_gonggao_add.html', 'area_gonggaos@add');
    Route::get('gonggao/area_gonggao_modi.html', 'area_gonggaos@modi');
    Route::post('gonggao/area_gonggao_modi.html', 'area_gonggaos@modi');
    Route::any('gonggao/area_gonggao_del.html', 'area_gonggaos@del');
    Route::get('gonggao/area_gonggao_detail.html', 'area_gonggaos@detail');
    /* 关于我们 */
    Route::get('aboutus/au_door.html', 'aboutus@door');
    Route::get('aboutus/auClass_List.html', 'aboutus@class_list');
    Route::get('aboutus/au_temp.html', 'aboutus@temp');
    Route::get('aboutus/auClass_managelist.html', 'aboutus@class_managelist');
    
 });

/*
|--------------------------------------------------------------------------
| Application 404 & 500 Error Handlers
|--------------------------------------------------------------------------
|
| To centralize and simplify 404 handling, Laravel uses an awesome event
| system to retrieve the response. Feel free to modify this function to
| your tastes and the needs of your application.
|
| Similarly, we use an event to handle the display of 500 level errors
| within the application. These errors are fired when there is an
| uncaught exception thrown in the application.
|
*/

Event::listen('404', function()
{
	return Response::error('404');
});

Event::listen('500', function()
{
	return Response::error('500');
});

/*
|--------------------------------------------------------------------------
| Route Filters
|--------------------------------------------------------------------------
|
| Filters provide a convenient method for attaching functionality to your
| routes. The built-in before and after filters are called before and
| after every request to your application, and you may even create
| other filters that can be attached to individual routes.
|
| Let's walk through an example...
|
| First, define a filter:
|
|		Route::filter('filter', function()
|		{
|			return 'Filtered!';
|		});
|
| Next, attach the filter to a route:
|
|		Route::get('/', array('before' => 'filter', function()
|		{
|			return 'Hello World!';
|		}));
|
*/

Route::filter('before', function()
{
	// Do stuff before every request to your application...
});

Route::filter('after', function($response)
{
	// Do stuff after every request to your application...
});

Route::filter('csrf', function()
{
	if (Request::forged()) return Response::error('500');
});

Route::filter('auth', function()
{
	if (Auth::guest()) return Redirect::to('login');
});