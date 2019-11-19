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
   return view ('welcome');
});


Route::get('/employees', 'EmployeesController@index');
Route::get('/employees/create', 'EmployeesController@create');
Route::get('/employees/create', 'EmployeesController@create');
Route::get('/employees/{id}/edit', 'EmployeesController@edit');

Route::get('/posts', 'PostsController@index');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/create', 'PostsController@create');
Route::get('/posts/{id}/edit', 'PostsController@edit');
 
Route::get('/comments', 'CommentsController@index');
Route::get('/comments/create', 'CommentsController@create');
Route::get('/comments/create', 'CommentsController@create');
Route::get('/comments/{id}/edit', 'CommentsController@edit');

Route::get('/roles', 'RoutesController@index');
Route::get('/roles/create', 'RoutesController@create');
Route::get('/roles/create', 'RolesController@create');
Route::get('/roles/{id}/edit', 'RoutesController@edit');