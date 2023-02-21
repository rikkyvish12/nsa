<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Repositories\EventRepository;
use Storage, Str, Log;
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
        $allEvent = $this->repository->getAllEvent();
        return view(
            'event/index',
            compact('allEvent')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
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
            UPLOADS_EVENT_PATH . $fileName,
            file_get_contents(request()->image)
        );
        $event->image = $fileName;
        $event->save();

        return back()->with('success', 'Event created successfully');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
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
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }
}
