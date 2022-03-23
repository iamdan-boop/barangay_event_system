<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class CaptainController extends Controller
{
    public function index()
    {
        $events = Event::all(['title', 'start', 'id']);
        return view('captain.home', compact('events'));
    }


    public function addEvent(Request $request)
    {
        \Gate::allowIf($request->user()->hasRole(['captain']));

            Event::create([
            'title' => $request->event_title,
            'start' => $request->start,
            'end' => now(),
        ]);

        return back();
    }


    public function editEvent(Request $request)
    {
        \Gate::allowIf($request->user()->hasRole(['captain']));

        Event::find($request->event_id)->update(['title' => $request->title]);
        return back();
    }
}
