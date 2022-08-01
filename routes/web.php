<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProgramsController;
use App\Http\Controllers\Admin\ApplicationController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;


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


//NEW
Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::resource('application', ApplicationController::class);
    Route::resource('programs', ProgramsController::class);
});


Route::group(['as' => 'registrar.', 'prefix' => 'registrar', 'middleware' => ['auth', 'registrar']], function () {
    Route::get('/dashboard', [App\Http\Controllers\Registrar\DashboardController::class, 'index'])->name('dashboard');
});

Route::group(['as' => 'dean.', 'prefix' => 'dean', 'middleware' => ['auth', 'dean']], function () {
    Route::get('/dashboard', [App\Http\Controllers\Dean\DashboardController::class, 'index'])->name('dashboard');
});

Route::group(['as' => 'adviser.', 'prefix' => 'adviser', 'middleware' => ['auth', 'adviser']], function () {
    Route::get('/dashboard', [App\Http\Controllers\Adviser\DashboardController::class, 'index'])->name('dashboard');
});

Route::group(['as' => '', 'prefix' => '', 'middleware' => ['auth', 'applicant']], function () {
    Route::get('/dashboard', [App\Http\Controllers\Applicant\DashboardController::class, 'index'])->name('dashboard');
});


/*
Route::resource('/application', ApplicationController::class);
Route::resource('/programs', ProgramsController::class);
*/