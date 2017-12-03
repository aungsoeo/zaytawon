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

/*** Admin Panel ***/
Route::group(['prefix' => 'admin'], function(){
	Auth::routes();
	Route::group(['namespace' => 'Admin', 'middleware' => 'IsAdmin'], function(){
		//Route::get('/', 'HomeController@index')->name('Admin Home');
		Route::get('/', ['as' => 'admin.index', 'uses' => 'CategoryController@index']);

		Route::get('/category', ['as' => 'admin.category', 'uses' => 'CategoryController@index']);

		Route::get('/category/create', ['as' => 'admin.category.create', 'uses' => 'CategoryController@create']);

		Route::post('/category/create', ['as' => 'admin.category.store', 'uses' => 'CategoryController@store']);

		Route::get('/post', ['as' => 'admin.post', 'uses' => 'PostController@index']);

		Route::get('/post/create', ['as' => 'admin.post.create', 'uses' => 'PostController@create']);

		Route::post('/post/create', ['as' => 'admin.post.store', 'uses' => 'PostController@store']);
		// add route for post update by ASO
		Route::get('/post/{id}/edit', ['as' => 'admin.post.edit', 'uses' => 'PostController@edit']);

		Route::post('/post/{id}/update', ['as' => 'admin.post.update', 'uses' => 'PostController@update']);

		Route::get('/post/{id}/show', ['as' => 'admin.post.show', 'uses' => 'PostController@show']);

		Route::get('/post/{id}/delete', ['as' => 'admin.post.delete', 'uses' => 'PostController@delete']);

		Route::post('/post/search',array('as'=>'admin.post.search','uses'=>'PostController@search'));

		Route::get('/contact', ['as' => 'admin.contact', 'uses' => 'ContactController@index']);

		Route::get('/contact/{id}/delete', ['as' => 'admin.contact.delete', 'uses' => 'ContactController@delete']);

		Route::post('/contact/search',array('as'=>'admin.contact.search','uses'=>'ContactController@search'));

		//route for admin.user
		Route::get('/user', ['as' => 'admin.user', 'uses' => 'UserController@index']);

		Route::get('/user/create', ['as' => 'admin.user.create', 'uses' => 'UserController@create']);

		Route::post('/user/create', ['as' => 'admin.user.store', 'uses' => 'UserController@store']);
		// add route for post update by ASO
		Route::get('/user/{id}/edit', ['as' => 'admin.user.edit', 'uses' => 'UserController@edit']);

		Route::post('/user/{id}/update', ['as' => 'admin.user.update', 'uses' => 'UserController@update']);

		Route::get('/user/{id}/delete', ['as' => 'admin.user.delete', 'uses' => 'UserController@delete']);

		Route::post('/user/search',array('as'=>'admin.user.search','uses'=>'UserController@search'));

		Route::get('/post/search',array('as'=>'admin.post.search','uses'=>'PostController@search'));

		Route::post('/post/getsub', array('as'=>'admin.post.getsub','uses'=>'PostController@getsub'));

		//Route for member
		Route::get('/member', ['as' => 'admin.member', 'uses' => 'PostController@show_member']);

		// Route::get('/member/create', ['as' => 'admin.user.create', 'uses' => 'UserController@create']);

		// Route::post('/user/create', ['as' => 'admin.user.store', 'uses' => 'UserController@store']);
		// add route for post update by ASO
		Route::get('/member/{id}/edit', ['as' => 'admin.member.edit', 'uses' => 'PostController@edit']);

		Route::post('/member/{id}/update', ['as' => 'admin.member.update', 'uses' => 'PostController@update']);

		Route::get('/member/{id}/delete', ['as' => 'admin.member.delete', 'uses' => 'PostController@delete']);

		Route::post('/member/search',array('as'=>'admin.member.search','uses'=>'PostController@member_search'));

	});
});
/*******/

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', ['as' => 'user.index', 'uses' => 'HomeController@index']);


Route::get('/show/{category}', ['as' => 'user.category', 'uses' => 'PostController@showPostsByCategory']);

Route::get('/show/{category}/{sub}', ['as' => 'user.category.sub', 'uses' => 'PostController@showPostsByCategory']);

Route::get('post/{id}/show',['as'=>'post.show', 'uses'=>'PostController@show']);

Route::post('/form',['as'=>'form.store', 'uses'=>'PostController@form_store']);

Route::post('/contact',['as'=>'contact.store', 'uses'=>'PostController@contact_store']);

Route::get('/download/{id}', [
	'as' => 'downloadfile', 'uses' => 'PostController@downfun']);
Route::get('/view/{attach_file}', ['as' => 'viewfile', 'uses' => 'PostController@viewfile']);

Route::get('get-video/{video}', 'PostController@getVideo')->name('getVideo');
