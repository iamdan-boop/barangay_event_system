<?php

namespace App\Http\Controllers;

use App\Models\TaxPayment;
use Illuminate\Http\Request;

class TaxPaymentsController extends Controller
{
    public function index()
    {
        $tax_payments = TaxPayment::all();

        return view('captain.tax_payments', compact('tax_payments'));
    }
}
