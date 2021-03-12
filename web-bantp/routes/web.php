<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Middleware\CheckLevel;

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

//Route::get('/', function () {
//    return view('font.home');
//});


Route::group(['prefix'=>'admin'], function(){
	Route::group(['prefix'=>'layout'], function(){
		Route::get('index','IndexController@getIndex');
		
	});

	Route::group(['prefix'=>'category'], function(){
		Route::get('category','CategoryController@getCategory');
		Route::post('category','CategoryController@postCategory');

		Route::get('editcategory/{id}','CategoryController@getEdit');
		Route::post('editcategory/{id}','CategoryController@postEdit');		

		Route::get('category/{id}','CategoryController@getDelete');
	});

	
	Route::group(['prefix'=>'product'], function(){
		Route::get('product','ProductController@getProduct');

		Route::get('addproduct','ProductController@getAddProduct');
		Route::post('addproduct','ProductController@postAddProduct');
		
		Route::get('editproduct/{id}','ProductController@getEdit');
		Route::post('editproduct/{id}','ProductController@postEdit');

		Route::get('product/{id}','ProductController@getDelete');
	});


	Route::group(['prefix'=>'layout'], function(){
		Route::get('layout','LayoutController@getLayout');
	});



	Route::group(['prefix'=>'user'], function(){
		Route::get('user','UserController@getUser');

		Route::get('edit/{id}','UserController@getEdit');
		Route::post('edit/{id}','UserController@postEdit');

		Route::get('add','UserController@getAdd');
		Route::post('add','UserController@postAdd');

		Route::get('user/{id}','UserController@getDelete');
	});


	Route::group(['prefix'=>'slide'], function(){

		Route::get('slide','SlideController@getSlide');

		Route::get('addslide','SlideController@getAdd');
		Route::post('addslide','SlideController@postAdd');
		
		Route::get('editslide/{id}','SlideController@getEdit');
		Route::post('editslide/{id}','SlideController@postEdit');

		Route::get('slide/{id}','SlideController@getDelete');		
	});		

	Route::get('logout','LogoutController@getlogout');
	
	Route::group(['prefix'=>'layout'], function(){
		Route::get('index','IndexController@getIndex');
	});		
});


Route::get('/','HomeController@getHome');

Route::group(['prefix'=>'font'], function(){
	Route::get('home','HomeController@getHome');
	Route::get('search','HomeController@getSearch');
	Route::get('product/{id}','HomeController@getProduct');
	Route::get('detail/{id}','HomeController@getDetail');
	Route::get('cart/{id}','HomeController@addToCart');
	Route::get('showcart','HomeController@getShow');
});



Route::get('login','LoginController@getLogin');
Route::post('login','LoginController@postLogin');

Route::get('register','RegisterController@getRegister');
Route::post('register','RegisterController@postRegister');
Route::get('editacc','RegisterController@getEditAcc');	
Route::post('editacc','RegisterController@postEditAcc');	


