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

		Route::post('/category/{id}/edit', ['as' => 'admin.category.edit', 'uses' => 'CategoryController@update']);

		Route::get('/category/{id}/delete', ['as' => 'admin.category.delete', 'uses' => 'CategoryController@delete']);
#########################################################################################
		//post route 

		Route::get('/post', ['as' => 'admin.post', 'uses' => 'PostController@index']);

		Route::get('/post/create', ['as' => 'admin.post.create', 'uses' => 'PostController@create']);

		Route::post('/post/create', ['as' => 'admin.post.store', 'uses' => 'PostController@store']);
		// add route for post update by ASO
		Route::get('/post/{id}/edit', ['as' => 'admin.post.edit', 'uses' => 'PostController@edit']);

		Route::post('/post/{id}/update', ['as' => 'admin.post.update', 'uses' => 'PostController@update']);

		Route::get('/post/{id}/show', ['as' => 'admin.post.show', 'uses' => 'PostController@show']);

		Route::get('/post/{id}/delete', ['as' => 'admin.post.delete', 'uses' => 'PostController@delete']);

		Route::post('/post',array('as'=>'admin.post.search','uses'=>'PostController@search'));

		Route::get('/contact', ['as' => 'admin.contact', 'uses' => 'ContactController@index']);

		Route::get('/contact/{id}/delete', ['as' => 'admin.contact.delete', 'uses' => 'ContactController@delete']);

		Route::post('/contact',array('as'=>'admin.contact.search','uses'=>'ContactController@search'));
#####################################################################################
		//route for admin.user
		Route::get('/user', ['as' => 'admin.user', 'uses' => 'UserController@index']);

		Route::get('/user/create', ['as' => 'admin.user.create', 'uses' => 'UserController@create']);

		Route::post('/user/create', ['as' => 'admin.user.store', 'uses' => 'UserController@store']);
		// add route for post update by ASO
		Route::get('/user/{id}/edit', ['as' => 'admin.user.edit', 'uses' => 'UserController@edit']);

		Route::post('/user/{id}/update', ['as' => 'admin.user.update', 'uses' => 'UserController@update']);

		Route::get('/user/{id}/delete', ['as' => 'admin.user.delete', 'uses' => 'UserController@delete']);

		Route::post('/user',array('as'=>'admin.user.search','uses'=>'UserController@search'));
#######################################################################################
		Route::get('/post/search',array('as'=>'admin.post.search','uses'=>'PostController@search'));

		Route::post('/post/getsub', array('as'=>'admin.post.getsub','uses'=>'PostController@getsub'));
#####################################################################################
		//Route for student
		Route::get('/student', ['as' => 'admin.student', 'uses' => 'StudentController@index']);

		Route::get('/student/{id}/show', ['as' => 'admin.student.show', 'uses' => 'StudentController@show_student']);

		Route::get('/student/{id}/delete', ['as' => 'admin.student.delete', 'uses' => 'StudentController@delete']);

		Route::post('/student',array('as'=>'admin.student.search','uses'=>'StudentController@search'));
########################################################################################
		//စာသင္သားသံဃာမ်ား
		Route::get('/စာသင္သားသံဃာမ်ား', ['as' => 'admin.sarthinthar', 'uses' => 'MonkEntranceController@index']);

		Route::get('/စာသင္သားသံဃာမ်ား/{id}/show', ['as' => 'admin.စာသင္သားသံဃာမ်ား.show', 'uses' => 'MonkEntranceController@show']);

		Route::get('/စာသင္သားသံဃာမ်ား/{id}/delete', ['as' => 'admin.စာသင္သားသံဃာမ်ား.delete', 'uses' => 'MonkEntranceController@delete']);

		Route::post('/စာသင္သားသံဃာမ်ား',array('as'=>'admin.စာသင္သားသံဃာမ်ား.search','uses'=>'MonkEntranceController@search'));
#########################################################################################
		//သင္တန္းသားမ်ား 
		Route::get('/သင္တန္းသားမ်ား', ['as' => 'admin.သင္တန္းသားမ်ား', 'uses' => 'CourseController@index']);

		Route::get('/သင္တန္းသားမ်ား/{id}/show', ['as' => 'admin.သင္တန္းသားမ်ား.show', 'uses' => 'CourseController@show']);

		Route::get('/သင္တန္းသားမ်ား/{id}/delete', ['as' => 'admin.သင္တန္းသားမ်ား.delete', 'uses' => 'CourseController@delete']);

		Route::post('/သင္တန္းသားမ်ား',array('as'=>'admin.သင္တန္းသားမ်ား.search','uses'=>'CourseController@search'));
#######################################################################################################
	// Route for တရားပဲြပင့္ေလွ်ာက္သူမ်ား
		Route::get('/တရားပဲြပင့္ေလွ်ာက္သူမ်ား', ['as' => 'admin.people', 'uses' => 'PeopleController@index']);

		Route::get('/တရားပဲြပင့္ေလွ်ာက္သူမ်ား/{id}/show', ['as' => 'admin.people.show', 'uses' => 'PeopleController@show']);

		Route::get('/တရားပဲြပင့္ေလွ်ာက္သူမ်ား/{id}/delete', ['as' => 'admin.people.delete', 'uses' => 'PeopleController@delete']);

		Route::post('/တရားပဲြပင့္ေလွ်ာက္သူမ်ား',array('as'=>'admin.people.search','uses'=>'PeopleController@search'));
		###################################################################################
		// Route for upload gallery

		Route::get('/gallery', ['as' => 'admin.gallery', 'uses' => 'GalleryController@index']);

		Route::get('/gallery/create', ['as' => 'admin.gallery.create', 'uses' => 'GalleryController@create']);

		Route::post('/gallery/store', ['as' => 'admin.gallery.store', 'uses' => 'GalleryController@store']);
		// add route for gallery update by ASO
		Route::get('/gallery/{id}/edit', ['as' => 'admin.gallery.edit', 'uses' => 'GalleryController@edit']);

		Route::post('/gallery/update', ['as' => 'admin.gallery.update', 'uses' => 'GalleryController@update']);

		Route::get('/gallery/{id}/delete', ['as' => 'admin.gallery.delete', 'uses' => 'GalleryController@delete']);

		Route::post('/gallery',array('as'=>'admin.gallery.search','uses'=>'GalleryController@search'));
###########################################################################################
		Route::get('/contact', ['as' => 'admin.contact', 'uses' => 'ContactController@index']);

		Route::get('/contact/{id}/delete', ['as' => 'admin.contact.delete', 'uses' => 'ContactController@delete']);

		Route::post('/contact',array('as'=>'admin.contact.search','uses'=>'ContactController@search'));

	});
});
/*******/

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', ['as' => 'user.index', 'uses' => 'HomeController@index']);


Route::get('/show/{category}', ['as' => 'user.category', 'uses' => 'PostController@showPostsByCategory']);

Route::get('/show/{category}/{sub}', ['as' => 'user.category.sub', 'uses' => 'PostController@showPostsByCategory']);

Route::get('post/{id}/show',['as'=>'post.show', 'uses'=>'PostController@show']);

Route::post('/form',['as'=>'form.store', 'uses'=>'PostController@form_store']);



Route::get('/download/{id}', ['as' => 'downloadfile', 'uses' => 'PostController@downfun']);
Route::get('/view/{attach_file}', ['as' => 'viewfile', 'uses' => 'PostController@viewfile']);

Route::get('get-video/{video}', 'PostController@getVideo')->name('getVideo');


Route::post('/contact/store',['as'=>'contact.store', 'uses'=>'RegistrationController@contact_store']);

Route::post('/monk_student/store',['as'=>'monk_student.store', 'uses'=>'RegistrationController@monk_student_store']);

Route::post('/monk_entrace/store',['as'=>'monk_entrace.store', 'uses'=>'RegistrationController@monk_entrace_store']);

Route::post('/တရားပဲြပင့္ေလွ်ာက္လုိသူမ်ား/store',['as'=>'people.store', 'uses'=>'RegistrationController@people_store']);

Route::post('/pyinnyardarna/store',['as'=>'pyinnyardarna.store', 'uses'=>'RegistrationController@pyinnyardarna_store']);

Route::post('/grab_news/store',['as'=>'grab_news.store', 'uses'=>'RegistrationController@grab_news']);