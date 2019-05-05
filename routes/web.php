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

Route::get('/', function () {
    return view('landing_page');
});

Route::get('/techomedia', function () {
    return view('techomedia');
});

Route::get('/admin', function(){
    return view('admin.index');
});


// Route::get('/admincreate', function(){
//     return view('admin.techPosts.create')->name('admin.techPosts.create');
// });

Route::get('/admin/techPosts/index', 'TechPostsController@index')->name('admin.techPosts.index');
Route::get('/admin/techPosts/createhtml', 'TechPostsController@create')->name('admin.techPosts.create');

Route::post('/admin/techPosts/create','TechPostsController@store')->name('admin.techPosts.store');

Route::get('/admin/techPosts/edit/{id}', 'TechPostsController@edit')->name('admin.techPosts.edit');
Route::post('/admin/techPosts/update/{id}', 'TechPostsController@update')->name('admin.techPosts.update');
Route::delete('/admin/techPosts/delete/{id}', 'TechPostsController@destroy')->name('admin.techPosts.destroy');