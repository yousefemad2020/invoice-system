<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SectionController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

// Route::get('module',function(){
//     return view('modals') ;
// });


Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {

    Route::group([
        "middleware" => "auth" ,
    ], function () {
        // Invoice
        Route::resource('invoice', InvoiceController::class);

        // Sections
        Route::get('sections', [SectionController::class, 'index'])->name('sections.index');
        Route::get('sections/create', [SectionController::class, 'create'])->name('sections.create');
        Route::post('sections', [SectionController::class, 'store'])->name('sections.store');
        Route::get('sections/{section}', [SectionController::class, 'show'])->name('sections.show');
        Route::get('sections/{section}/edit', [SectionController::class, 'edit'])->name('sections.edit');
        Route::patch('sections', [SectionController::class, 'update'])->name('sections.update');
        Route::delete('sections', [SectionController::class, 'destroy'])->name('sections.destroy');

        // Products
        Route::get('products', [ProductController::class, 'index'])->name('products.index');
        Route::get('products/create', [ProductController::class, 'create'])->name('products.create');
        Route::post('products', [ProductController::class, 'store'])->name('products.store');
        Route::get('products/{section}', [ProductController::class, 'show'])->name('products.show');
        Route::get('products/{section}/edit', [ProductController::class, 'edit'])->name('products.edit');
        Route::patch('products', [ProductController::class, 'update'])->name('products.update');
        Route::delete('products', [ProductController::class, 'destroy'])->name('products.destroy');
    });




    Auth::routes();
    Route::middleware('guest')->get('/', function () {
        return view('auth.login');
    });

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/{page}', [AdminController::class, 'index']);
    Route::resource('invoice', InvoiceController::class);
});
