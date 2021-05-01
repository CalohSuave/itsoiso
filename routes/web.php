<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserControllerExample;

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

Route::group(['middleware' => 'prevent-back-history'],function(){
  Auth::routes();
  Route::get('/', function () { return view('welcome'); });
  Route::post('/main/checklogin', [UserControllerExample::class,'checklogin']);
  Route::get('main', [UserControllerExample::class,'index']);
  Route::get('/main/logout', [UserControllerExample::class,'logout']);
  Route::get('/main/create', function () { return view('create_iso');});
  Route::get('/main/createUbuntu', function () { return view('create_iso_ubuntu');});
  Route::get('/main/createiso', [UserControllerExample::class,'create']);
  Route::get('temp',[UserControllerExample::class,'remove']);
  Route::get('/delete/{id}', [UserControllerExample::class,'removeItem']);
});

//Route::get('main/logout', 'MainController@logout');

//Route::get('main/logout', 'MainController@logout');
//Route::get('/uploadfile', 'UploadfileController@index');
//Route::post('/uploadfile', 'UploadfileController@upload');
//Route::get('/main', 'MainController@index');
//Route::get('users',[UserControllerExample::class,'index']);
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
