<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appoiments extends Model
{
    use HasFactory;

    protected $table = 'appoiments';
    protected $fillable = [
        'doctor_id',
        'patient_id',
        'doctor_schedule_id',
        'appoiment_time',
    ];
}
