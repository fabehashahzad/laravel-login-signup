<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerAuthentication;
use Illuminate\Http\Request;/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login',[ControllerAuthentication ::class,'login']);
Route::get('registration',[ControllerAuthentication::class, 'registration']);
Route::post('/register-user',[ControllerAuthentication:: class, 'registerUser'])->name('register-user');
Route::get('/test',[ControllerAuthentication ::class,'test']);