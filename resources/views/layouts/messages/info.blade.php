<!-- Info Message -->
@if (session()->has('info'))
    <div class="alert alert-info"> <i class="fa fa-info-circle m-r-5"></i> {{ session('info') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
    </div>
@endif