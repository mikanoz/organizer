<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::model('events', 'Event');
Route::model('tasks', 'Task');

// Access by slug in URL
Route::bind('events', function($value, $route) {
	return App\Event::whereSlug($value)->first();
});
Route::bind('tasks', function($value, $route) {
	return App\Task::whereSlug($value)->first();
});

Route::resource('events', 'EventsController');
Route::resource('tasks', 'TasksController');

// лучше не мусорить. если код не нужен - удалять бесжалостно
// git все помнит
// а вот при командной работе каждый будет смотреть на этот кусок
// и думать - можно удалять его или нет, нужен он тут или нет, а если нужен - то зачем и т.п.
// неиспользуемый функционал нужно сносить начисто, не жалеть и не бояться

//Route::get('home', 'HomeController@index');

//Route::controllers([
//	'auth' => 'Auth\AuthController',
//	'password' => 'Auth\PasswordController',
//]);
