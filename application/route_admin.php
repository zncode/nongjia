<?php
use think\Route;
//后台
Route::get('admin', 				        'admin/IndexController/index');

//用户
Route::get('admin/user/login', 			    'admin/UserController/login');
Route::post('admin/user/login_submit', 		'admin/UserController/login_submit');

//文章
Route::get('admin/article/add', 			'ArticleController/add_form');
Route::post('admin/article/add_submit', 	'ArticleController/add_form_submit');
Route::get('admin/article/edit', 			'ArticleController/edit_form');
Route::post('admin/article/edit_submit', 	'ArticleController/edit_form_submit');
Route::get('admin/article/list', 			'ArticleController/index');
Route::get('admin/article/info', 			'ArticleController/info');
Route::get('admin/article/delete', 		    'ArticleController/delete');

//文章类型
Route::get('admin/article_type/add', 			'CategoryController/add_form');
Route::post('admin/article_type/add_submit', 	'CategoryController/add_form_submit');
Route::get('admin/article_type/edit', 			'CategoryController/edit_form');
Route::post('admin/article_type/edit_submit', 	'CategoryController/edit_form_submit');
Route::get('admin/article_type/list', 			'CategoryController/index');
Route::get('admin/article_type/info', 			'CategoryController/info');
Route::get('admin/article_type/delete', 		'CategoryController/delete');

//频道
Route::get('admin/channel/add', 			'admin/ChannelController/add_form');
Route::post('admin/channel/add_submit', 	'admin/ChannelController/add_form_submit');
Route::get('admin/channel/edit', 			'admin/ChannelController/edit_form');
Route::post('admin/channel/edit_submit', 	'admin/ChannelController/edit_form_submit');
Route::get('admin/channel/list', 			'admin/ChannelController/index');
Route::get('admin/channel/info', 			'admin/ChannelController/info');
Route::get('admin/channel/delete', 		    'admin/ChannelController/delete');
Route::get('admin/channel/list_data', 		'admin/ChannelController/index_data');

//栏目
Route::get('admin/category/add', 			'admin/CategoryController/add_form');
Route::post('admin/category/add_submit', 	'admin/CategoryController/add_form_submit');
Route::get('admin/category/edit', 			'admin/CategoryController/edit_form');
Route::post('admin/category/edit_submit', 	'admin/CategoryController/edit_form_submit');
Route::get('admin/category/list', 			'admin/CategoryController/index');
Route::get('admin/category/info', 			'admin/CategoryController/info');
Route::get('admin/category/delete', 		'admin/CategoryController/delete');


