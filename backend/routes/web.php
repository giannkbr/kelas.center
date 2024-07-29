<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\CategoryBenefitsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BenefitController;
use App\Http\Controllers\CategoryKelasController;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->name('admin.')->group(function () {
	Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
});


Route::resource('benefits', BenefitController::class);
Route::resource('categoryBenefit', CategoryBenefitsController::class);

Route::resource('categoryKelas', CategoryKelasController::class);
