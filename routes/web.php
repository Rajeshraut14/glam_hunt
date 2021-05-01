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

Route::group(['prefix' => 'admin', 'as'=>'admin.'], function()
{
Route::get('/roleregister', 'RoleController@registerrole')->name('roleregister');
Route::POST('/submitrole', 'RoleController@submitrole')->name('roles');

Route::get('/role', 'RoleController@roleview')->name('role');

Route::get('/roleUpdate/{id}', 'RoleController@roleedits')->name('roleupdate');
Route::post('/Submitrole/{id}', 'RoleController@roleupdates')->name('roleedit');

Route::get('/roledelete/{id}', 'RoleController@roledelete')->name('roledelete');

});

Route::group(['prefix' => 'admin', 'as'=>'admin.'], function()
{
Route::get('/user', 'UserController@registeruser')->name('user');
Route::POST('/submituser', 'UserController@submituser')->name('users');

Route::get('/user/view', 'UserController@userview')->name('userss');

Route::get('/userUpdate/{id}', 'UserController@useredits')->name('userupdate');
Route::post('/Submituser/{id}', 'UserController@userupdates')->name('useredit');

Route::get('/userdelete/{id}', 'UserController@userdelete')->name('userdelete');
});

Route::group(['prefix' => 'admin', 'as'=>'admin.'], function()
{
//Route::get('/category', 'UserController@registercategory')->name('category');
	Route::get('/category', 'CategoryController@registercategory')->name('category');
Route::POST('/submitcategory', 'CategoryController@submitcategory')->name('categorys');

Route::get('/categore/view', 'CategoryController@categoreview')->name('categores');

Route::get('/categorieUpdate/{id}', 'CategoryController@categorieedits')->name('categorieupdate');
Route::post('/Submitcategorie/{id}', 'CategoryController@categorieupdates')->name('categorieedit');
Route::get('/categoridelete/{id}', 'CategoryController@categoridelete')->name('categoridelete');
});



