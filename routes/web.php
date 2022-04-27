<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ViewController;
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

Route::get('/', [ViewController::class, 'home'])->name('index');

Route::get('/about', [ViewController::class,'about'])->name('about');

Route::get('/portfolio', [ViewController::class, 'portfolio'])->name('portfolio');

Route::get('/services', function () {
    return view('w3soft.services',[
        'route' => 'services'
    ]);
})->name('services');

Route::get('/contact', function () {
    return view('w3soft.contact',[
        'route' => 'contact'
    ]);
})->name('contact');

Route::get('/blog', function () {
    return view('w3soft.blog',[
        'route' => 'blog'
    ]);
})->name('blog');

Route::get('/blog-details', function () {
    return view('w3soft.blog-details',[
        'route' => 'blog-details'
    ]);
})->name('blog-details');

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('posts',\App\Http\Controllers\PostController::class);
Route::resource('users', UserController::class);
Route::resource('categories', CategoryController::class);
Route::resource('projects', ProjectController::class);
Route::resource('abouts',AboutController::class);
