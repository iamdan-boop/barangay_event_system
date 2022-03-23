<?php

namespace App\Http\Controllers;

use App\Models\BusinessClearance;
use Illuminate\Http\Request;

class BusinessClearanceController extends Controller
{
    public function index()
    {
        $business_clearances = BusinessClearance::all();

        return view('captain.business_clearance', compact('business_clearances'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'business_name' => 'required',
            'address' => 'required',
            'business_type' => 'required',
            'manager' => 'required',
            'residence_address' => 'required',
            'applied_for' => 'required',
            'cert_no' => 'required',
            'or_no' => 'required',
            'amount_paid' => 'required',
            'control_no' => 'required',
            'citizen_id' => 'required',
        ]);

        BusinessClearance::create($request->all());

        return back()->with(['success' => 'Business Clearance Submitted Successfully']);
    }
}
