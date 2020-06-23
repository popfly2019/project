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

//前后台首页
Route::get('/','Home\IndexController@index');
Route::get('/admin','Admin\IndexController@index');


//前台模块路由
//简介
Route::get('/brief','Home\BriefController@index');

//联系我们
Route::get('/contact','Home\ContactController@index');

//文档下载
Route::get('/download','Home\DownloadController@index');
Route::get('/download/category/{id}','Home\DownloadController@category');
Route::get('/download/list/{id}','Home\DownloadController@list');
Route::get('/download/download/{id}','Home\DownloadController@download');

//在线留言
Route::any('/message','Home\MessageController@index');

//公司相册
Route::get('/photo','Home\PhotoController@index');
Route::get('/photo/category/{id}','Home\PhotoController@category');
Route::get('/photo/list/{id}','Home\PhotoController@list');

//产品
Route::get('/product','Home\ProductController@index');
Route::get('/product/category/{id}','Home\ProductController@category');
Route::get('/product/list/{id}','Home\ProductController@list');

//文章
Route::get('/article','Home\ArticleController@index');
Route::get('/article/category/{id}','Home\ArticleController@category');
Route::get('/article/list/{id}','Home\ArticleController@list');

//Admin信息跳转
Route::get('/admin/error',function(){return view('admin.error');});
Route::get('/admin/success',function(){return view('admin.success');});


//Admin模块路由
Route::prefix('admin')->namespace('Admin')->group(function(){

	//登录
	Route::prefix('login')->group(function(){
		Route::get('/','LoginController@index');
		Route::post('check','LoginController@check');
		Route::get('logout','LOginController@logout');
	});

	//文章列表
	Route::prefix('article')->group(function(){
		Route::get('/','ArticleController@index');
		Route::get('add','ArticleController@add');
		Route::post('store','ArticleController@store');
		Route::get('edit/{id}','ArticleController@edit');
		Route::post('update/{id}','ArticleController@update');
		Route::get("forceDelete/{id}",'ArticleController@forceDelete');
	});

	//banner
	Route::prefix('banner')->group(function(){
		Route::get('/','BannerController@index');
		Route::get('add','BannerController@add');
		Route::post('store','BannerController@store');
		Route::get('edit/{id}','BannerController@edit');
		Route::post('update/{id}','BannerController@update');
		Route::get("forceDelete/{id}",'BannerController@forceDelete');
	});

	//导航(产品分类在此)
	Route::prefix('nav')->group(function(){
		Route::get('/','NavController@index');
		Route::get('add','NavController@add');
		Route::post('store','NavController@store');
		Route::get('edit/{id}','NavController@edit');
		Route::post('update/{id}','NavController@update');
		Route::get("forceDelete/{id}",'NavController@forceDelete');
	});

	//配置
	Route::prefix('config')->group(function(){
		Route::get('/','ConfigController@index');
		Route::post('store','ConfigController@store');
	});

	//产品
	Route::prefix('product')->group(function(){
		Route::get('/','ProductController@index');
		Route::get('add','ProductController@add');
		Route::post('store','ProductController@store');
		Route::get('edit/{id}','ProductController@edit');
		Route::post('update/{id}','ProductController@update');
		Route::get("forceDelete/{id}",'ProductController@forceDelete');
	});

	//文章
	Route::prefix('article')->group(function(){
		Route::get('/','ArticleController@index');
		Route::get('add','ArticleController@add');
		Route::post('store','ArticleController@store');
		Route::get('edit/{id}','ArticleController@edit');
		Route::post('update/{id}','ArticleController@update');
		Route::get("forceDelete/{id}",'ArticleController@forceDelete');
	});

	//文档
	Route::prefix('doc')->group(function(){
		Route::get('/','DocController@index');
		Route::get('add','DocController@add');
		Route::post('store','DocController@store');
		Route::get('edit/{id}','DocController@edit');
		Route::post('update/{id}','DocController@update');
		Route::get("forceDelete/{id}",'DocController@forceDelete');
	});

	//友情链接
	Route::prefix('link')->group(function(){
		Route::get('/','LinkController@index');
		Route::get('add','LinkController@add');
		Route::post('store','LinkController@store');
		Route::get('edit/{id}','LinkController@edit');
		Route::post('update/{id}','LinkController@update');
		Route::get("forceDelete/{id}",'LinkController@forceDelete');
	});

	//相册
	Route::prefix('photo')->group(function(){
		Route::get('/','PhotoController@index');
		Route::get('add','PhotoController@add');
		Route::post('store','PhotoController@store');
		Route::get('edit/{id}','PhotoController@edit');
		Route::post('update/{id}','PhotoController@update');
		Route::get("forceDelete/{id}",'PhotoController@forceDelete');
	});

	//网站管理员
	Route::prefix('admin')->group(function(){
		Route::get('/','AdminController@index');
		Route::get('add','AdminController@add');
		Route::post('store','AdminController@store');
		Route::get('edit/{id}','AdminController@edit');
		Route::post('update/{id}','AdminController@update');
		Route::get("forceDelete/{id}",'AdminController@forceDelete');
	});

	//留言信息
	Route::prefix('msg')->group(function(){
		Route::get('/','MsgController@index');
		Route::get('check/{id}','MsgController@check');
	});
});
