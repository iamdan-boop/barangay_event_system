<?php

namespace App\Http\Controllers;

use App\Models\CessationBusiness;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class CessationBusinessController extends Controller
{

    public function index()
    {
        $cessations = CessationBusiness::all();
        return view('captain.cessation_business', compact('cessations'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'citizen_id' => 'required',
            'business_name' => 'required',
            'address' => 'required',
            'business_owner' => 'required',
            'owner_address' => 'required',
            'cessation_date' => 'required',
            'purpose' => 'required',
        ]);


        CessationBusiness::create($request->all());
        return back()->with(['success' => 'Business Cessation Submitted Successfully']);
    }


    public function viewCessationPDF(CessationBusiness $cessation)
    {
        $captain = User::role('captain')->first();

        $pdf = Pdf::loadView('certificate.cessation_business', [
            'business_name' => $cessation->business_name,
            'address' => $cessation->address,
            'business_owner' => $cessation->business_owner,
            'owner_address' => $cessation->owner_address,
            'purpose' => $cessation->purpose,
            'created_at' => $cessation->created_at,
            'captain' => $captain->first_name. ' '. $captain->last_name,
        ]);
        return $pdf->stream('document.pdf');
    }
}
