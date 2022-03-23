<?php

namespace App\Http\Controllers;

use App\Models\Incident;
use App\Models\IncidentType;
use Illuminate\Http\Request;

class IncidentController extends Controller
{
    public function index()
    {
        $incidents = Incident::all();

        $incident_types = IncidentType::all();

        return view('captain.incidents', compact('incidents', 'incident_types'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'date_incident' => 'required',
            'time_incident' => 'required',
            'location' => 'required',
            'type_incident' => 'required',
            'people_involve' => 'required',
            'details_incident' => 'required',
        ]);

        Incident::create($request->all());

        return back()->with(['success' => 'Incident Created Successfully']);
    }


    public function update(Request $request)
    {
        $request->validate([
            'date_incident' => 'required',
            'time_incident' => 'required',
            'location' => 'required',
            'type_incident' => 'required',
            'people_involve' => 'required',
            'details_incident' => 'required',
        ]);

        Incident::find($request->incident_id)->update($request->all());

        return back()->with(['success' => 'Incident Updated Successfully']);
    }
}
