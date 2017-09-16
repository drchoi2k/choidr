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

// Route::get('/', function () {
//     return view('index');
// });
// Route::get('/', [
//     'as' => 'root',
//     'uses' => 'WelcomeController@index',
// ]);


 
// Route::get('/','UserController@index');
// Route::get('/aws','UserController@aws');
// Route::get('/getuser','UserController@getuser');
// Route::get('/union','UserController@union');
// Route::get('/all_list','UserController@all_list');
// Route::get('/pagination','PaginationController@pagination');
// Route::get('/xedb','UserController@xedb');

// Route::get('/getInsert','CrudController@getInsert');
// Route::post('/postInsert','CrudController@postInsert');

// Route::get('/getEdit/{id}', 'CrudController@getEdit');
// Route::post('/postUpdate/{id}','CrudController@postUpdate');
// Route::get('/postDelete/{id}','CrudController@postDelete');

//   ------ Jquery
Route::get('/','UserController@index');
Route::get('/ckedit','UserController@ckedit');
Route::get('/new','UserController@new');

Route::get('/jquery','JqueryController@jquery');
Route::post('/postJquery','JqueryController@postJquery');
Route::get('/readByAjax','JqueryController@readByAjax');
Route::get('/getEditAjax','JqueryController@getEditAjax');

Route::post('/deleteByAjax','JqueryController@deleteByAjax');
Route::post('/updateByAjax','JqueryController@updateByAjax');


// Route::get('/getuser/{id}','UserController@getuser');
// 1방법
// Route::get('/aws', [
//     'as' => 'root',
//     'uses' => 'AwsController@index',
// ]);

// 2방법
// Route::get('/aws','AwsController@index');

// 3방법
// AwsController가 필요없음
// Route::get('aws', function(){
// 	return view('aws_area.aws');
// }); 

// Route::post('/updateByAjax', [
//     'as' => 'root',
//     'uses' => 'JqueryController@updateByAjax',
// ]);
