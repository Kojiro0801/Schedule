<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScheduleController;
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


Route::get('/', [ScheduleController::class, 'index']);
Route::get('/schedules/create',[ScheduleController::class,'create']);
Route::get('/schedules/{schedule}/',[ScheduleController::class,'show']);
Route::post('/schedules/',[ScheduleController::class,'store']);
Route::delete('/schedules/{schedule}',[ScheduleController::class,'delete']);
