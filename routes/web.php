<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\UserController;
use App\Models\User;
use App\Models\Jabatan;

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

Route::resource('admin/jabatan', JabatanController::class)->names([
    'index' => 'jabatan.index',
    'store' => 'jabatan.store',
    'update' => 'jabatan.update',
    'destroy' => 'jabatan.destroy',
]);

// Resource Route untuk User
// Menggunakan ->names agar bisa dipanggil dengan route('user.index') di dashboard
Route::resource('admin/user', UserController::class)->names([
    'index' => 'user.index',
    'store' => 'user.store',
    'update' => 'user.update',
    'destroy' => 'user.destroy',
]);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard', [
        'jml_user' => User::count(),
        'jml_jabatan' => Jabatan::count(),
    ]);
})->middleware(['auth'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('frontend.index');
})->name('home');


