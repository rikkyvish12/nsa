@include('layouts.messages.success')
@include('layouts.messages.info')
@include('layouts.messages.errors')
@if (session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <span class="alert-icon"> <i class="fa fa-exclamation-triangle"></i></span>
        <span class="alert-text text-white">{{ session('error') }}</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif