<?php

use App\Http\Controllers\InvoicesController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SectionController;

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
    return view('welcome');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    ############################# sections router##########################################

      Route::resource('sections',SectionController::class);


    ############################# end sections router##########################################



    ############################# products router##########################################
      Route::resource('products',ProductController::class);


    ############################# end products router##########################################


    ############################# invoices router##########################################

        //Route::get('/index', [InvoicesController::class, 'index'])->name('invoices.index');

        Route::resource('invoices',InvoicesController::class);




    ############################# end invoices router##########################################





});

require __DIR__.'/auth.php';
