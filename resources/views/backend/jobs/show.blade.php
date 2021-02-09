@extends('backend.layout.master')
@section('backend-head')
@endsection
@section('backend-main')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ implode(' ', array_slice(explode(' ', $job->title), 0, 5)) }}</h4>
                    <hr>
                    <table class="table table-striped table-bordered dt-responsive nowrap">
                        <tr>
                            <th>{{ __('dashboard.name') }}</th>
                            <td>{{ implode(' ', array_slice(explode(' ', $job->title), 0, 5)) }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('dashboard.supplier') }}</th>
                            <td>
                                <a target="_blank" href="{{ route('sellerss.show' , $job->user->id ) }}">
                                    {{ $job->user->name ?? '' }}
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th>{{ __('dashboard.desc') }}</th>
                            <td>{{ $job->description }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('dashboard.experience') }}</th>
                            <td>{{ $job->year_experience }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('dashboard.career_level') }}</th>
                            <td>{{ $job->career_level }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('dashboard.open_positions') }}</th>
                            <td>{{ $job->open_positions }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('dashboard.job_address') }}</th>
                            <td>{{ $job->job_address }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('dashboard.date_announced') }}</th>
                            <td>{{ $job->date_announced }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('dashboard.salary') }}</th>
                            <td>{{ $job->salary }}</td>
                        </tr>
                    </table>
                    <br>
                    <a href="{{ route('jobss.index') }}" style="width: 100%" class="btn btn-success">{{ __('dashboard.back') }}</a>
                    <a href="{{ route('jobss.edit' , $job->id) }}" style="width: 100%;margin-top: 20px" class="btn btn-primary"><i class="mdi mdi-pencil font-size-18"></i></a>
                    <a href="{{ route('delete_job' , $job->id) }}" style="width: 100%;margin-top: 20px" class="btn btn-danger"><i class="mdi mdi-trash-can font-size-18"></i></a>
                </div>
            </div>

        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
@section('backend-footer')
@endsection