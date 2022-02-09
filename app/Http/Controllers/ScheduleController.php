<?php

namespace App\Http\Controllers;


use App\Models\Schedules;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ScheduleController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'doctor_id' => 'required',
            'doctor_schedule_date' => 'required',
            'doctor_schedule_start' => 'required',
            'doctor_schedule_end' => 'required',
            'average_consultation_time' => 'required',
        ]);
       return Schedules::create($request->all());
    }

    
    public function index(){
        return Schedules::all();
    }
}
