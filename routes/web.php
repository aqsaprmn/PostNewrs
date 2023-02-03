<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Faker\Provider\Lorem;
use Illuminate\Support\Facades\Route;
use PhpParser\ErrorHandler\Collecting;

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
        'active' => 'home',
        'title' => "Home",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'active' => 'about',
        'title' => "About",
        'name' => "Aqsha Permana Fityantono",
        'email' => "aqshaprogramming@gmail.com",
        'image' => "me.jpeg"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'active' => 'categories',
        'title' => "News Categories",
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'active' => 'categories',
        'title' => "News by category: $category->name",
        'posts' => $category->posts->load(['author', 'category']),
        // 'category' => $category->name
    ]);
});

Route::get('/authors/{author:username}', function (User $author) {
    return view('posts', [
        'active' => 'news',
        'title' => "News ny author: $author->name",
        'posts' => $author->post->load(['author', 'category']),
    ]);
});
