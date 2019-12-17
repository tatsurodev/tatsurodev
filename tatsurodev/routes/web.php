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

use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false, 'reset' => false, 'verify' => false]);

Route::get('/', 'HomeController@index')->name('homes.index');

Route::resource('skills', 'SkillController');
Route::resource('qandas', 'QAndAController');

Route::get('locale/{locale}', 'HomeController@locale')->name('homes.locale');
