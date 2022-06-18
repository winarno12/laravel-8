<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
// use App\Http\Controllers\DashboardController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\User;
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
        "title" => "Home",
        "active" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "name"  => "Attarine Cicio Ramadahan",
        "email" =>  "cicio@gmail.com",
        "image" =>  "Bernad.jpg",
        "title" => "About",
        "active" => "about"
    ]);
});

Route::get('/blog', [PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all(),
        "active" => "categories"
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' => "Post By Category: $category->name",
        'posts' => $category->posts->load('category', 'author'),
        "active" => "categories"
    ]);
});
Route::get('/authors/{author:username}', function (User $author) {
    return view('posts', [
        'title' => "Post By Author: $author->name",
        'posts' => $author->posts->load('author', 'category')
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
// Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/dashboard', function () {
    return view(
        'dashboard.index',
        [
            'title' => 'dashboard',
            'active' => ''
        ]
    );
})->middleware('auth');

// Router
Route::get('/dashboard/post/checkSlug', [DashboardPostController::class, 'checkSlug']);
Route::resource('/dashboard/post', DashboardPostController::class)->middleware('auth');
Route::resource('/dashboard/category', AdminCategoryController::class)->except('show')->middleware('admin');
// Route::resource('/dashboard/category', AdminCategoryController::class)->except('show');
// kucuali