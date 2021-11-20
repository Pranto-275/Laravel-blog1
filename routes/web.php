<?php

use App\Http\Controllers\blogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SkillController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


// Route::get('user/{name?}', function ($name = null) {
//     return "check here user:" . $name . "";
// });

// //name,required,optional parameter
// Route::get('/check/{name?}', [HomeController::class, 'index'])->name('home.index');


// Route::resource('/skill_manage', SkillController::class);


// Route::get('/blog', function () {
//     return view('blog/index');
// });

// Route::get('/blog', [blogController::class, 'indexblog']);



Route::get('/blog/create', [blogController::class, 'create'])->name('blog.create');


Route::post('/blog/store', [blogController::class, 'store'])->name('blog.store');


Route::get('/show', [blogController::class, 'show'])->name('blog.show');


Route::get('/sshow/{id}', [blogController::class, 'sshow'])->name('blog.sshow');

Route::get('/edit/{id}', [blogController::class, 'edit'])->name('blog.edit');

Route::put('/update/{id}', [blogController::class, 'update'])->name('blog.update');

Route::get('/delete/{id}', [blogController::class, 'destroy'])->name('blog.delete');
