@extends('layouts.main')
@section('content')

<div class="card mb-3">
  <div class="card-body">
    <div class="row flex-between-center">
      <div class="col-md">
        <h5 class="mb-2 mb-md-0">Create Event</h5>
      </div>
      <div class="col-auto"><button class="btn btn-falcon-default btn-sm me-2" role="button">Save</button><button class="btn btn-falcon-primary btn-sm" role="button">Make your event live </button></div>
    </div>
  </div>
</div>
<div class="row g-0">
  <div class="col-lg-12 pe-lg-2">
    <div class="card mb-3">
      <div class="card-header">
        <h5 class="mb-0">Event Details</h5>
      </div>
      <div class="card-body bg-light">
        <form>
          <div class="row gx-2">
            <div class="col-12 mb-3"><label class="form-label" for="event-name">Event Title</label><input class="form-control" id="event-name" type="text" placeholder="Event Title" name="name"></div>
           <div class="col-12">
              <div class="border-bottom border-dashed my-3"></div>
            </div>
           <div class="col-12"><label class="form-label" for="event-description">Description</label><textarea class="form-control" id="event-description" rows="6" name="description"></textarea></div>
          </div>
        </form>
      </div>
    </div>
    <div class="card mb-3">
      <div class="card-header">
        <h5 class="mb-0">Upload Photos</h5>
      </div>
      <div class="card-body bg-light">
        <input type="file" name="image" class="form-control"
      </div>
    </div>
  </div>
  
</div>
<div class="card mb-3 mb-lg-0">
    <div class="card-header bg-light d-flex justify-content-between">
      <h5 class="mb-0">Events</h5>
    </div>
    <div class="card-body fs--1">
      <div class="row">
        <div class="col-md-6 h-100">
          <div class="d-flex btn-reveal-trigger">
            <div class="calendar"><span class="calendar-month">Mar</span><span class="calendar-day">26</span></div>
            <div class="flex-1 position-relative ps-3">
              <h6 class="fs-0 mb-0"><a href="app/events/event-detail.html">Crain's New York Business <span class="badge badge-soft-success rounded-pill">Free</span></a></h6>
              <p class="mb-1">Organized by <a href="#!" class="text-700">AID MIT</a></p>
              <p class="text-1000 mb-0">Time: 11:00AM</p>
              <p class="text-1000 mb-0">Duration: Feb 29 - Mar 2</p>The Liberty Warehouse, New Yourk<div class="border-bottom border-dashed my-3"></div>
            </div>
          </div>
        </div>
        <div class="col-md-6 h-100">
          <div class="d-flex btn-reveal-trigger">
            <div class="calendar"><span class="calendar-month">Feb</span><span class="calendar-day">29</span></div>
            <div class="flex-1 position-relative ps-3">
              <h6 class="fs-0 mb-0"><a href="../../app/events/event-detail.html">Film Festival</a></h6>
              <p class="mb-1">Organized by <a href="#!" class="text-700">American Nuclear Society</a></p>
              <p class="text-1000 mb-0">Time: 11:00AM</p>
              <p class="text-1000 mb-0">Duration: Feb 29 - Mar 2</p>Place: Workbar - Central Square, Cambridge<div class="border-bottom border-dashed my-3"></div>
            </div>
          </div>
        </div>
        <div class="col-md-6 h-100">
          <div class="d-flex btn-reveal-trigger">
            <div class="calendar"><span class="calendar-month">Feb</span><span class="calendar-day">21</span></div>
            <div class="flex-1 position-relative ps-3">
              <h6 class="fs-0 mb-0"><a href="../../app/events/event-detail.html">Newmarket Nights</a></h6>
              <p class="mb-1">Organized by <a href="#!" class="text-700">University of Oxford</a></p>
              <p class="text-1000 mb-0">Time: 6:00AM</p>
              <p class="text-1000 mb-0">Duration: 6:00AM - 5:00PM</p>Place: Cambridge Boat Club, Cambridge<div class="border-bottom border-dashed my-3"></div>
            </div>
          </div>
        </div>
        <div class="col-md-6 h-100">
          <div class="d-flex btn-reveal-trigger">
            <div class="calendar"><span class="calendar-month">Dec</span><span class="calendar-day">31</span></div>
            <div class="flex-1 position-relative ps-3">
              <h6 class="fs-0 mb-0"><a href="../../app/events/event-detail.html">31st Night Celebration</a></h6>
              <p class="mb-1">Organized by <a href="#!" class="text-700">Chamber Music Society</a></p>
              <p class="text-1000 mb-0">Time: 11:00PM</p>
              <p class="text-1000 mb-0">280 people interested</p>Place: Tavern on the Greend, New York<div class="border-bottom border-dashed my-3"></div>
            </div>
          </div>
        </div>
        <div class="col-md-6 h-100">
          <div class="d-flex btn-reveal-trigger">
            <div class="calendar"><span class="calendar-month">Dec</span><span class="calendar-day">16</span></div>
            <div class="flex-1 position-relative ps-3">
              <h6 class="fs-0 mb-0"><a href="../../app/events/event-detail.html">Folk Festival</a></h6>
              <p class="mb-1">Organized by <a href="#!" class="text-700">Harvard University</a></p>
              <p class="text-1000 mb-0">Time: 9:00AM</p>
              <p class="text-1000 mb-0">Location: Cambridge Masonic Hall Association</p>Place: Porter Square, North Cambridge
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
