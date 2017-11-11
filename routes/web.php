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
    return redirect("/dashboard");
});

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::resource('/project', 'ProjectController');

Route::resource('/tag', 'TagController');

Route::get('/project/{project}/tasks', 'TaskController@index')->name('project.tasks');
Route::resource('/project/{project}/task', 'TaskController');

Route::get('/project/{project}/taskgroups', 'TaskGroupController@index')->name('project.taskgroups');
Route::resource('/project/{project}/taskgroup', 'TaskGroupController');

Route::get('/project/{project}/teams', 'TeamController@index')->name('project.teams');
Route::resource('/project/{project}/team', 'TeamController');

Route::get('/project/{project}/comments', 'ProjectController@comments')->name('project.comments');
Route::post('/project/{project}/comment', 'ProjectController@comment')->name('project.comment');

Route::get('/project/{project}/users', 'ProjectController@users')->name('project.users');
Route::post('/project/{project}/users', 'ProjectController@add_user')->name('project.user.add');
Route::delete('/project/{project}/users', 'ProjectController@remove_user')->name('project.user.remove');

Route::get('/user/{user}', 'UserController@show')->name('user.show');