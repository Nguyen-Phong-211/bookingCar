<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Login\LoginController;
use App\Http\Controllers\Report\ReportController;
use App\Http\Controllers\Booking\BookingController;

Route::get('/', function () {
    //return view('home.home');
    return view('login.login');
});

//Login

//Route::get('/login', [LoginController::class, 'index'])->name('login');

//Home
Route::get('/home', [HomeController::class, 'index'])->name('home.home');

//Report
Route::get('/report', [ReportController::class, 'index'])->name('report.report');

//Booking
Route::get('/booking', [BookingController::class, 'index'])->name('booking.booking');