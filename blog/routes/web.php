<?php

use App\Models\Post;
use Illuminate\Support\Facades\File;
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
        'posts'=> Post::all()
    ]);
    // ddd($document->matter());
});

Route::get('posts/{post}', function ($id) {
    //find a post by its slug and pass it to a view called "post"
    return view('post', [
        'post' => Post::findOrFail($id)
    ]);
});