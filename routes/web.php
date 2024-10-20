<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogAController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogDetailsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\KontakControllers;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\StarterController;
use App\Http\Controllers\TeamController;
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
    return view('index');
});

Route::get('/blog', [BlogController::class,'index'])->name('blog.index');
Route::post('/blog', [BlogController::class,'store'])->name('blog.store');
Route::get('/blog/create', [BlogController::class,'create'])->name('blog.create');
Route::get('/blog/{blog}', [BlogController::class,'show'])->name('blog.show');
Route::put('/blog/{blog}', [BlogController::class,'update'])->name('blog.update');
Route::delete('/blog/{blog}', [BlogController::class,'destroy'])->name('blog.destroy');
Route::get('/blog/{blog}/edit', [BlogController::class,'edit'])->name('blog.edit');
// Route::get('/contact', [ContactController::class,'create'])->name('contact.create');
Route::post('/contacts', [ContactController::class,'store'])->name('contact.store');
Route::get('/portofolio', [PortofolioController::class,'index'])->name('portofolio.index');
Route::get('/blog', [BlogDetailsController::class,'index'])->name('blog-details.index');
Route::get('/services', [ServicesController::class,'index'])->name('services.index');
Route::get('/starter', [StarterController::class,'index'])->name('starter.index');
Route::get('/team', [TeamController::class,'index'])->name('team.index');
Route::get('/about', [AboutController::class,'index'])->name('about.index');
Route::get('/kontak', [KontakControllers::class,'index'])->name('kontak.index');






