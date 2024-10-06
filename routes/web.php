<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Login\LoginController;
use App\Http\Controllers\Report\ReportController;
use App\Http\Controllers\Booking\BookingController;
use App\Http\Controllers\Car\CarController;
use App\Http\Controllers\CarRoute\CarRouteController;
use App\Http\Controllers\Schedule\ScheduleController;
use App\Http\Controllers\Notification\NotificationController;
use App\Http\Controllers\SendingEmail\SendingEmailController;
use App\Http\Controllers\Account\AccountController;
use App\Http\Controllers\Setting\SettingController;


Route::get('/', function () {
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

//Car
Route::get('/car', [CarController::class, 'index'])->name('car.car');

//CarRoute
Route::get('/carRoute', [CarRouteController::class, 'index'])->name('carRoute.carRoute');

//Schedule
Route::get('/schedule', [ScheduleController::class, 'index'])->name('schedule.schedule');

//Notification
Route::get('/notification', [NotificationController::class, 'index'])->name('notification.notification');

//SendingEmail
Route::get('/sendingEmail', [SendingEmailController::class, 'index'])->name('sendingEmail.sendingEmail');

//Account
Route::get('/account', [AccountController::class, 'index'])->name('account.account');

//Setting
Route::get('/setting', [SettingController::class, 'index'])->name('setting.setting');