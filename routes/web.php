<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Auth\LoginController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\PrivilegeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.pages.home');
});
Route::get('/about-us', function () {
    return view('frontend.pages.about-us');
});
Route::get('/whats-new', function () {
    return view('frontend.pages.whats-new');
});

Route::prefix('admin')->group(function () {

    Route::get('/login', [LoginController::class, 'index'])
        ->name('admin.login');

    Route::post('/login', [LoginController::class, 'authenticate'])
        ->name('admin.login.authenticate');

    Route::post('/logout', [LoginController::class, 'logout'])
        ->name('admin.logout');
});


Route::middleware('auth')
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        /*
        |--------------------------------------------------------------------------
        | Dashboard
        |--------------------------------------------------------------------------
        */

        Route::get('/dashboard', function () {
            return view('backend.pages.dashboard');
        })->name('dashboard');

        /*
        |--------------------------------------------------------------------------
        | Users
        |--------------------------------------------------------------------------
        */

        Route::resource('users', UserController::class);

        /*
        |--------------------------------------------------------------------------
        | Roles
        |--------------------------------------------------------------------------
        */

        Route::resource('roles', RoleController::class);

        /*
        |--------------------------------------------------------------------------
        | Privileges
        |--------------------------------------------------------------------------
        */

        Route::resource('privileges', PrivilegeController::class);
    });