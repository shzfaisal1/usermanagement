<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ForgotPasswordController;





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
    return view('login');
})->middleware('alreadyLoggedIn');

// Registration Routes
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register')->middleware('alreadyLoggedIn');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/user/show', [RegisterController::class, 'UsersData'])->name('show.user');
Route::get('/delete/form/{id}',[RegisterController::class,'delete'])->name('delete.user');
Route::get('/edit/form/{id}',[RegisterController::class,'edit'])->name('edit.form');
Route::put('/form/update',[RegisterController::class,'update'])->name('update.form');
Route::get('/add/users',[RegisterController::class,'add'])->name('add.users');
Route::post('/store', [RegisterController::class, 'store']);
Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::get('forget-form/{token}', [ForgotPasswordController::class, 'forgetform'])->name('forget.password.form');


Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');



Route::post('/login', [LoginController::class, 'loginUser']);

Route::get('/dashboard', [LoginController::class,'dashboard'])->middleware('isLoggedIn');
Route::get('/userpage', [LoginController::class,'userpage'])->middleware('isLoggedIn');

Route::get('/logout',[LoginController::class,'logout']);
Route::put('/user/update', [LoginController::class, 'update'])->name('user.update');







