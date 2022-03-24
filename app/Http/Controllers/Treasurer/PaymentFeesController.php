<?php

namespace App\Http\Controllers\Treasurer;

use App\Http\Controllers\Controller;
use App\Models\CertificatePayment;
use App\Models\Citizen;
use App\Models\TaxPayment;
use Illuminate\Http\Request;

class PaymentFeesController extends Controller
{
    public function index()
    {
        $citizens = Citizen::all();
        return view('treasurer.tax_payments', compact('citizens'));
    }


    public function storeTaxPayment(Request $request)
    {
        $request->validate([
            'nature_of_collection' => 'required|string',
            'account_code' => 'required|string',
            'amount' => 'required',
            'agency' => 'required',
            'payor' => 'required',
            'fund' => 'required',
            'payment_method' => 'required|string',
            'drawee_bank' => 'nullable|string',
            'drawee_bank_number' => 'nullable|string',
            'drawee_bank_date' => 'nullable|string',
        ]);

        TaxPayment::create($request->except('payor') + ['citizen_id' => $request->payor]);
        return back()->with(['success' => 'Tax Payment created']);
    }


    public function storeCertificatePayment(Request $request)
    {
        $request->validate([
            'agency' => 'required|string',
            'payor' => 'required',
            'fund' => 'required|string',
            'payment_method' => 'required|string',
            'certificate' => 'required|string',
            'drawee_bank' => 'nullable|string',
            'drawee_bank_number' => 'nullable|string',
            'drawee_bank_date' => 'nullable|string',
        ]);

        CertificatePayment::create($request->except('payor') + ['citizen_id' => $request->payor]);

        return back()->with(['success' => 'Certificate Payments Created']);
    }
}
