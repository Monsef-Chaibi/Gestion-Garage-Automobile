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
});



Route::post('/register', [UserController::class, 'register'])->name('register');

Route::post('login', [UserController::class, 'login'])->name('login');

Route::post('logout', [UserController::class, 'logout'])->name('logout');

Route::get('/User-Dash', [UserController::class, 'UserDash'])->name('UserDash');

Route::get('/Admin-Dash', [AdminController::class, 'AdminDash'])->name('AdminDash');

Route::get('/Client-Dash', [AdminController::class, 'ClientDash'])->name('ClientDash');
