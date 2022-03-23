<?php

namespace App\Http\Controllers;

use App\Models\CessationBusiness;
use Illuminate\Http\Request;

class CessationBusinessController extends Controller
{

    public function index() {
        $cessations = CessationBusiness::all();
        return view('captain.cessation_business', compact('cessations'));
    }

    public function store(Request $request) {
        $request->validate([
            'citizen_id' => 'required',
            'business_name' => 'required',
            'address' => 'required',
            'business_owner' => 'required',
            'owner_address' => 'required',
            'cessation_date' => 'required',
            'purpose' => 'required',
        ]);


        CessationBusiness::create($request->all());
        return back()->with(['success' => 'Business Cessation Submitted Successfully']);
    }
}
