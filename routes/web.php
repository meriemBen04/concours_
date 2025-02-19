<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ConcoursController;
use App\Http\Controllers\SalleController;
use App\Http\Controllers\CondidatController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SpecialiteController;


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



use App\Http\Controllers\Auth\LoginController;
use App\Models\Specialite;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
// Update Concours





// // Routes pour admin et user (en fonction du rôle après la connexion)
// Route::get('/admin/home', function() {
//     return view('admins.home');
// })->name('admin.home');
// Route::get('/user/home', function() {
//     return view('users.home');
// })->name('user.home');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/home', [AdminController::class, 'index'])->name('admin.home');
});

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user/home', [UserController::class, 'index'])->name('user.home');
});

Route::get('/concours', [ConcoursController::class, 'index'])->name('concours.index');
Route::get('/specialites', [SpecialiteController::class, 'index'])->name('specialite.index');

Route::get('/scan', [HomeController::class, 'index2'])->name('concours.index');


Route::post('/concours/create',[ConcoursController::class, 'Create'])->name('concours.create');

Route::post('/concours/update/{id}', [ConcoursController::class, 'update'])->name('concours.update');
Route::post('/concours/delete/ajax', [ConcoursController::class, 'delete'])->name('concours.delete.ajax');
Route::get('/concours/viewdeleted',[ConcoursController::class, 'viewdeleted'])->name('concours.viewdeleted');

Route::get('/condidats', [CondidatController::class, 'index'])->name('condidats.index');
Route::post('/candidats/create', [CondidatController::class, 'store'])->name('candidats.store');
Route::post('/candidats/upload', [CondidatController::class, 'import'])->name('import.candidats');






Route::get('/salles', [SalleController::class, 'index'])->name('salles.index');

Route::post('/salles/create',[SalleController::class, 'create'])->name('salles.create');

Route::post('/salles/update','SalleController@update');
Route::post('/salles/delete/ajax', [SalleController::class, 'delete'])->name('salles.delete.ajax');






