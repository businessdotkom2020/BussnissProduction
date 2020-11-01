@extends('layouts.main')
@php
    $menu = false ;
@endphp

@section('content')


     <main class="main-content col-xs-12">
            <div class="add-req-wrap col-xs-12">
                <div class="container">
                    <form action="{{route('JobSave')}}" method="POST" >
                        @csrf
                        <div class="form-group col-md-6 col-xs-12">
                            <h4>Title</h4>
                            <input name="title" type="text" class="form-control">
                        </div>
                      
                      
                        <div class="form-group col-md-6 col-xs-12">
                            <h4>Description</h4>
                            <input name="description" type="text" class="form-control">
                        </div>
                      
                      
                        <div class="form-group col-md-6 col-xs-12">
                            <h4>year Experience</h4>
                            <input name="year_experience" type="text" class="form-control">
                        </div>
                      
                      
                        <div class="form-group col-md-6 col-xs-12">
                            <h4>Career Level</h4>
                            <input name="career_level" type="text" class="form-control">
                        </div>
                      
                      
                        <div class="form-group col-md-6 col-xs-12">
                            <h4>Job Address</h4>
                            <input name="job_address" type="text" class="form-control">
                        </div>
                      
                      
                      
                        <div class="form-group col-md-6 col-xs-12">
                            <h4>Date Announced</h4>
                            <input name="date_announced" type="text" class="form-control">
                        </div>
                      
                      
                      
                        <div class="form-group col-md-6 col-xs-12">
                            <h4>Salary</h4>
                            <input name="salary" type="text" class="form-control">
                        </div>
                      
                      
                        <div class="form-group col-md-6 col-xs-12">
                            <h4>Open Positions</h4>
                            <input name="open_positions" type="text" class="form-control">
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


