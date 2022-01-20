<?php

use App\Http\Controllers\AdminController;
use App\Http\Livewire\Crud;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\PackagesController;
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

Route::get('/registerme', function () {
    return view('auth.register_old');
});
Route::get('/', function () {
    return view('frontend.homepage');
});

Route::get('/listing', function () {
    return view('frontend.listing');
});
Route::get('/listing-details', function () {
    return view('frontend.detail-listing');
});
Route::get('/about-us', function () {
    return view('frontend.about');
});
Route::get('/contact-us', function () {
    return view('frontend.contact');
});

Route::get('/dashboard', function () {
    return view('backend.index');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/add-agent', [UserController::class,'addAgent'])->name('add.agent');

Route::post('/signup-request', [AdminController::class,'signUpRequest'])->name('signup.request');

Route::middleware(['auth:sanctum', 'verified'])->get('/packages', [PackagesController::class,'getPackages'])->name('all.packages');

Route::middleware(['auth:sanctum', 'verified'])->get('/package/add', [PackagesController::class,'createPackage'])->name('add.package');


Route::middleware(['auth:sanctum', 'verified'])->get('/properties', function () {
    return view('backend.properties.list');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/properties/grid', function () {
    return view('backend.properties.grid');
});
Route::middleware(['auth:sanctum', 'verified'])->get('/property/add', function () {
    return view('backend.properties.add');
});


Route::get('users', Crud::class);

/* Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('backend.index');
})->name('dashboard'); */