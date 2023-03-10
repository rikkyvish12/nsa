@extends('layouts.main')
@section('content')

    <div class="card mb-3">
        <div class="card-body">
            <div class="row flex-between-center">
                <div class="col-md">
                    <h5 class="mb-2 mb-md-0">Create About</h5>
                </div>
                <div class="col-auto"><button class="btn btn-falcon-default btn-sm me-2" role="button">Save</button><button
                        class="btn btn-falcon-primary btn-sm" role="button">Make your event live </button></div>
            </div>
        </div>
    </div>
    <div class="row g-0">
        <div class="col-lg-12 pe-lg-2">
            @php $route = ($event_update) ? 'about/'.$event_update->id : 'about' @endphp
            @php $method = ($event_update) ? 'PUT' : 'POST' @endphp
            <form action="{{ url($route) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method($method)
                <div class="card mb-3">
                    <div class="card-header">
                        <h5 class="mb-0">About Details</h5>
                    </div>
                    <div class="card-body bg-light">

                        <div class="row gx-2">
                            <div class="col-12"><label class="form-label" for="event-description">Description</label>
                                <textarea class="form-control" id="event-description" rows="6" name="description">{{ ($event_update) ? $event_update->description : '' }}</textarea>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header">
                        <h5 class="mb-0">Upload Photos</h5>
                    </div>
                    <div class="card-body bg-light">
                        <input type="file" name="image" class="form-control" />
                    </div>
                </div>
                <div class="card mb-3">

                    <div class="card-body bg-light">
                        <input type="submit" class="btn btn-success" name="submit"
                            value="{{ $event_update ? 'Update' : 'Submit' }}" />
                    </div>
                </div>
            </form>
        </div>

    </div>
    <div class="card mb-3 mb-lg-0">
        <div class="card-header bg-light d-flex justify-content-between">
            <h5 class="mb-0">About</h5>
        </div>
        <div class="card-body fs--1">
            <div class="row">
                <div class="col-md-12 h-100">
                    <table class="table table-striped overflow-hidden">
                        <thead>
                            <tr class="btn-reveal-trigger">
                                <th scope="col">Details</th>
                                <th scope="col">Image</th>
                                <th class="text-end" scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($events) > 0)
                                @foreach ($events as $item)
                                    <tr class="btn-reveal-trigger">
                                        <td>{{ $item->description }}</td>
                                        <td><img src="{{ asset('assets/about/' . $item->image) }}" alt=""
                                                height="50px" width="140px"> </td>
                                        <td class="text-end">
                                            <div class="dropdown font-sans-serif position-static"><button
                                                    class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal"
                                                    type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"><svg
                                                        class="svg-inline--fa fa-ellipsis-h fa-w-16 fs--1"
                                                        aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="ellipsis-h" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                        data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z">
                                                        </path>
                                                    </svg>
                                                    <!-- <span class="fas fa-ellipsis-h fs--1"></span> Font Awesome fontawesome.com --></button>
                                                <div class="dropdown-menu dropdown-menu-end border py-0">
                                                    <div class="py-2">
                                                        <a class="dropdown-item btn btn-warning btn-sm"
                                                            href="{{ url('about/' . $item->id) }}">Edit</a>
                                                       
                                                            <form class="dropdown-item text-danger" action="{{ url('about/' . $item->id) }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger btn-sm"
                                                                    type="submit">Delete</button>
                                                            </form>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
