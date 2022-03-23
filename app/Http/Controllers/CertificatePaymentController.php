<?php

namespace App\Http\Controllers;

use App\Models\CitizenCertificate;
use Illuminate\Http\Request;

class CertificatePaymentController extends Controller
{
    public function index()
    {
        $certificate_payments = CitizenCertificate::all();
        return view('captain.certificate_payments', compact('certificate_payments'));
    }
}
