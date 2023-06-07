<?php

// use App\Http\Controllers\Admin\DashboardController;
// use App\Http\Controllers\ProfileController;
// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware(['auth', 'verified'])->group(function () {
//     Route::get('/admin', [DashboardController::class, 'index'])->name('dashboard');
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\PippoController;
use App\Http\Controllers\Admin\ProjectController;

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

 Route::get('/', [PippoController::class, 'index'])->name('home');
// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/about', [PostController::class, 'about'])->name('about');

// Route::get('/contact', [PostController::class, 'contact'])->name('contact');

// Route::resource('/admin/projects', ProjectController::class, ['as' => 'admin']);