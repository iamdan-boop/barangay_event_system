<?php

namespace App\Http\Controllers\Treasurer;

use App\Http\Controllers\Controller;
use App\Models\TaxPayment;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class TaxPaymentsController extends Controller
{
    public function index()
    {
        $tax_payments = TaxPayment::all();
        return view('treasurer.tax_payments_list', compact('tax_payments'));
    }


    public function viewTaxPaymentPDF(TaxPayment $taxPayment)
    {
        $number_formatted = new \NumberFormatter("en", \NumberFormatter::SPELLOUT);
        $formatted_amount = $number_formatted->format($taxPayment->amount);
        $pdf = Pdf::loadView('certificate.tax_payment', ['tax_payment' => $taxPayment, 'formatted_amount' => $formatted_amount]);
        return $pdf->stream('tax_payment' . $taxPayment->id . '.pdf');
    }
}
