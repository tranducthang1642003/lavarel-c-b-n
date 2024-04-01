

<?php
use App\Http\Controllers\my\index;
use App\Http\Controllers\my\shop;
use App\Http\Controllers\admin\loginadmin;
use App\Http\Controllers\my\cart;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\my\contact;
use Illuminate\Support\Facades\Route;
Route::get('/',[index::class,'index']);
Route::get('/sanpham',[shop::class,'sanpham']);
Route::get('/showshop',[shop::class,'showshop']);
Route::get('/cart',[cart::class,'cart']);
Route::get('/checkout',[cart::class,'checkout']);
Route::get('/contact',[contact::class,'contact']);
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);




Route::get('/login', [RegisterController::class,'showLoginForm'])->name('login');
Route::post('/login', [RegisterController::class, 'login']);

Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');


Route::get('/admin',[loginadmin::class,'index']);
Route::get('/trangchu',[loginadmin::class,'trangchu']);