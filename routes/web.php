<?php declare(strict_types=1);

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [Controller::class, 'index'])->name('dashboard')->middleware('auth');


require __DIR__.'/auth.php';
