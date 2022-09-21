<?php

use Illuminate\Support\Facades\Route;

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
//--------------------------------------------------------Back's Route----------------------------------------------------------------
Route::prefix('admin')->middleware('isLogin')->group(function (){
    Route::get('login','App\Http\Controllers\Back\LoginController@login')->name('login');
    Route::post('login','App\Http\Controllers\Back\LoginController@authPost')->name('login.post');
});


Route::prefix('admin')->middleware('isAdmin')->group(function (){
    Route::get('dashboard','App\Http\Controllers\Back\DashboardController@index')->name('dashboard');
    //Service's Route's
    Route::get('services/deleted','App\Http\Controllers\Back\ServiceController@trashed')->name('services.trash');
    Route::resource('/services','App\Http\Controllers\Back\ServiceController');
    Route::get('/services/switch','App\Http\Controllers\Back\ServiceController@switch')->name('services.switch');
    Route::get('/deleteServices/{id}','App\Http\Controllers\Back\ServiceController@delete')->name('services.delete');
    Route::get('/hardDeleteServices/{id}','App\Http\Controllers\Back\ServiceController@hardDelete')->name('services.hard.delete');
    Route::get('/recoverServices/{id}','App\Http\Controllers\Back\ServiceController@recover')->name('services.recover');
    //Project Route's
    Route::get('project/deleted','App\Http\Controllers\Back\PortfolioController@trashed')->name('trash');
    Route::resource('portfolio','App\Http\Controllers\Back\PortfolioController');
    Route::get('/teams/switch','App\Http\Controllers\Back\PortfolioController@switch')->name('teams.switch');
    Route::get('/deleteProject/{id}','App\Http\Controllers\Back\PortfolioController@delete')->name('delete');
    Route::get('/hardDeleteProject/{id}','App\Http\Controllers\Back\PortfolioController@hardDelete')->name('hard.delete');
    Route::get('/recoverProject/{id}','App\Http\Controllers\Back\PortfolioController@recover')->name('recover');
    //Team Route's
    Route::resource('teams','App\Http\Controllers\Back\TeamController');
    Route::get('/deleteUser/{id}','App\Http\Controllers\Back\TeamController@destroy')->name('delete');
    Route::get('/switch','App\Http\Controllers\Back\TeamController@switch')->name('switch');
    //Blog Route's
    Route::get('blog/deleted','App\Http\Controllers\Back\BlogController@trashed')->name('blog.trashed');
    Route::resource('blog','App\Http\Controllers\Back\BlogController');
    Route::get('/blog/switch','App\Http\Controllers\Back\BlogController@switch')->name('blog.switch');
    Route::get('/deleteContent/{id}','App\Http\Controllers\Back\BlogController@delete')->name('blog.delete');
    Route::get('/hardDeleteContent/{id}','App\Http\Controllers\Back\BlogController@hardDelete')->name('blog.hard.delete');
    Route::get('/recoverContent/{id}','App\Http\Controllers\Back\BlogController@recover')->name('blog.recover');
    // Category Route's
    Route::get('/category','App\Http\Controllers\Back\BlogCategoryController@index')->name('category.index');
    Route::post('/category/create','App\Http\Controllers\Back\BlogCategoryController@create')->name('category.create');
    Route::post('/category/update','App\Http\Controllers\Back\BlogCategoryController@update')->name('category.update');
    Route::post('/category/delete','App\Http\Controllers\Back\BlogCategoryController@delete')->name('category.delete');
    Route::get('category/switch','App\Http\Controllers\Back\BlogCategoryController@switch')->name('category.switch');
    Route::get('category/getData','App\Http\Controllers\Back\BlogCategoryController@getData')->name('category.getData');
    Route::get('logout','App\Http\Controllers\Back\LoginController@logout')->name('logout');
});
//------------------------------------------------------------------------------------------------------------------------------------

//--------------------------------------------------------Front's Route---------------------------------------------------------------
Route::get('/','App\Http\Controllers\Front\HomepageController@index')->name('homepage');
Route::get('/about','App\Http\Controllers\Front\AboutController@about')->name('about');
Route::get('/services', 'App\Http\Controllers\Front\ServicesController@service')->name('service');
Route::get('/{categorySlug}/{serviceSlug}', 'App\Http\Controllers\Front\ServicesController@serviceDetails')->name('serviceDetails');
Route::get('/portfolio','App\Http\Controllers\Front\PortfolioController@portfolio')->name('portfolio');
Route::get('/our-teams','App\Http\Controllers\Front\HomepageController@team')->name('team');
Route::get('/faq','App\Http\Controllers\Front\HomepageController@faq')->name('faq');
Route::get('/blog','App\Http\Controllers\Front\BlogController@blog')->name('blog');
Route::get('/category/{slug}','App\Http\Controllers\Front\BlogController@blogCategory')->name('blogCategory');
Route::get('/{category}/{slug}','App\Http\Controllers\Front\BlogController@blogRecent')->name('blogRecent');
Route::get('/{category}/{slug}','App\Http\Controllers\Front\BlogController@blogDetails')->name('blogDetail');
Route::get('/contact','App\Http\Controllers\Front\HomepageController@contact')->name('contact');
Route::post('/contact/post','App\Http\Controllers\Front\HomepageController@contactPost')->name('contact.post');
//------------------------------------------------------------------------------------------------------------------------------------
