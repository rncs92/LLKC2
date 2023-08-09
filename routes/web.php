<?php declare(strict_types=1);

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FarmController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [Controller::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('/dashboard', [Controller::class, 'show'])->name('dashboard')->middleware('auth');
Route::get('/farms', [FarmController::class, 'create'])->name('farms')->middleware('web');
Route::post('/farms', [FarmController::class, 'store'])->name('farms')->middleware('web');
Route::get('/animals', [AnimalController::class, 'index'])->name('animals')->middleware('web');

require __DIR__ . '/auth.php';
