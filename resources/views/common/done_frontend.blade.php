@if (session()->has('done'))
    <div class="alert alert-success text-center">
        <i class="far fa-check-circle fa-3x mt-3"></i>
        <p class="text-success mt-3">{{ session()->get('done') }}</p>
    </div>
@endif
@if (session()->has('error'))
    <div class="alert alert-danger text-center">
        <i class="far fa-times-circle fa-3x mt-3"></i>
        <p class="text-danger mt-3">{{ session()->get('error') }}</p>
    </div>
@endif

