<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController; 
use App\Http\Controllers\MoviesController;
use Illuminate\Html\HtmlServiceProvider;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\MailController;



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

Route::get('locale/{locale}', 'App\Http\Controllers\MainController@changeLocale')->name('locale');

Route::middleware(['set_locale'])->group(function (){

    Route::post('/auth/save',[MainController::class, 'save'])->name('auth.save');
    Route::post('/auth/check',[MainController::class, 'check'])->name('auth.check');
    Route::get('/auth/logout',[MainController::class, 'logout'])->name('auth.logout');
    
    Route::group(['middleware'=>['AuthCheck']], function(){
        Route::get('/auth/login',[MainController::class, 'login'])->name('auth.login');
        Route::get('/auth/register',[MainController::class, 'register'])->name('auth.register');
    
        Route::get('/admin/dashboard',[MainController::class, 'dashboard']);
        Route::get('/admin/settings',[MainController::class,'settings']);
        Route::get('/admin/profile',[MainController::class,'profile']);
    
        Route::get('/', function () {
            return view('welcome');
        });
        
    Route::get('/uploadfile', 'App\Http\Controllers\UploadController@index');
    Route::post('/uploadfile', 'App\Http\Controllers\UploadController@showUploadFile');
    
    Route::get('/multiuploads', 'App\Http\Controllers\UploadController@uploadForm');
    Route::post('/multiuploads', 'App\Http\Controllers\UploadController@uploadSubmit');
    
    
        Route::get('/admin/dashboard', 'App\Http\Controllers\MoviesController@index')->name('movies.index');
    
    });
    
    Route::get('/auth/login/send-email', [MailController::class, 'sendEmail']);
    
    Route::get('/movies/{movie}', 'App\Http\Controllers\MoviesController@show')->name('movies.show');
});


