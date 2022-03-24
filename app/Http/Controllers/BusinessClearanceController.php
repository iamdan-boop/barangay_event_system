<?php

namespace App\Http\Controllers;

use App\Models\BusinessClearance;
use App\Models\CitizenCertificate;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
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


    public function businessClearancePDF(BusinessClearance $clearance)
    {
        $clearance->load('citizen');

        $citizen_certificate = CitizenCertificate::where(['citizen_id' => $clearance->citizen->id])->first();

        $captain = User::role('captain')->first();


        $pdf = Pdf::loadView('certificate.barangay_certificate', [
            'citizen' => $clearance->citizen,
            'community_tax' => $citizen_certificate->community_tax,
            'created_at' => $clearance->created_at,
            'purpose' => $citizen_certificate->purpose,
            'captain' => $captain->first_name . ' ' . $captain->last_name,
            'amount_paid' => $citizen_certificate->amount_paid,
            'qr_codes' => $citizen_certificate->qr_codes,
            'control_number' => $citizen_certificate->control_number,
        ]);
        return $pdf->stream('document.pdf');
    }
}
