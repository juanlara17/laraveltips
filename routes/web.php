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
//    ->middleware('auth')
    ->name('dashboard');

Route::get('/users', [Controller::class, 'users'])->name('users');

Route::controller(PostController::class)
    ->group(function () {
        Route::post('/post', 'store')->name('post.store');
        Route::get('/posts', 'index')->name('posts');
    });

//Route::resource('user', Controller::class);

require __DIR__.'/auth.php';
