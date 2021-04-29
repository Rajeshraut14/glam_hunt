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

Route::get('/', function () {
    return view('welcome');
});
//Route::get('/table', function () {
    //return view('admin.table');
//});
Route::group(['middleware' => 'auth'], function()
{
Route::get('/table', 'ArtistController@view');
Route::get('/registers', 'ArtistController@indexs')->name('admin.register');
Route::POST('/submit', 'ArtistController@submit')->name('save');

//Route::get('/update', 'ArtistController@edits')->name('edit');
Route::get('/AdminUpdate/{id}', 'ArtistController@edits')->name('admin.update');
Route::post('/AdminSubmit/{id}', 'ArtistController@updates')->name('admin.edit');


Route::get('/admin.delete/{id}', 'ArtistController@delete')->name('admin.delete');

});
Auth::routes();

Route::get('/admin/dashboard', 'HomeController@index')->name('home');
Route::get('/logout', 'HomeController@logout');
