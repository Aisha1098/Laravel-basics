<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Symfony\Component\VarDumper\VarDumper;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    return view('posts',[
        'posts'=> Post::latest()->get(),
        'categories' => Category::all()
    ]);
});

Route::get('posts/{post:slug}', function (Post $post) { //Post where 'slug;,$post->firstorFail();
    //find a post by its slug and pass it to a view called "post"
    return view('post', [
        'post' => $post
    ]);
})->name('home');

Route::get('categories/{category:slug}', function (Category $category) { //Post where 'slug;,$post->firstorFail();
    //find a post by its slug and pass it to a view called "post"
    return view('posts', [
        'posts' => $category->posts,
        'currentCategory' => $category,
        'categories' => Category::all()
        ]);
})->name('category');

Route::get('authors/{author:username}', function (User $author) { //Post where 'slug;,$post->firstorFail();
    //find a post by its slug and pass it to a view called "post"
    // dd($author);
    return view('posts', [
        'posts' => $author->posts,
        'categories' => Category::all()
    ]);
});