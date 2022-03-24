<?php

namespace App\Http\Controllers;

use App\Models\CertificatePayment;
use App\Models\CitizenCertificate;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class CitizenCertificateController extends Controller
{
    public function index()
    {
        $certificate_payments = CertificatePayment::with(['citizen'])->get();
        return view('captain.certificate_payments', compact('certificate_payments'));
    }


    public function viewCitizenCertificatePDF(CitizenCertificate $citizenCertificate)
    {
        $citizenCertificate->load('citizen');

        $captain = User::role('captain')->first();

        $pdf = Pdf::loadView('certificate.barangay_certificate', [
            'citizen' => $citizenCertificate->citizen,
            'community_tax' => $citizenCertificate->community_tax,
            'created_at' => $citizenCertificate->created_at,
            'purpose' => $citizenCertificate->purpose,
            'captain' => $captain->first_name. ' '. $captain->last_name,
            'amount_paid' => $citizenCertificate->amount_paid,
            'qr_codes' => $citizenCertificate->qr_codes,
            'control_number' => $citizenCertificate->control_number,
        ]);
        return $pdf->stream('document.pdf');
    }
}
