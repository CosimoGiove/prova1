<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeatController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\OrderController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [Controller::class, 'index'])->name("welcome");

// Route::get('/{seat_id}', function ($seat_id) {
//     return view('welcome', compact('seat_id'));
// })->name('welcome');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/ordini-per-tavolo', [OrderController::class, 'showOrdersByTable'])->name('orders.by_table');

    // Route::get('/seats', [SeatController::class, 'index'])->name('seats.index');
    // Route::get('/seats/create', [SeatController::class, 'create'])->name('seats.create');
    // Route::post('/seats', [SeatController::class, 'store'])->name('seats.store');
    // Route::delete('/seats/{seat}', [SeatController::class, 'destroy'])->name('seats.destroy');


    // Route::get('/seats', [SeatController::class, 'index'])->name('seats.index');
    // Route::get('/seats/create', [SeatController::class, 'create'])->name('seats.create');
    // Route::post('/seats', [SeatController::class, 'store'])->name('seats.store');
    // Route::delete('/seats/{seat}', [SeatController::class, 'destroy'])->name('seats.destroy');

    // Route::get('/seats/{seat}', [SeatController::class, 'how'])->name('seats.show');
    // Route::get('/seats/{seat}/orders/create', [OrderController::class, 'createOrder'])->name('orders.create');
    // Route::post('/seats/{seat}/orders', [OrderController::class, 'store'])->name('orders.store');
    // Route::get('/orders/{seat}', [OrderController::class, 'getOrdersBySeat'])->name('orders.index');
    // routes/web.php

});
// Route::get('/seats', [SeatController::class, 'index'])->name('seats.index');
// Route::get('/seats/create', [SeatController::class, 'create'])->name('seats.create');
// Route::post('/seats', [SeatController::class, 'store'])->name('seats.store');
// Route::delete('/seats/{seat}', [SeatController::class, 'destroy'])->name('seats.destroy');
Route::get('/seats/{seat}/orders/create', [OrderController::class, 'createOrder'])->name('orders.create');
Route::get('/seats/{seat}/orders/create', [OrderController::class, 'createOrder'])->name('orders.create');
    Route::post('/seats/{seat}/orders', [OrderController::class, 'store'])->name('orders.store');
    Route::get('/orders/{seat}', [OrderController::class, 'getOrdersBySeat'])->name('orders.index');
    Route::get('/orders/{seat}/edit{order}', [OrderController::class, 'edit'])->name('orders.edit');
    Route::put('/orders/{order}', [OrderController::class, 'update'])->name('orders.update');
    // Route::get('/seats/{seat}', [SeatController::class, 'show'])->name('seats.show');
    Route::get('/seats/{seat}/orders', [SeatController::class, 'showOrders'])->name('seats.showOrders');
    Route::delete('/seats/{seat}/orders/{order}', [OrderController::class, 'destroy'])->name('orders.destroy');
    Route::get('/seats', [SeatController::class, 'index'])->name('seats.index');
    Route::get('/seats/create', [SeatController::class, 'create'])->name('seats.create');
    Route::post('/seats', [SeatController::class, 'store'])->name('seats.store');
    Route::delete('/seats/{seat}', [SeatController::class, 'destroy'])->name('seats.destroy');



require __DIR__.'/auth.php';