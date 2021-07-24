<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

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

Route::post('/index', 'App\Http\Controllers\reservecontrolLer@setreserve')->middleware('auth');;
Route::post('/reserve/cancel/{id}', 'App\Http\Controllers\reservecontrolLer@setcancel')->middleware('auth');;


Route::get('/', function () {
    return view('welcome1');
});
Route::get('/index', function () {
    return view('index');
})->middleware('auth');

Route::post('/dashboard', 'App\Http\Controllers\reservecontroller@changeprofile')->middleware('auth');;
Route::get('/manage', 'App\Http\Controllers\reservecontroller@showmanage')->middleware('auth');;

Route::get('/dashboard', 'App\Http\Controllers\reservecontroller@dashboard')->middleware('auth');;
Route::post('/index', 'App\Http\Controllers\reservecontrolLer@setreserve')->middleware('auth');;


require __DIR__.'/auth.php';

Route::get(' /about', function () {
    return view('about');
});

