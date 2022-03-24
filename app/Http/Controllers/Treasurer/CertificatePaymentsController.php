<?php

namespace App\Http\Controllers\Treasurer;

use App\Http\Controllers\Controller;
use App\Models\CertificatePayment;
use App\Models\Citizen;
use App\Models\CitizenCertificate;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class CertificatePaymentsController extends Controller
{

    public function index()
    {
        $certificate_payments = CertificatePayment::all();
        return view('treasurer.certificate_payments', compact('certificate_payments'));
    }


    public function viewCertificatePaymentPDF(CertificatePayment $certificatePayment)
    {
        $certificatePayment->load('citizen');
//
//        $citizen_certificate = CitizenCertificate::where(['citizen_id' => $certificatePayment->citizen->id])->first();
//
//        $captain = User::role('captain')->first();



        $pdf = Pdf::loadView('certificate.certificate_payments', [
            'certificate_payment' => $certificatePayment,
        ]);

//        $pdf = Pdf::loadView('certificate.barangay_certificate', [
//            'citizen' => $certificatePayment->citizen,
//            'community_tax' => $citizen_certificate->community_tax,
//            'created_at' => $certificatePayment->created_at,
//            'purpose' => $citizen_certificate->purpose,
//            'captain' => $captain->first_name. ' '. $captain->last_name,
//            'amount_paid' => $citizen_certificate->amount_paid,
//            'qr_codes' => $citizen_certificate->qr_codes,
//            'control_number' => $citizen_certificate->control_number,
//        ]);

        return $pdf->stream('certificate_payment-' . $certificatePayment->id . '.pdf');
    }
}
