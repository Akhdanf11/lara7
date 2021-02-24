<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

Route::get('/', [HomeController::class, 'index']);
// Route::get('/', function() {
//     return view('welcome');
// });

//home
Route::get('posts', [PostController::class, 'index']);

//create
Route::get('posts/create', [PostController::class, 'create']);

Route::post('posts/store', [PostController::class, 'store']);

//edit
Route::get('posts/{post:slug}/edit', [PostController::class, 'edit']);

Route::patch('posts/{post:slug}/update', [PostController::class, 'update']);

//show
Route::get('posts/{post:slug}', [PostController::class, 'show']);

//page contact
Route::view('contact', 'contact');
// Route::view('series/create', 'series/create');

// Route::get('/contact', function (Request $request) {
//     // return $request->fullUrl();
//     return $request->path();
//     // return '<h1>Hello</h1>';
// });

// Route::get('/', function (Request $request) {
//     return $request->path();
// });
