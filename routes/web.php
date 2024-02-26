<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ClientController;

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

Route::get('language/{language}', function ($language) {
    Session()->put('locale', $language);

    return redirect()->back();
})->name('language');

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [
        ClientController::class, 'index'
    ])->name('dashboard');
    Route::get('/client/{client}', [
        ClientController::class, 'show'
    ])->name('client');
    Route::get('/newClient', [
        ClientController::class, 'create'
    ])->name('newClient');
    Route::post('/createClient', [
        ClientController::class, 'store'
    ])->name('createClient');
    Route::get('/planning', function () {
        return Inertia::render('Planning');
    })->name('planning');
    Route::get('/cloud', function () {
        return Inertia::render('Cloud');
    })->name('cloud');
    Route::get('/payment', function () {
        return Inertia::render('Payments');
    })->name('payment');
});
