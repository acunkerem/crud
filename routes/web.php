<?php
use App\Http\Controllers\VeriController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;

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
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/veriler', [VeriController::class, 'index'])->name('veriler.index');
    Route::get('/veriler/create', [VeriController::class, 'create'])->name('veriler.create');
    Route::post('/veriler', [VeriController::class, 'store'])->name('veriler.store');
    Route::get('/veriler/{veri}/edit', [VeriController::class, 'edit'])->name('veriler.edit');
    Route::put('/veriler/{veri}', [VeriController::class,'update'])->name('veriler.update');
    Route::get('/veriler/{veri}', [VeriController::class, 'show'])->name('veriler.show');
    Route::delete('/veriler/{veri}', [VeriController::class, 'destroy'])->name('veriler.destroy');
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('register', [RegisteredUserController::class, 'create'])
    ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);
});

require __DIR__.'/auth.php';
