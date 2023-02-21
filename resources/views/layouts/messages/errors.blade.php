<!-- Error Messages -->
@foreach ($errors->all() as $error)
    <div class="alert alert-danger alert-dismissible fade show text-white" role="alert">
        <span class="alert-icon"><i class="fa fa-exclamation-triangle"></i></span>
        <span class="alert-text">{{ $error }}</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endforeach