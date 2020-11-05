<?php

use App\Http\Livewire\CompanyLogin;
use App\Http\Livewire\CompanyRegister;
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
    return view('welcome');
});

Route::group(['middleware' => ['guest']], function () {
    Route::get('company/register', [CompanyRegister::class, 'render']);
    Route::get('company/login', [CompanyLogin::class, 'render']);

});


Route::middleware(['auth:sanctum', 'type:employee', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'type:company', 'verified'])->get('company/dashboard', function () {
    return view('company.dashboard');
})->name('dashboard');
