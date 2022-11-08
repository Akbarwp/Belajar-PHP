<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('home', [
        "title" => "Home"
        // "active" => "home"
    ]);
});

Route::get('/about', function() {
    return view('about', [
        "title"  => "About",
        // "active" => "about",

        "name" => "Ucup bin Slamet",
        "email" => "ucupganteng@gmail.com",
        "nim" => "12345",
        "image" => "ucup.jpg"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);

// Halaman Single Post
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Post Categories',
        // "active" => "categories",
        'categories' => Category::all()
    ]);
});

// Route::get('/categories/{category:slug}', function (Category $category) {
//     return view('posts', [
//         'title' =>"Post By Category :  $category->name",
//         "active" => "categories",
//         // Lazy Eager Loading
//         'posts' => $category->posts->load('category', 'author')
//     ]);
// });

// Route::get('/authors/{author:username}', function(User $author) {
//     return view('posts', [
//         'title' => "Post By : $author->name",
//         "active" => "posts",
//         'posts' => $author->posts->load('category', 'author')
//     ]);
// });

// Login Logout
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);


// Dashboard
Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

// Dashboard Post
Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');


// Dashboard Category
Route::get('/dashboard/categories/checkSlug', [AdminCategoryController::class, 'checkSlug'])->middleware('admin');

// Middelware Authorization
// Route::resource('/dashboard/categories', AdminCategoryController::class)->middleware('admin');

// Gate Authorization
// Route::resource('/dashboard/categories', AdminCategoryController::class);

// Middleware & Gate Authorization
Route::resource('/dashboard/categories', AdminCategoryController::class)->middleware('admin');