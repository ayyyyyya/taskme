<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrainybotController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SettingAccountController;
use App\Http\Controllers\SettingTaskController;
use App\Http\Controllers\SettingScheduleController;

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

Route::get('/', [DashboardController::class, 'index']);

Route::prefix('tasks')->group(function () {
    Route::get('/active', [TaskController::class, 'active']);
    Route::get('/finish', [TaskController::class, 'finish']);
});

Route::get('/schedules', [ScheduleController::class, 'index']);
Route::get('/forums', [ForumController::class, 'index']);


Route::get('/master-brainybot', [BrainybotController::class, 'index']);
Route::post('/chat', [BrainybotController::class, 'chat']);


Route::get('/notifications', [NotificationController::class, 'index']);

Route::prefix('settings')->group(function () {
    Route::get('/account', [SettingAccountController::class, 'index']);
    Route::get('/task', [SettingTaskController::class, 'index']);
    Route::get('/schedule', [SettingScheduleController::class, 'index']);
});
Route::get('/report', [ReportController::class, 'index']);
