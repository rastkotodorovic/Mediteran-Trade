<?php

use App\News;
use App\Service;
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
    return view('index', [
        'services' => Service::all(),
        'news' => News::latest()->take(6)->get(),
    ]);
});

Route::get('about', function () {
    return view('about');
});

Route::get('services', function () {
    return view('services', [
        'services' => Service::latest()->take(5)->get(),
    ]);
});

Route::get('news', function () {
    return view('news', [
        'news' => News::latest()->paginate(6),
    ]);
});

Route::get('contact-v1', 'ContactController@index');
Route::post('contact-v1', 'ContactController@store')->name('contact.store');




Route::get('admin/profile', 'UserController@index')->name('user.index');
Route::post('admin/profile', 'UserController@store')->name('user.store');
Route::patch('admin/profile/{user}', 'UserController@update')->name('user.update');

Route::get('admin', 'TaskController@index')->name('task.index');
Route::post('admin', 'TaskController@store')->name('task.store');
Route::delete('admin/{task}', 'TaskController@destroy')->name('task.destroy');

Route::get('admin/news', 'NewsController@index')->name('news.index');
Route::post('admin/news', 'NewsController@store')->name('news.store');
Route::get('admin/news/edit/{news}', 'NewsController@edit')->name('news.edit');
Route::patch('admin/news/edit/{news}', 'NewsController@update')->name('news.update');
Route::delete('admin/news/{news}', 'NewsController@destroy')->name('news.destroy');

Route::get('admin/services', 'ServiceController@index')->name('service.index');
Route::post('admin/services', 'ServiceController@store')->name('service.store');
Route::delete('admin/services/{service}', 'ServiceController@destroy')->name('service.destroy');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('home', function () {
    return view('home');
});
