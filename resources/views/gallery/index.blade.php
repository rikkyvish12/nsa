@extends('layouts.main')
@section('content')

<div class="card mb-3">
  <div class="card-body">
    <div class="row flex-between-center">
      <div class="col-md">
        <h5 class="mb-2 mb-md-0">Add Gallery</h5>
      </div>
      <div class="col-auto"><button class="btn btn-falcon-default btn-sm me-2" role="button">Save</button><button class="btn btn-falcon-primary btn-sm" role="button">Make your event live </button></div>
    </div>
  </div>
</div>
<div class="row g-0">
  <div class="col-lg-12 pe-lg-2">
    <div class="card mb-3">
      <div class="card-header">
        <h5 class="mb-0">Gallery Details</h5>
      </div>
      <div class="card-body bg-light">
        <form>
          <div class="row gx-2">
            <div class="col-12 mb-3"><label class="form-label" for="event-name">Gallery Title</label><input class="form-control" id="event-name" type="text" placeholder="Event Title" name="name"></div>
           
           </div>
        </form>
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
  </div>
  
</div>
<div class="card mb-3 mb-lg-0">
    <div class="card-header bg-light d-flex justify-content-between">
      <h5 class="mb-0">Gallery</h5>
    </div>
    <div class="card-body fs--1">
      <div class="row">
        <div class="col-md-12 h-100">
          <table class="table table-striped overflow-hidden">
            <thead>
              <tr class="btn-reveal-trigger">
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th class="text-end" scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr class="btn-reveal-trigger">
                <td>Ricky Antony</td>
                <td>ricky@example.com</td>
                <td class="text-end">
                  <div class="dropdown font-sans-serif position-static"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"><svg class="svg-inline--fa fa-ellipsis-h fa-w-16 fs--1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis-h" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z"></path></svg><!-- <span class="fas fa-ellipsis-h fs--1"></span> Font Awesome fontawesome.com --></button>
                    <div class="dropdown-menu dropdown-menu-end border py-0">
                      <div class="py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a></div>
                    </div>
                  </div>
                </td>
              </tr>
              <tr class="btn-reveal-trigger">
                <td>Emma Watson</td>
                <td>emma@example.com</td>
                <td class="text-end">
                  <div class="dropdown font-sans-serif position-static"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"><svg class="svg-inline--fa fa-ellipsis-h fa-w-16 fs--1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis-h" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z"></path></svg><!-- <span class="fas fa-ellipsis-h fs--1"></span> Font Awesome fontawesome.com --></button>
                    <div class="dropdown-menu dropdown-menu-end border py-0">
                      <div class="py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a></div>
                    </div>
                  </div>
                </td>
              </tr>
              <tr class="btn-reveal-trigger">
                <td>Rowen Atkinson</td>
                <td>rown@example.com</td>
                <td class="text-end">
                  <div class="dropdown font-sans-serif position-static"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"><svg class="svg-inline--fa fa-ellipsis-h fa-w-16 fs--1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis-h" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z"></path></svg><!-- <span class="fas fa-ellipsis-h fs--1"></span> Font Awesome fontawesome.com --></button>
                    <div class="dropdown-menu dropdown-menu-end border py-0">
                      <div class="py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a></div>
                    </div>
                  </div>
                </td>
              </tr>
              <tr class="btn-reveal-trigger">
                <td>Antony Hopkins</td>
                <td>antony@example.com</td>
                <td class="text-end">
                  <div class="dropdown font-sans-serif position-static"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"><svg class="svg-inline--fa fa-ellipsis-h fa-w-16 fs--1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis-h" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z"></path></svg><!-- <span class="fas fa-ellipsis-h fs--1"></span> Font Awesome fontawesome.com --></button>
                    <div class="dropdown-menu dropdown-menu-end border py-0">
                      <div class="py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a></div>
                    </div>
                  </div>
                </td>
              </tr>
              <tr class="btn-reveal-trigger">
                <td>Jennifer Schramm</td>
                <td>jennifer@example.com</td>
                <td class="text-end">
                  <div class="dropdown font-sans-serif position-static"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"><svg class="svg-inline--fa fa-ellipsis-h fa-w-16 fs--1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis-h" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z"></path></svg><!-- <span class="fas fa-ellipsis-h fs--1"></span> Font Awesome fontawesome.com --></button>
                    <div class="dropdown-menu dropdown-menu-end border py-0">
                      <div class="py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a></div>
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
       
      </div>
    </div>
  </div>
@endsection
