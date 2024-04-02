<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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



Route::get('/', function () {
    // Check if user is logged in
    if (Auth::check()) {
        $user = Auth::user();
        // Redirect to the admin dashboard if the user is an admin
        if ($user->role == 1) {
            return redirect()->route('AdminDash');
        }
        // Redirect to the standard user dashboard for other authenticated users
        return redirect()->route('UserDash');
    }
    // Show the welcome view to guests (unauthenticated users)
    return view('welcome');
})->name('Home');


Route::post('/register', [UserController::class, 'register'])->name('register');
Route::post('/login', [UserController::class, 'login'])->name('login');

// Authentication required
Route::middleware('auth')->group(function () {
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
    Route::get('/User-Dash', [UserController::class, 'UserDash'])->name('UserDash');
    Route::get('/search/vehicles', [AdminController::class, 'search'])->name('vehicles.search');

    // Admin only routes
    Route::middleware('is_admin')->group(function () {
        Route::get('/Admin-Dash', [AdminController::class, 'AdminDash'])->name('AdminDash');
        Route::get('/Client-Dash', [AdminController::class, 'ClientDash'])->name('ClientDash');
        Route::get('/Voiture-Dash', [AdminController::class, 'VoitureDash'])->name('VoitureDash');
        Route::post('/update-user', [AdminController::class, 'update'])->name('user.update');
        Route::delete('/users/{user}', [AdminController::class, 'destroy'])->name('users.destroy');
        Route::post('/vehicles', [AdminController::class, 'storeVehicle'])->name('vehicles.store');
        Route::get('/vehicle-info/{id}', [AdminController::class, 'show'])->name('vehicle.info');
        Route::delete('/delete-photo/{vehicleId}/{photoIndex}', [AdminController::class, 'DeleteImgVehicle'])->name('photo.delete');
        Route::post('/update-vehicle/{vehicle}', [AdminController::class, 'updateVehicle'])->name('vehicle.update');
        Route::delete('/Vehicle/Delete/{vehicle}', [AdminController::class, 'DestroyVehicle'])->name('vehicles.destroy');
    });
});
