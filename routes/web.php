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


Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth']],function(){
	Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
	
	Route::get('/setting', 'Setting\SettingController@index');
});

// Route::get('/admin/change-password', 'Auth\ChangePasswordController@changePassword')->name('change.password.index');
Route::post('/admin/change-password', 'Auth\ChangePasswordController@updatePassword')->name('change.password');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
