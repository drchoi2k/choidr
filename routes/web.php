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
Route::match(['get','post'], '/menu','UserController@test');
Route::get('/new','UserController@new');
Route::get('/ckedit','CkeditorController@ckedit');
Route::post('insert','CkeditorController@insert');
Route::any('/viewCode','CkeditorController@viewCode');
Route::get('readInfo/{id}','CkeditorController@readInfo');
Route::get('deleteInfo/{id}','CkeditorController@deleteInfo');
Route::get('editInfo/{id}','CkeditorController@editInfo'); 
Route::post('updateInfo','CkeditorController@updateInfo');



Route::post('/postdocu','DocuController@postdocu');


Route::get('/jquery','JqueryController@jquery');
Route::post('/postJquery','JqueryController@postJquery');
Route::get('/readByAjax','JqueryController@readByAjax');
Route::get('/getEditAjax','JqueryController@getEditAjax');

Route::post('/deleteByAjax','JqueryController@deleteByAjax');
Route::post('/updateByAjax','JqueryController@updateByAjax');

//gnb
Route::get('/mainHome','MenuController@mainHome');
Route::get('/dropNav','MenuController@dropNav');
Route::get('/rollNav','MenuController@rollNav');



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
//     'uses' => 'Jqu eryController@updateByAjax',
// ]);
Route::view('/welcome', 'test');
Route::get('user/{name?}', function ($name = 'John') {
    return $name;
});