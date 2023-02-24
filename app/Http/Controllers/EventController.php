<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Repositories\EventRepository;
use Storage, Str;
class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $repository;

    public function __construct(EventRepository $repository)
    {
         $this->repository = $repository;
    }

    public function index()
    {
        $events = $this->repository->getAllEvent();
        $event_update = false;
        return view('event/index', compact(['events', 'event_update']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);
        
        $event = new Event();
        $event->name = $request->name;
        $event->description = $request->name;
        
        $fileName = 'event-'. Str::random(8)
        . '-' . date('Ymd')
        . '.' . request()->image->getClientOriginalExtension();
        
        Storage::disk('public')->put(
            'assets/events/' . $fileName,
            file_get_contents(request()->image)
        );
        $event->image = $fileName;
        $event->save();

        return back()->with('success', 'Event created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event_update = Event::find($id);
        $events = $this->repository->getAllEvent();
        return view('event/index', compact(['events', 'event_update']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);
        
        $event = Event::find($id);
        $event->name = $request->name;
        $event->description = $request->name;

        if (request()->image) {
            $fileName = 'event-'. Str::random(8)
            . '-' . date('Ymd')
            . '.' . request()->image->getClientOriginalExtension();

            Storage::disk('public')->put(
                UPLOADS_EVENT_PATH . $fileName,
                file_get_contents(request()->image)
            );
            $event->image = $fileName;
        }
        
        $event->update();

        return back()->with('success', 'Event Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();

        return redirect()->back()->with('success', 'Event deleted Successfully');
    }
}
