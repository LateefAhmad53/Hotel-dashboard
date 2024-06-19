<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Admin\AdminPageController;
use App\Http\Controllers\Admin\AdminPostController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Frontend\PostController;

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

Route::get('/', [PageController::class, 'index']);

Route::post('save-reservation', [PostController::class, 'savereservation']);

Route::get('/about', [PageController::class, 'about']);

Route::get('/contact', [PageController::class, 'contact']);

Route::post('sigin', [AuthController::class, 'signin']);

Route::get('login', [PageController::class, 'login'])->name('login');

Route::get('register', [PageController::class, 'signup'])->name('signup');

Route::post('savelogin', [AuthController::class, 'savelogin']);

Route::get('logout', [AuthController::class, 'logout'])->name('logout');


Route::group(['middleware' => 'auth', 'prefix' => 'admin', 'before' => 'admin'], function () {

    Route::get('/dashboard', [AdminPageController::class, 'dashboard'])->name('admindashboard');


    Route::get('/guests', [AdminPageController::class, 'guests']);

    Route::post('save-guest', [AdminPostController::class, 'saveguest']);

    Route::post('update-guest/{id}', [AdminPostController::class, 'updateguest'])->name('updateguest');

    Route::get('delete-guest/{id}', [AdminPostController::class, 'deleteguest'])->name('deleteguest');


    Route::get('/rooms', [AdminPageController::class, 'rooms']);

    Route::post('save-room', [AdminPostController::class, 'saveroom']);

    Route::post('update-room/{id}', [AdminPostController::class, 'updateroom'])->name('updateroom');

    Route::get('delete-room/{id}', [AdminPostController::class, 'deleteroom'])->name('deleteroom');


    Route::get('/reservations', [AdminPageController::class, 'reservations']);


    Route::get('/bookings', [AdminPageController::class, 'bookings']);

    Route::post('save-booking', [AdminPostController::class, 'savebooking']);

    Route::post('update-booking/{id}', [AdminPostController::class, 'updatebooking'])->name('updatebooking');

    Route::get('delete-booking/{id}', [AdminPostController::class, 'deletebooking'])->name('deletebooking');

    Route::get('checkout-guest/{id}', [AdminPostController::class, 'checkoutguest'])->name('checkout');


    Route::get('/payments', [AdminPageController::class, 'payments']);

    Route::post('save-payment', [AdminPostController::class, 'savepayment']);

    Route::post('update-payment/{id}', [AdminPostController::class, 'updatepayment'])->name('updatepayment');

    Route::get('delete-payment/{id}', [AdminPostController::class, 'deletepayment'])->name('deletepayment');


    Route::get('/occupancy-rate-report', [AdminPageController::class, 'occupancyrate'])->name('occupancy_reports');

    Route::get('/reports-occupancy', [AdminPostController::class, 'showOccupancy'])->name('reports.occupancy');


    Route::get('/revenue-report', [AdminPageController::class, 'revenue']);

    Route::get('/reports-revenue', [AdminPostController::class, 'showRevenue'])->name('reports.revenue');


    Route::get('/guest-report', [AdminPageController::class, 'guestreport']);

    Route::get('/reports-guests', [AdminPostController::class, 'showGuests'])->name('reports.guests');
});
