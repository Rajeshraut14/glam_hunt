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
//Route::group(['middleware' => 'auth'], function()
Route::group(['prefix' => 'admin', 'as'=>'admin.'], function()
{
Route::get('/artist', 'ArtistController@view')->name('artist');
Route::get('/registers', 'ArtistController@indexs')->name('register');
Route::POST('/submit', 'ArtistController@submit')->name('save');

//Route::get('/update', 'ArtistController@edits')->name('edit');
Route::get('/AdminUpdate/{id}', 'ArtistController@edits')->name('update');
Route::post('/AdminSubmit/{id}', 'ArtistController@updates')->name('edit');


Route::get('/delete/{id}', 'ArtistController@delete')->name('delete');

});
Auth::routes();

Route::get('/admin/dashboard', 'HomeController@index')->name('home');
Route::get('/logout', 'HomeController@logout');



Route::group(['prefix' => 'admin', 'as'=>'admin.'], function()
{

Route::get('/skill', 'SkillController@registerskill')->name('skill');
Route::POST('/submits', 'SkillController@submitskill')->name('skillsave');

Route::get('/skillview', 'SkillController@skillview')->name('skillview');

Route::get('/skillUpdate/{id}', 'SkillController@skilledits')->name('skillupdate');
Route::post('/Submitskill/{id}', 'SkillController@skillupdates')->name('skilledit');

Route::get('/skilldelete/{id}', 'SkillController@skilldelete')->name('skilldelete');

});














