<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

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

Route::get('/email',function(){
    Mail::to('elgachabilehafssa@gmail.com')->send(new WelcomeMail());
    return new WelcomeMail();
});
Route::get('/',"App\Http\Controllers\proj\MainController@index");
Route::get('/properties-accueil','App\Http\Controllers\proj\PropertiesController@index');
Route::get('/search','App\Http\Controllers\proj\SearchController@index');
Route::get('/property/{id}','App\Http\Controllers\proj\MainController@property');
Route::get('/save-msg','App\Http\Controllers\proj\MainController@store');

Auth::routes();
Route::group(['middleware'=>['auth','admin']],function(){
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('/role-register','App\Http\Controllers\Admin\DashboardController@registered');
    Route::delete('/role-delet/{id}','App\Http\Controllers\Admin\DashboardController@registerdelete');
    Route::get('/properties','App\Http\Controllers\Admin\PropertiesController@index');
    Route::get('/save-prp','App\Http\Controllers\Admin\PropertiesController@store');
    Route::get('/edit-prp/{id}','App\Http\Controllers\Admin\PropertiesController@editprp');
    Route::get('/update-prp/{id}','App\Http\Controllers\Admin\PropertiesController@updateprp');
    Route::DELETE('delete-prp/{id}','App\Http\Controllers\Admin\PropertiesController@deleteprp');
});
Route::group(['middleware'=>['auth','user']],function(){
    Route::get('/add','App\Http\Controllers\proj\CreateProperty@index');
    Route::get('/sav-prp','App\Http\Controllers\proj\CreateProperty@store');
    Route::get('/home2', [App\Http\Controllers\HomeController::class,'index'])->name('home2');
Route::get('/my_profile', [App\Http\Controllers\HomeController::class,'profileupdate']);
Route::get('/contact/{id}', [App\Http\Controllers\HomeController::class,'contact']);
Route::DELETE('delete/{id}',[App\Http\Controllers\HomeController::class,'delete']);
Route::get('/edit/{id}',[App\Http\Controllers\HomeController::class,'edit']);
Route::get('/update/{id}',[App\Http\Controllers\HomeController::class,'update']);
});
