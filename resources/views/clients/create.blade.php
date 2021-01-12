@extends('layouts.main')
@php
    $menu = false ;
@endphp

@section('content')


     <main class="main-content col-xs-12">
            <div class="add-req-wrap col-xs-12">
                <div class="container">
                    <form action="{{route('ClientSave')}}" method="POST"  enctype="multipart/form-data">
                        @csrf
                        <div class="form-group col-md-12 col-xs-12">
                            <h4>name</h4>
                            <input name="name" type="text" class="form-control">
                        </div>
                      
                      
                        <div class="form-group col-md-12 col-xs-12">
                  <div class="file-upload-wrapper">
                     <input type="file" name="image" id="input-file-max-fs" class="file-upload" data-max-file-size="5M" />
                  </div>
               </div>
               <div class="s-item col-md-4 col-sm-6 col-xs-12">
               </div>
            </div>

                      
                        <div class="form-group col-md-12 col-xs-12">
                            <button type="submit" class="btn">@lang('general.add_rquest')</button>
                        </div>
                    </form>
                </div>
            </div>
        </main>


@endsection

@push('scripts')
    <script src="{{ asset('/web/js/amir-upload-files.js')}}"></script>


@endpush


