<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedules extends Model
{
    use HasFactory;

    protected $table = 'doctors_schedule';
    protected $fillable = [
        'doctor_id',
        'doctor_schedule_date',
        'doctor_schedule_start',
        'doctor_schedule_end',
        'average_consultation_time',
    ];

}
