<?php

namespace App\Http\Controllers;
use App\Models\Doctors;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
            'nic' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'specialization' => 'required',
        ]);

        return doctors::create($request->all());



    }


    // data okkoma ganna method eka
    public function index(){
        return Doctors::all();
    }

    // deta delete karana method eka
    public function destroy($id) {
        return Doctors::destroy($id);
    }

    // deta update karana method eka
    public function update(Request $request, $id) {
        $doctor = Doctors::find($id);
        $doctor->update($request->all());
        return $doctor;
    }


    public function doctorcount(Request $request){
        $users = DB::table('doctors')->count();
        return $users;
    }
}
