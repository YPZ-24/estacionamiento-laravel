<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LandingController;
use App\Http\Controllers\UserController;

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
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', function () {
    return view('dashboard.upload_image');
});
*/
/*
Route::prefix('/dashboard')->name('dashboard')->group(function(){
    //Route::get('user/profile-photo/{user}/edit', [UserController::class, 'createProfilePhoto'])->name('user.create-profile-photo');
    //Route::put('user/profile-photo/{user}', [UserController::class, 'storeProfilePhoto'])->name('user.store-profile-photo');

    Route::resource('users', UserController::class);
});*/

Route::get('/dashboard/users/create', [UserController::class, 'create'])->name('dashboard.users.create');
Route::post('/dashboard/users/store', [UserController::class, 'store'])->name('dashboard.users.store');

Route::get('/', [LandingController::class, 'home']);

