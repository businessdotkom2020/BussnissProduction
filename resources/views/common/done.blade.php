@if (session()->has('done'))
    <p class="alert alert-success al">{{ session()->get('done') }}</p>
@endif
@if (session()->has('error'))
    <p class="alert alert-danger al">{{ session()->get('error') }}</p>
@endif