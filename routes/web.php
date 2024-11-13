<?php

use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\PackageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});


Route::get('/login' , [AuthController::class , 'loginForm'])->name('admin.login-form');
Route::post('/login' , [AuthController::class , 'login'])->name('login');

Route::middleware(['auth:web'])->group(function(){
    Route::get('/dashboard',[AuthController::class,'index'])->name('admin.dashboard');
    Route::get('/logout' , [AuthController::class , 'logout'])->name('admin.logout');

    Route::resource('packages' , PackageController::class)->only('index','store','create');
    
    Route::prefix('packages')->controller(PackageController::class)->group(function(){
        Route::get('/export-packages', [PackageController::class, 'export'])->name('export.packages');
    });

});
