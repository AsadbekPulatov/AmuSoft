<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\MassageController;
use App\Http\Controllers\CourseController;
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


//Localisation

Route::get('locale/{lang}',[\App\Http\Controllers\LocalizationController::class,'setLang'])->name('language');


Route::get('/', [ViewController::class, 'home'])->name('index');
Route::get('/about', [ViewController::class,'about'])->name('about');
Route::get('/portfolio', [ViewController::class, 'portfolio'])->name('portfolio');
Route::get('/Services', [ViewController::class, 'services'])->name('Services');
Route::get('/contact', [ViewController::class, 'contact'])->name('contact');
Route::get('/blog', [ViewController::class, 'blog'])->name('blog');
Route::get('/singlepage/{id?}', [ViewController::class, 'singlepage'])->name('singlepage');
Route::get('/course', [ViewController::class, 'course'])->name('course');
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
Route::resource('massage',MassageController::class);
Route::resource('services',\App\Http\Controllers\ServiceController::class)->middleware('auth');
Route::resource('courses', CourseController::class)->middleware('auth');
Route::resource('bookings', \App\Http\Controllers\BookingController::class);
