<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ConfirmPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
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

Route::get('/', function () {
    return view('master');
});


// Route::get('/', [PagesController::class, 'index']);

// Route::get('/about', [PagesController::class, 'about']);

// Route::get('/services', [PagesController::class, 'services']);


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Route::get('login', 'LoginController@showLoginForm')->name('login');
// Route::post('login', 'LoginController@login');
// Route::post('logout', 'LoginController@logout')->name('logout');

// //страница с формой Laravel регистрации пользователей
// Route::get('register', 'RegisterController@showRegistrationForm')->name('register');
// Route::post('register', 'RegisterController@register');

// //POST запрос для отправки email письма пользователю для сброса пароля
// Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
// Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
// Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
// Route::post('password/reset', 'ResetPasswordController@reset');
