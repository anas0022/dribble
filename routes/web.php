<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home;
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
Route::post('/', [home::class, 'signup'])->name('signup');
Route::get('/register', [home::class, 'signuppage'])->name('signuppage');
Route::get('/registererror', function () {
    return view('registererror');
})->name('registerpage');
Route::get('/profile', [home::class, 'profile'])->name('profile');
Route::post('/profile', [home::class, 'profilepost'])->name('profilepost');
Route::get('/profilefinder', [home::class, 'profilefinder'])->name('profilefinder');
Route::get('/select', [home::class, 'select'])->name('select');
Route::get('/home',[home::class,'home'])->name('home');
Route::post('/select', [home::class, 'selectpost'])->name('selectpost');
Route::get('verify/email', [home::class,'homemain'])->name('verifyemail');
Route::get('/homemain', [home::class,'homemain'])->name('homemain');