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


Route::get('demo', function(){
	echo "xin chao!";
});
Route::get('parameter/{ten}', 'MyController@KhoaHoc');
Route::get('GoiController', 'MyController@xinchao');
Route::get('Route1', ['as'=>'MyRoute1', function(){
	echo "xin chao cac ban!";
}]);
Route::get('MyRequest', 'MyController@GetURL');
//GUI VA NHAN DU LIEU VOI REQUEST
Route::get('getForm', function(){
	return view('postForm');
});
Route::post('postForm', ['as'=>'postForm', 'uses'=>'MyController@postForm']);

//COOKIE
Route::get('setCookie', 'MyController@setCookie');
Route::get('getCookie', 'MyController@getCookie');

//UPLOAD FILE
Route::get('uploadFile', function(){
	return view('postFile');
});
Route::post('postFile', ['as'=>'postFile', 'uses'=>'MyController@postFile']);

//XUẤT DỮ LIỆU DẠNG JSON
Route::get('getJson', 'MyController@getJson');

//TRUYỀN DỮ LIỆU LÊN VIEW
Route::get('DataTransmission/{ten}', 'MyController@DataTransmission');
Route::get('myView', 'MyController@myView');
View::share('KhoaHoc', 'Laravel');

//BLADE TEMPLATE
Route::get('cutInterface', function(){
	return view('pages/Laravel');
});
Route::get('bladeTemplate/{str}', 'MyController@blade');

//TẠO BẢNG VỚI SCHEMA
Route::get('database', function(){
	Schema::create('product_Type', function($table){
		$table->increments('id');
		$table->string('Name', 200);
	});
	echo "Tạo bảng thành công!";
});

Route::get('database', function(){
	Schema::create('Type', function($table){
		$table->increments('id');
		$table->string('Name', 200)->nullable();
		$table->string('Producer')->default('Nha San Xuat');
	});
	echo "Tạo bảng thành công!";
});
Route::get('tableLink', function(){
	Schema::create('Product', function($table){
		$table->increments('id');
		$table->string('Name');
		$table->float('Price');
		$table->integer('amount')->default(0);
		$table->integer('id_product_Type')->unsigner();
		$table->foreign('id_product_Type')->references('id')->on('product_Type');
	});
	echo "Tạo bảng thành công!";
});