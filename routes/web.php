<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\PostController;
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

Route::get('/dashboard', [Controller::class, 'index'])
    ->middleware('auth')
    ->name('dashboard');
Route::post('/post', [PostController::class, 'store'])->name('post.store');

Route::get('/posts', [PostController::class, 'index'])->name('posts');

Route::get('/users', [PostController::class, 'users'])->name('users');



require __DIR__.'/auth.php';
