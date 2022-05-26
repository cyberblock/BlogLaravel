<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});


Route::get('/api',[ApiController::class,'index']);


Route::get('/create-post', function () {
    return view('create-post');
})->name('create-post');

Route::post('/create-post',[PostController::class,'store']);

Route::get('/dashboard', function () {
    $post = Post::all();
    if (isset($post)) {
        # code...
    return view('dashboard',compact('post'));
    }
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
