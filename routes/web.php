<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\MassageController;
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
Route::get('/Services', [ViewController::class, 'services'])->name('Services');
Route::get('/contact', [ViewController::class, 'contact'])->name('contact');
Route::get('/blog', [ViewController::class, 'blog'])->name('blog');
//Route::get('/blog', function () {
//    return view('w3soft.blog',[
//        'route' => 'blog'
//    ]);
//})->name('blog');

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
Route::resource('posts',\App\Http\Controllers\PostController::class)->middleware('auth');
Route::resource('users', UserController::class)->middleware('auth');
Route::resource('categories', CategoryController::class)->middleware('auth');
Route::resource('projects', ProjectController::class)->middleware('auth');
Route::resource('abouts',AboutController::class)->middleware('auth');
Route::resource('massage',MassageController::class)->middleware('auth');
Route::resource('services',\App\Http\Controllers\ServiceController::class)->middleware('auth');
