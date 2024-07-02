<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TicketController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CheckinController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [Dashboard::class, 'index']);
Route::get('/buytickets', [TicketController::class, 'create']);
Route::post('/tickets', [TicketController::class, 'store'])->name('tickets.store');

Route::middleware(['auth'])->group(function () {
    Route::get('/ticketlist', [AdminController::class, 'index'])->name('ticketlist.index');
    Route::get('/ticketlist/{ticket}/edit', [AdminController::class, 'edit'])->name('ticketlist.edit');
    Route::put('/ticketlist/{ticket}', [AdminController::class, 'update'])->name('ticketlist.update');
    Route::delete('/ticketlist/{ticket}', [AdminController::class, 'destroy'])->name('ticketlist.destroy');
    Route::get('/checkin', [CheckinController::class, 'index'])->name('checkin.index');
    Route::post('/checkin', [CheckinController::class, 'check'])->name('checkin.check');
    Route::get('/report', [ReportController::class, 'index'])->name('report.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
