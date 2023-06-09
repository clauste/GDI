<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\backend\ImageItemController;
use App\Http\Controllers\backend\UserController;

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
Route::get('', [FrontController::class, 'homepage'])->name('homepage');
Route::get('flickr', [FrontController::class, 'flickr'])->name('home.flickr');

Route::get('dashboard', [CustomAuthController::class, 'dashboard'])->name('dashboard'); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('register', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-register', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

Route::resource('picture', ImageItemController::class)->except('show', 'destroy');
Route::get('/picture/{id}/destroy', [ImageItemController::class, 'destroy'])->name('picture.destroy');

Route::get('user', [UserController::class, 'user_index'])->name('user.index');


//Flickr
Route::get('picture/flickr', [ImageItemController::class, 'flickr_index'])->name('flickr');
Route::post('picture/flickr/search', [ImageItemController::class, 'flickr_search'])->name('flickr.search');


