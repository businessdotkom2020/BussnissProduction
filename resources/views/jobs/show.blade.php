@extends('layouts.main')
@php
    $menu = false ;
@endphp

@section('content')


    <main class="main-content col-xs-12">
            <div class="reqs-wrap reqs-single col-xs-12">
                <div class="container">
            
            
                    <div class="g-body col-xs-12">
                        
                        <div class="block col-xs-12">
                            <div class="inner col-xs-12">
                             
                             
                                <div class="i-middle col-xs-12" style="display: grid;">
                                    <div class="author">

                                        <a href="#">{{$job->title}}</a>
                                    </div>
                            
                                    <div class="author">

                                        <a href="#">{{$job->description}}</a>
                                    </div>
                            
                                    <div class="author">

                                        <a href="#">{{$job->year_experience}}</a>
                                    </div>
                            
                                    <div class="author">

                                        <a href="#">{{$job->career_level}}</a>
                                    </div>
                            
                            
                                    <div class="author">

                                        <a href="#">{{$job->open_positions}}</a>
                                    </div>
                            
                            
                                    <div class="author">

                                        <a href="#">{{$job->job_address}}</a>
                                    </div>
                            
                            
                                    <div class="author">

                                        <a href="#">{{$job->date_announced}}</a>
                                    </div>
                            
                                    <div class="author">

                                        <a href="#">{{$job->salary}}</a>
                                    </div>
                            
                            
                                </div>
                               
                               
                            </div>
                        </div>


                     
                    </div>
                </div>
            </div>
        </main>



@endsection



