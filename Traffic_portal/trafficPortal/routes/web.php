<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tpdashboard;
use App\Http\Controllers\tpdutyController;
use App\Http\Controllers\dutyEmployeeControler;
use App\Http\Controllers\aidashboard;
use App\Http\Controllers\loginController;

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
    return view('login');
});
Route::get('/login', [loginController::class,'loginVeiw'])->name('login');
Route::post('/login', [loginController::class,'login'])->name('login');
Route::get('/logout',[loginController::class,'logout'])->name('logout');

Route::get('/tpi',[tpdashboard::class, 'index'])->middleware('Validuser');
Route::get('/tpi/demploye/{id}',[tpdashboard::class, 'dutyEmployeProfile'])->middleware('Validuser');
Route::get('/tpi/employelist',[tpdashboard::class, 'em_list'])->middleware('Validuser');
Route::get('/tpi/duty',[tpdutyController::class, 'em_list'])->middleware('Validuser');
Route::get('/tpi/generateduty',[tpdutyController::class, 'generate'])->middleware('Validuser');
Route::get('/tpi/leftchartdata',[tpdashboard::class, 'monthlyzonechart'])->middleware('Validuser');
Route::get('/tpi/leftchartdata/daily',[tpdashboard::class, 'dailyzonechart'])->middleware('Validuser');

Route::get('/ai',[aidashboard::class, 'index'])->middleware('Validuser')->middleware('Validuser');
Route::get('/ai/demploye/{id}',[aidashboard::class, 'dutyEmployeProfile'])->middleware('Validuser');
Route::get('/aiprofile',[aidashboard::class, 'AiProfile'])->middleware('Validuser');
Route::get('/ai/leftchartdata',[aidashboard::class, 'monthlyzonechart'])->middleware('Validuser');
Route::get('/ai/leftchartdata/daily',[tpdashboard::class, 'dailyzonechart'])->middleware('Validuser');

// Route::get('/tpi/employelist',[tpdashboard::class, 'em_list']);

// Duty Employee Route

Route::get('/dutyemployee',[dutyEmployeeControler::class,'loadDutyEmployeeView'])->middleware('Validuser');
Route::get('/dutyemployee/weekSc',[dutyEmployeeControler::class,'loadDutyScheduleView'])->middleware('Validuser');
Route::get('/dutyemployee/eChalan',[dutyEmployeeControler::class,'loadE_ChalanView'])->middleware('Validuser');




