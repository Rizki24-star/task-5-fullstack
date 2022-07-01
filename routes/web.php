<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\blogController;
use App\Http\Controllers\categoriesController;
use App\Http\Controllers\dashboardBlogController;
use App\Http\Controllers\dashboardCategoryController;

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
    return view('auth/register2');
});

// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/register', function () {
//     return view('register');
// });

Route::get('/',[homeController::class, 'index'])->name('home');
Route::get('/blogs',[blogController::class, 'index']);
Route::get('/blogs/{p:id}',[blogController::class, 'detail']);
Route::get('/categories',[categoriesController::class, 'index']);
Route::get('/categories/{c:id}',[categoriesController::class, 'listCategory']);
Route::get('/author/{u:id}',[categoriesController::class, 'listAuthor']);
Route::get('/blogs/search/list',[categoriesController::class, 'listSearch']);
Route::get('/dashboard',[mypostController::class, 'index']);

Route::resource('/dashboard/blogs',dashboardBlogController::class)->middleware('auth');

Route::resource('/dashboard/category',dashboardCategoryController::class)->middleware('auth');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
