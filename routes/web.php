<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Reza Alfara",
        "email" => "reza.alfara07@gmail.com",
        "image" => "tes.jpeg"
    ]);
});

Route::get('/blog', [PostController::class, 'index']);

// Halaman Single Post
Route::get('posts/{post:slug}', [PostController::class, 'show']);
