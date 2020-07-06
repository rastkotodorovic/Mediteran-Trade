<?php

use App\News;
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

Route::get('/', function () {
    return view('index');
});

Route::get('about', function () {
    return view('about');
});

Route::get('services', function () {
    return view('services');
});

Route::get('news', function () {
    return view('news', [
        'news' => News::all(),
    ]);
});

Route::get('contact-v1', 'ContactController@index');
Route::post('contact-v1', 'ContactController@store')->name('contact.store');





Route::get('admin/profile', function () {
    return view('admin.profile');
});

Route::get('admin', 'TaskController@index')->name('task.index');
Route::post('admin', 'TaskController@store')->name('task.store');
Route::delete('admin/{task}', 'TaskController@destroy')->name('task.destroy');

Route::get('admin/news', 'NewsController@index')->name('news.index');
Route::post('admin/news', 'NewsController@store')->name('news.store');
Route::delete('admin/news/{new}', 'NewsController@destroy')->name('news.destroy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
