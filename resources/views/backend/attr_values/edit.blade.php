@extends('backend.layout.master')
@section('backend-head')
    <link href="{{ asset('backend') }}/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css"/>
@endsection
@section('backend-main')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Attribute Value " {{ $value->value }} "</h4>
                    <p class="card-title-desc"></p>
                    <form method="post" action="{{ route('attr_values.update' , $value->id) }}" class="needs-validation"
                          novalidate>
                        @csrf
                        {{ method_field('PATCH') }}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="value_ar">Value in Arabic</label>
                                    <input type="text" name="value_ar" class="form-control" id="value_ar"
                                           placeholder="Name in Arabic" value="{{$value->getTranslatedAttribute('value','ar')}}" required>
                                    @error('value_ar')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="value_en">Value in English</label>
                                    <input type="text" name="value_en" class="form-control" id="value_en"
                                           placeholder="Name in English" value="{{ $value->value }}" required>
                                    @error('value_en')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="attribute_id">Attribute</label>
                                    <select name="attribute_id" class="form-control select2" id="attribute_id" required>
                                        @foreach($attrs as $attr)
                                            <option
                                                    @if($attr->id == $value->attribute_id) selected @endif
                                            value="{{ $attr->id }}">{{ $attr->name }} / {{$attr->getTranslatedAttribute('name','ar')}}</option>
                                        @endforeach
                                    </select>
                                    @error('attribute_id')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <hr>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
                </div>
            </div>
            <!-- end card -->
        </div> <!-- end col -->
    </div>
    <!-- end row -->
@endsection
@section('backend-footer')
    <script src="{{ asset('backend') }}/assets/libs/parsleyjs/parsley.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/pages/form-validation.init.js"></script>
    <script src="{{ asset('backend') }}/mine.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/select2/js/select2.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/pages/form-advanced.init.js"></script>
@endsection
