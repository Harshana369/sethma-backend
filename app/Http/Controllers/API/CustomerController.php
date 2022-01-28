<?php

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function store(Request $request){
        
        $customer = new Customer;
        $customer->name = $request->input('name');
        $customer->address = $request->input('address');
        $customer->phone = $request->input('phone');
        $customer->email = $request->input('email');
        $customer->save();

        return response()->json([
            'status' => 200,
            'message' => 'Customer Added Successfully', 
        ]);
    }
}
