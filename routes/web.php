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


Route::get('/','WelcomeController@index');
Route::get('/news-category/{id}','WelcomeController@showNewsCategoryContent');
Route::get('/news-details/{id}','WelcomeController@showNewsDetails');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/category/add-category', 'CategoryController@showAddCategoryForm');
Route::get('/category/manage-category', 'CategoryController@showManageCategoryForm');
Route::post('/category/save-category', 'CategoryController@saveNewCategory');
Route::get('/category/unpublished-category/{id}', 'CategoryController@unpublishedNewsCategory');
Route::get('/category/published-category/{id}', 'CategoryController@publishedNewsCategory');
Route::get('category/edit-category/{id}', 'CategoryController@editCategoryForm');
Route::post('category/update-category', 'CategoryController@updateCategory');
Route::get('/category/delete-category/{id}', 'CategoryController@deleteNewsCategory');


//news route

Route::get('/news/add-news','NewsController@showAddNewsForm');
Route::post('news/save-news','NewsController@saveNewsInfo');
Route::get('/news/manage-news','NewsController@showManageInfo');
Route::get('/news/unpublished-news/{id}','NewsController@unpublishedNewsInfo');
Route::get('/news/published-news/{id}','NewsController@publishedNewsInfo');
Route::get('/news/delete-news/{id}','NewsController@deleteNewsInfo');
Route::get('/news/edit-news/{id}','NewsController@editNewsInfo');
Route::post('/news/update-news','NewsController@updateNewsInfo');


