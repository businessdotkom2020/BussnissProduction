@if (count($errors)>0)
    @foreach ($errors->all() as $error)
        <p class="alert alert-danger al">{{ $error }}</p>
    @endforeach
@endif