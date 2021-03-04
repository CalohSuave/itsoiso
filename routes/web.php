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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/main/checklogin', [UserControllerExample::class,'checklogin']);
Route::get('main/successlogin', [UserControllerExample::class,'successlogin']);
Route::get('main/logout', [UserControllerExample::class,'logout']);
//Route::get('main/logout', 'MainController@logout');

//Route::get('main/logout', 'MainController@logout');
//Route::get('/uploadfile', 'UploadfileController@index');
//Route::post('/uploadfile', 'UploadfileController@upload');
//Route::get('/main', 'MainController@index');


//Route::get('users',[UserControllerExample::class,'index']);

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
