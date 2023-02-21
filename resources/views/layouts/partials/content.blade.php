{{-- <div class="container-fluid py-4">
    @include('layouts.messages.all')
    @yield('content')
</div> --}}
<div class="content">
    @include('layouts.partials.sidebar')
    @include('layouts.messages.all')
    @yield('content')
    <footer class="footer">
        <div class="row g-0 justify-content-between fs--1 mt-4 mb-3">
            <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">Developed By Ramakant Vishwakarma <span
                        class="d-none d-sm-inline-block">| </span><br class="d-sm-none" /> 2023 &copy;
                    <a href="#">NSA</a></p>
            </div>
            <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">v3.14.0</p>
            </div>
        </div>
    </footer>
</div>