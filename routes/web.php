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
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/admin/dashboard', 'Admin\DashboardController@index');
// Route::resource('admin/general', 'Admin\GeneralController');

//General
Route::get('/admin/general', 'Admin\GeneralController@index');
Route::get('/admin/general/edit/{id}', 'Admin\GeneralController@edit');
Route::put('/admin/general/update', 'Admin\GeneralController@update');

//Slider
Route::get('/admin/slider', 'Admin\SliderController@index');
Route::get('/admin/slider/add', 'Admin\SliderController@create');
Route::post('/admin/slider/store', 'Admin\SliderController@store');
Route::get('/admin/slider/edit/{id}', 'Admin\SliderController@edit');
Route::put('/admin/slider/update', 'Admin\SliderController@update');
Route::get('/admin/slider/destroy/{id}', 'Admin\SliderController@destroy');

//Feature
Route::get('/admin/feature', 'Admin\FeatureController@index');
Route::get('/admin/feature/edit/{id}', 'Admin\FeatureController@edit');
Route::put('/admin/feature/update', 'Admin\FeatureController@update');

//Team
Route::get('/admin/team', 'Admin\TeamController@index');
Route::get('/admin/team/add', 'Admin\TeamController@create');
Route::post('/admin/team/store', 'Admin\TeamController@store');
Route::get('/admin/team/edit/{id}', 'Admin\TeamController@edit');
Route::put('/admin/team/update', 'Admin\TeamController@update');
Route::get('/admin/team/destroy/{id}', 'Admin\TeamController@destroy');

//Services
Route::get('/admin/service', 'Admin\ServiceController@index');
Route::get('/admin/service/edit/{id}', 'Admin\ServiceController@edit');
Route::put('/admin/service/update', 'Admin\ServiceController@update');

//Blog
Route::get('/admin/blog', 'Admin\BlogController@index');
Route::get('/admin/blog/add', 'Admin\BlogController@create');
Route::post('/admin/blog/store', 'Admin\BlogController@store');
Route::get('/admin/blog/show/{id}', 'Admin\BlogController@show');
Route::get('/admin/blog/publish/{id}', 'Admin\BlogController@publish');
Route::get('/admin/blog/edit/{id}', 'Admin\BlogController@edit');
Route::put('/admin/blog/update', 'Admin\BlogController@update');
Route::get('/admin/blog/destroy/{id}', 'Admin\BlogController@destroy');

//Tag
Route::get('/admin/tag', 'Admin\TagController@index');
Route::get('/admin/tag/add', 'Admin\TagController@create');
Route::post('/admin/tag/store', 'Admin\TagController@store');
Route::get('/admin/tag/edit/{id}', 'Admin\TagController@edit');
Route::put('/admin/tag/update', 'Admin\TagController@update');
Route::get('/admin/tag/destroy/{id}', 'Admin\TagController@destroy');

//Category
Route::get('/admin/categorie', 'Admin\CategorieController@index');
Route::get('/admin/categorie/add', 'Admin\CategorieController@create');
Route::post('/admin/categorie/store', 'Admin\CategorieController@store');
Route::get('/admin/categorie/edit/{id}', 'Admin\CategorieController@edit');
Route::put('/admin/categorie/update', 'Admin\CategorieController@update');
Route::get('/admin/categorie/destroy/{id}', 'Admin\CategorieController@destroy');


//Comment
Route::get('/admin/comment', 'Admin\CommentController@index');
Route::get('/admin/comment/add', 'Admin\CommentController@create');
Route::post('/admin/comment/store', 'Admin\CommentController@store');
Route::get('/admin/comment/edit/{id}', 'Admin\CommentController@edit');
Route::put('/admin/comment/update', 'Admin\CommentController@update');
Route::get('/admin/comment/destroy/{id}', 'Admin\CommentController@destroy');

//Testimonial
Route::get('/admin/testi', 'Admin\TestiController@index');
Route::get('/admin/testi/add', 'Admin\TestiController@create');
Route::post('/admin/testi/store', 'Admin\TestiController@store');
Route::get('/admin/testi/edit/{id}', 'Admin\TestiController@edit');
Route::put('/admin/testi/update', 'Admin\TestiController@update');
Route::get('/admin/testi/destroy/{id}', 'Admin\TestiController@destroy');
Route::get('/admin/testi/publish/{id}', 'Admin\TestiController@publish');
Route::get('/admin/testi/show/{id}', 'Admin\TestiController@show');