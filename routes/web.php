<?php

use App\Http\Controllers\MainController;
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

// Get requests
Route::get('/', 'MainController@homeView')->name('home');
Route::get('/about', 'MainController@aboutView')->name('about');
Route::get('/contact', 'MainController@contactView')->name('contact');
Route::get('/offer', 'MainController@offerView')->name('offer');

//Post requests
Route::post('/offer/post', 'MainController@offerAction');
