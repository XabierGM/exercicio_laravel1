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

Route :: view('/','home')->name('home');
Route :: view('acerca-de','about')->name('about');

Route::get('blog', 'App\Http\Controllers\BlogController@index') ->name ('blog.index');
Route::get('blog/{post:slug}', 'App\Http\Controllers\BlogController@show') ->name ('blog.show');

Route :: view('contactos','contact')->name('contact');

