<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\IndextController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Facades\Voyager;

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

// Route::get('/', function () {
//     return redirect(app()->getLocale());
//     //return redirect('/');
//     //app()->setLocale('en');
// });


// Route::group(
//     [
//         'prefix' => '{locale}',
//         //'where' => ['locale' => '[a-zA-Z]{2}'], 
//         'where' => ['locale' => '^' . implode('|', config('app.locales')) . '$'],
//         'middleware' => 'setlocale'
//     ],
//     function () {

Route::get('/', [IndextController::class, 'index'])->name('homes');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('blogs/{slug?}', [PostController::class, 'index'])->name('blogs.index');

Route::get('posts/{slug}', [PostController::class, 'show'])->name('posts.show');

Auth::routes();
Route::post('register', [AuthController::class, 'register'])->name('user.register');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('contact', [ContactController::class, 'create'])->name('contact.create');

Route::post('contact', [ContactController::class, 'store'])->name('contact.store');
//     }
// );
