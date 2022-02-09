<?php

namespace App\Http\Controllers;

use App\Models\Appoiments;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class AppoimentController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
            'doctor_id' => 'required',
            'patient_id' => 'required',
            'doctor_schedule_id' => 'required',
            'appoiment_number' => 'required',
            'appoiment_time' => 'required',
        ]);

        return Appoiments::create($request->all());

    }

//    public function todayappoiments(Request $request)
//    {
//        $users = DB::table('appoiments')
//            ->where('created_at', '=', 'DATE()')
//            ->count();
//        return $users;
//
//    }

    public function toteleappoiments(Request $request)
    {
        $users = DB::table('appoiments')->count();
        return $users;
    }

}
