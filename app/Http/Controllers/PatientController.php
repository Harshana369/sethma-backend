<?php

namespace App\Http\Controllers;

use App\Models\Patients;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class PatientController extends Controller
{

    //data save karana method eka
    public function store(Request $request)
    {
        $request->validate([
            'nic' => 'required',
            'name' => 'required',
            'year' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);
   return Patients::create($request->all());



    }

    // data okkoma ganna method eka
    public function index(){
        return Patients::all();
    }

    // deta delete karana method eka
    public function destroy($id) {
        return Patients::destroy($id);
    }

    // deta update karana method eka
    public function update(Request $request, $id) {
        $patient = Patients::find($id);
        $patient->update($request->all());
        return $patient;
    }

    public function patientcount(Request $request){
        $users = DB::table('patients')->count();
        return $users;
    }


}
