@if (count($errors)>0)
    <div class="alert alert-danger text-center">
        <i class="far fa-times-circle fa-3x mt-3"></i>
    @foreach ($errors->all() as $error)
            <p class="text-danger mt-3">{{ $error }}</p>
    @endforeach
    </div>
@endif