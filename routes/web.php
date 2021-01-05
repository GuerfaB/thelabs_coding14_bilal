<?php

use App\Http\Controllers\AdminLogoController;
use App\Http\Controllers\AdminNavController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get("/", [HomeController::class , "index"])->name("home");
Route::get("/service", [ServiceController::class, "index"])->name("service");
Route::get("/blog", [BlogController::class, "index"])->name("blog");
Route::get("/blogpost", [BlogPostController::class, "index"])->name("blogpost");
Route::get("/contact", [ContactController::class, "index"])->name("contact");
Route::get("/admin/user", [AdminUserController::class, "index"])->name("adminUser");
Route::get("/admin/nav", [AdminNavController::class, "index"])->name("adminNav");
Route::get("/admin/logo", [AdminLogoController::class, "index"])->name("adminLogo");

// Ressource
Route::resource("/user", UserController::class);
Route::resource("/navbar", NavbarController::class);
Route::resource("/logo", LogoController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Auth::routes();

Route::get('/home', function() {
    return view('homeLTE');
})->name('homeLTE')->middleware('auth');