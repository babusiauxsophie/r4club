<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function list()
    {
        $search = request('search');
        $date = request('date');
    
        $query = Event::query();
    
        if ($search) {
            $query->where('title', 'like', '%'.$search.'%');
        }
    
        if ($date) {
            $query->whereDate('date', $date);
        }
    
        $events = $query->simplePaginate(10);
    
        return view('events.list', [
            'events' => $events,
        ]);
    }

    public function detail($id)
    {
        $event = Event::find($id);

        return view('events.detail', [
            'event' => $event,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'streetname' => 'required|string|max:255',
            'streetnumber' => 'required|string|max:10',
            'city' => 'required|string|max:255',
            'zipcode' => 'required|string|max:10',
        ]);

        $event = new Event();
        $event->title = $request->input('title');
        $event->description = $request->input('description');
        $event->date = $request->input('date');
        $event->streetname = $request->input('streetname');
        $event->streetnumber = $request->input('streetnumber');
        $event->city = $request->input('city');
        $event->zipcode = $request->input('zipcode');
        $event->user_id = Auth::id();
        $event->save();

        return redirect()->route('events.list')
                        ->with('success', 'Event created successfully.');
    }
}
