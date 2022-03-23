<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\Citizen;
use App\Models\CitizenCertificate;
use Illuminate\Http\Request;

class ReportsIndividualController extends Controller
{

    public function index()
    {
        $citizen_certificates = CitizenCertificate::query()
            ->withCount('citizen')
            ->with(['citizen', 'certificates'])->get();
        $certificates = Certificate::all();

        $citizen_count = Citizen::count();

        return view('captain.reports_individual', compact('certificates', 'citizen_certificates', 'citizen_count'));
    }
}
