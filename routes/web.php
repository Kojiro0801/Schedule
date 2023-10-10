<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\OptionController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(ScheduleController::class)->middleware(['auth'])->group(function(){
    Route::get('/', 'index')->name('index');
    Route::post('/schedules', 'store')->name('store');
    Route::get('/schedules/create', 'create')->name('create');
    Route::get('/schedules/{schedule}', 'show')->name('show');
    Route::put('/schedules/{schedule}', 'update')->name('update');
    Route::delete('/schedules/{schedule}', 'delete')->name('delete');
    Route::get('/schedules/{schedule}/edit', 'edit')->name('edit');
    
});

Route::get('/plans/index_vote',[PlanController::class,'index_vote']);
Route::get('/plans/{plan}',[PlanController::class,'show_vote']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
