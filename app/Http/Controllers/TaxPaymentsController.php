<?php

namespace App\Http\Controllers;

use App\Models\TaxPayment;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class TaxPaymentsController extends Controller
{
    public function index()
    {
        $tax_payments = TaxPayment::with(['citizen'])->get();

        return view('captain.tax_payments', compact('tax_payments'));
    }

    public function tax_payment_pdf()
    {
        $pdf = Pdf::loadView('certificate.tax_payment', []);
        return $pdf->stream('download.pdf');
    }
}
