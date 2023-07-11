<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Jotam\CustomerController;


Route::middleware('jotam.user')->group(function () {
    Route::get('/customers/dashboard/', [CustomerController::class, 'dashboard'])->name('customers.dashboard');
    Route::get('/customers/index/', [CustomerController::class, 'index'])->name('customers.index');
    Route::get('/customers/{customer}', [CustomerController::class, 'show'])->name('customers.show');  
    Route::get('/customers-get/{id}/js/', [CustomerController::class, 'get_js'])->name('customers.get-js');  
    Route::POST('/customers-search/post/', [CustomerController::class, 'search'])->name('customers.search'); 
});

Route::middleware('jotam.admin')->group(function () {
    Route::get('/customers-new/create/', [CustomerController::class, 'create'])->name('customers.create');
    Route::post('/customers-store/store', [CustomerController::class, 'store'])->name('customers.store');
    Route::put('/customers-update/{customer}/update/', [CustomerController::class, 'update'])->name('customers.update');
    Route::post('/customers-destroy/{customer}/destroy', [CustomerController::class, 'destroy'])->name('customers.destroy');
    Route::post('/customers-import/from/excel', [CustomerController::class, 'import'])->name('customers.import');
});