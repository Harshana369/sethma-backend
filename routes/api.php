<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\AppoimentController;

Route::middleware(['cors'])->group(function () {
    Route::post('/patients', [PatientController::class, 'store']);
    Route::get('/patients',[PatientController::class, 'index']);
    Route::delete('/patients/{id}', [PatientController::class, 'destroy']);
    Route::put('/patients/{id}', [PatientController::class, 'update']);
    Route::get('/patientscount',[PatientController::class,'patientcount']);



    Route::post('/doctors', [DoctorController::class, 'store']);
    Route::get('/doctors',[DoctorController::class, 'index']);
    Route::delete('/doctors/{id}', [DoctorController::class, 'destroy']);
    Route::put('/doctors/{id}', [DoctorController::class, 'update']);
    Route::get('/doctorcount',[DoctorController::class,'doctorcount']);


    Route::post('/schedules', [ScheduleController::class, 'store']);
    Route::get('/schedules',[ScheduleController::class,'index']);

    Route::post('/appoiments', [AppoimentController::class, 'store']);
//    Route::get('/todayappoiments', [AppoimentController::class, 'todayappoiments']);
    Route::get('/toteleappoiments', [AppoimentController::class, 'toteleappoiments']);



});





