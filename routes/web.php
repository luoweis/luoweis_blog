<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/','MainController@index');
Route::get('/read/{id}','MainController@show');

Auth::routes();

Route::group(['prefix' => 'admin','namespace' => 'Admin'],function ($router)
{
    $router->get('login', 'LoginController@showLoginForm')->name('admin.login');
    $router->post('login', 'LoginController@login');
    $router->post('logout', 'LoginController@logout');
    $router->get('dash', 'DashboardController@index');
    $router->get('articles/create','DashboardController@createArticles');
    $router->get('tags/create','DashboardController@createTags');
    $router->post('dash/tags', 'DashboardController@storeTags');
    $router->post('dash/articles', 'DashboardController@storeArticles');
    $router->get('articles/edit/{id}', 'DashboardController@editArticles');
    $router->get('articles/show/{id}', 'DashboardController@showArticles');
    $router->post('articles/update/{id}','DashboardController@updateArticles');
    $router->get('tags/edit/{id}', 'DashboardController@editTags');
    $router->post('tags/update/{id}','DashboardController@updateTags');
});

