<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Livewire\Crud;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\PackagesController;
use App\Http\Controllers\UserOTPController;

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
Route::get('/request-status', function () {
    return view('frontend.message');
})->name('request.status');

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('backend.index');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->prefix('agent')->group( function (){
    Route::get('/list', [AgentController::class,'view'])->name('agent.view');
    Route::get('/add', [AgentController::class,'addAgent'])->name('agent.add');
    Route::post('/save', [AgentController::class, 'postAgent']);
    Route::middleware(['auth:sanctum', 'verified'])->get('/profile', [AgentController::class,'agentProfile'])->name('agent.profile');
    Route::middleware(['auth:sanctum', 'verified'])->post('/profile', [AgentController::class,'agentProfile'])->name('agent.update');
});


Route::middleware(['auth:sanctum', 'verified'])->prefix('packages')->group( function (){
    Route::get('/list', [PackagesController::class,'view'])->name('package.list');
    Route::get('/add', [PackagesController::class,'create'])->name('package.add');
    Route::post('/store', [PackagesController::class,'store'])->name('package.store');
    Route::get('/edit/{id}', [PackagesController::class,'edit'])->name('package.edit');
    Route::post('/update/{id}', [PackagesController::class,'update'])->name('package.update');
    Route::delete('/delete/{id}', [PackagesController::class,'delete'])->name('package.delete');
});

Route::post('/signup-request', [AdminController::class,'signUpRequest'])->name('signup.request');

/* Route::middleware(['auth:sanctum', 'verified'])->get('/packages', [PackagesController::class,'getPackages'])->name('package.list'); */

/* Route::middleware(['auth:sanctum', 'verified'])->get('/package/add', [PackagesController::class,'createPackage'])->name('package.add'); */


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

Route::get('forget-password', [UserOTPController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('send-agent-otp', [UserOTPController::class, 'submitAgentForm'])->name('send.agent.otp');
Route::get('reset-password/{token}', [UserOTPController::class, 'showAgentResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [UserOTPController::class, 'submitAgentResetPasswordForm'])->name('reset.password.post');