<?php

use App\Http\Livewire\Crud;
use Illuminate\Support\Facades\Route;

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
    return view('frontend.home');
});
Route::get('/dashboard', function () {
    return view('backend.index');
});
Route::get('/add-agent', function () {
    return view('backend.agent.add');
});

Route::get('users', Crud::class);

/* Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('backend.index');
})->name('dashboard'); */
