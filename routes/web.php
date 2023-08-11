<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/new-topic', function() {
    return view('client.new-topic');
});
Route::get('/c-overview', function() {
    return view('client.category-overview');
});
Route::get('/topic', function() {
    return view('client.topic');
});

route::get('dashboard/home', 'App\Http\Controllers\DashboardController@home');

route::get('dashboard/category/new', 'App\Http\Controllers\CategoryController@create')->name('category.new');
route::post('dashboard/category/new', 'App\Http\Controllers\CategoryController@store')->name('category.store');
route::get('dashboard/categories', 'App\Http\Controllers\CategoryController@index')->name('categories');
route::get('dashboard/categories/{id}', 'App\Http\Controllers\CategoryController@show')->name('category');

route::get('dashboard/categories/edit/{id}', 'App\Http\Controllers\CategoryController@edit')->name('category.edit');
route::post('dashboard/categories/edit/{id}', 'App\Http\Controllers\CategoryController@update')->name('category.update');
route::get('dashboard/categories/delete/{id}', 'App\Http\Controllers\CategoryController@destroy')->name('category.destroy');
// Forums
route::get('dashboard/forum/new', 'App\Http\Controllers\ForumController@create')->name('forum.new');
route::post('dashboard/forum/new', 'App\Http\Controllers\ForumController@store')->name('forum.store');
route::get('dashboard/forums', 'App\Http\Controllers\ForumController@index')->name('forums');

route::get('dashboard/forums/{id}', 'App\Http\Controllers\ForumController@edit')->name('forum');
route::get('dashboard/forums/edit/{id}', 'App\Http\Controllers\ForumController@edit')->name('forum.edit');
route::post('dashboard/forums/edit/{id}', 'App\Http\Controllers\ForumController@update')->name('forum.update');
route::get('dashboard/forums/delete/{id}', 'App\Http\Controllers\ForumController@destroy')->name('forum.destroy');

