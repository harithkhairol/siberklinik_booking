<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/schedule', [AppointmentController::class, 'schedule'])->name('appointment.schedule');

Route::get('/history', [AppointmentController::class, 'history'])->name('appointment.history');

Route::get('/book', [AppointmentController::class, 'book'])->name('appointment.book');

Route::get('/book/date', [AppointmentController::class, 'bookDate'])->name('appointment.book.date');

Route::get('/book/date/time', [AppointmentController::class, 'bookTime'])->name('appointment.book.time');

Route::get('/book/confirm', [AppointmentController::class, 'confirm'])->name('appointment.book.confirm');

Route::post('/book/store', [AppointmentController::class, 'store'])->name('appointment.store');