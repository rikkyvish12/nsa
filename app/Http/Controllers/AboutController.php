<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Storage, Str;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = About::all();
        $event_update = false;
        return view('about.index', compact(['events', 'event_update']));
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
            'description' => 'required',
            'image' => 'required'
        ]);
        
        $event = new About();
        $event->description = $request->description;

        $image = rand(5000, 10000).".".time().'.'.$request->image->extension();
        $request->image->move(public_path('assets/about'), $image);

        $event->image = $image;
        $event->save();

        return back()->with('success', 'Created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event_update = About::find($id);
        $events = About::all();
        return view('about.index', compact(['events', 'event_update']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(About $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'description' => 'required',
            'image' => 'required'
        ]);
        
        $event = About::find($id);
        $event->description = $request->description;

        if (request()->image) {
            
            $image = rand(5000, 10000).".".time().'.'.$request->image->extension();
            $request->image->move(public_path('assets/about'), $image);

            $event->image = $image;
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
        $event = About::find($id);
        $event->delete();

        return redirect()->back()->with('success', 'Deleted Successfully');
    }
}
