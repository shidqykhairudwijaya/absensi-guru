<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScheduleController;

Route::get('/', function () {
    return 'Laravel berhasil jalan!';
});

Route::get('/schedules', [ScheduleController::class, 'index']);