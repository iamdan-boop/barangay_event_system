<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCitizenRequest;
use App\Models\BusinessClearance;
use App\Models\Certificate;
use App\Models\Citizen;
use App\Models\CitizenCertificate;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CitizenController extends Controller
{
    public function index()
    {
        $citizens = Citizen::orderBy('first_name')->get();
        $certificates = Certificate::all();
        return view('captain.citizens', compact('citizens', 'certificates'));
    }


    public function store(StoreCitizenRequest $request)
    {
        Citizen::create($request->validated() + ['status_id' => 1]);
        return back()->with(['success' => 'Citizen Created Successfully']);
    }


    public function update(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'middle_name' => 'required',
            'contact' => 'required',
            'gender' => 'required',
            'dob' => 'nullable|sometimes',
            'status' => 'required',
            'citizenship' => 'required',
            'occupation' => 'required',
            'zone' => 'required',
            'address' => 'required',
        ]);

        $citizen = Citizen::find($request->citizenship_id);


        $dob = $request->dob == null ? $citizen->dob : $request->dob;

        $request_new = array_merge($request->all(), ['dob' => $dob]);

        $citizen->update($request_new);

        return back()->with(['success' => 'Citizen Updated Successfully']);
    }


    public function archiveCitizen(Citizen $citizen)
    {
        $citizen->update(['status_id' => 0]);
        return back()->with(['success' => 'Citizen Archived Successfully']);
    }


    public function storeCitizenCertificate(Request $request)
    {
        $request->validate([
            'citizen_id' => 'required|exists:citizens,id',
            'certificate_id' => 'required|exists:certificates,id',
            'community_tax' => 'required',
            'amount_paid' => 'required',
            'purpose' => 'required'
        ]);


        $qr_value = 'qr_' . rand(10000000, 99999999);
        $control_number = rand(10000000, 99999999);
//
//        QrCode::size(500)
//            ->format('png')
//            ->generate($qr_value, public_path('qr_codes/' . $qr_value . '.png'));

        CitizenCertificate::create($request->all() + ['qr_codes' => $qr_value, 'control_number' => $control_number, 'status_id' => 1]);
        return back()->with(['success' => 'Citizen Applied Certificate Successfully']);
    }


    public function unarchivedCitizen(Citizen $citizen)
    {
        $citizen->update(['status_id' => 1]);
        return back()->with(['success' => 'Unarchived Citizen']);
    }


    public function storeCitizenCedula(Request $request)
    {
        $request->validate([
            'citizen_id' => 'required',
            'certificate_id' => 'required',
            'birthplace' => 'required',
            'tin_id_cedula' => 'nullable|sometimes',
            'icr' => 'nullable|sometimes',
            'cedula_height_1' => 'required',
            'cedula_height_2' => 'required',
            'weight_cedula' => 'required',
            'basictax' => 'required',
            'grossreceipt_taxable' => 'required',
            'salary_taxable' => 'required',
            'income_taxable' => 'required',
        ]);
    }

}
