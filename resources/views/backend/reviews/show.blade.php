@extends('backend.layout.master')
@section('backend-head')
@endsection
@section('backend-main')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">
                        {{ __('dashboard.commmm') }} (
                        @if($review->reviewed_type == 'App\Models\User')
                            {{ implode(' ', array_slice(explode(' ', $review->reviewed->name), 0, 5)) }} )
                        @elseif($review->reviewed_type == 'App\Models\Product')
                            {{ implode(' ', array_slice(explode(' ', $review->reviewed->getTranslatedAttribute('name',\App::getLocale())), 0, 5)) }} )
                        @elseif($review->reviewed_type == 'App\Models\Request')
                            {{ implode(' ', array_slice(explode(' ', $review->reviewed->name), 0, 5)) }} )
                        @elseif($review->reviewed_type == 'App\Models\Service')
                            {{ implode(' ', array_slice(explode(' ', $review->reviewed->name), 0, 5)) }} )
                        @endif

                    </h4>
                    <br>
                    <table class="table table-striped table-bordered dt-responsive nowrap">
                        @if($review->reviewed_type == 'App\Models\User')
                            <tr>
                                <th>{{ __('dashboard.name') }}</th>
                                <td>{{ implode(' ', array_slice(explode(' ', $review->reviewed->name), 0, 5)) }}</td>
                            </tr>
                        @elseif($review->reviewed_type == 'App\Models\Product')
                            <tr>
                                <th>{{ __('dashboard.name_english') }}</th>
                                <td>{{ implode(' ', array_slice(explode(' ', $review->reviewed->name), 0, 5)) }}</td>
                            </tr>
                            <tr>
                                <th>{{ __('dashboard.name_arabic') }}</th>
                                <td>{{ implode(' ', array_slice(explode(' ', $review->reviewed->getTranslatedAttribute('name','ar')), 0, 5)) }}</td>
                            </tr>
                        @elseif($review->reviewed_type == 'App\Models\Request')
                            <tr>
                                <th>{{ __('dashboard.name') }}</th>
                                <td>{{ implode(' ', array_slice(explode(' ', $review->reviewed->name), 0, 5)) }}</td>
                            </tr>
                        @elseif($review->reviewed_type == 'App\Models\Service')
                            <tr>
                                <th>{{ __('dashboard.name') }}</th>
                                <td>{{ implode(' ', array_slice(explode(' ', $review->reviewed->name), 0, 5)) }}</td>
                            </tr>
                        @endif
                        <tr>
                            <th>{{ __('dashboard.com_owner') }}</th>
                            <td>{{ $review->owner->name }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('dashboard.com_on') }}</th>
                            <td>
                                @if($review->reviewed_type == 'App\Models\User')
                                    {{ __('dashboard.user') }}
                                @elseif($review->reviewed_type == 'App\Models\Product')
                                    {{ __('dashboard.product') }}
                                @elseif($review->reviewed_type == 'App\Models\Request')
                                    {{ __('dashboard.request') }}
                                @elseif($review->reviewed_type == 'App\Models\Service')
                                    {{ __('dashboard.service') }}
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>{{ __('dashboard.com') }}</th>
                            <td>{{ $review->comment }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('dashboard.rate') }}</th>
                            <td>
                                @for ($i = 0; $i < $review->stars; $i++)
                                    <i class="fas fa-star text-warning"></i>
                                @endfor
                            </td>
                        </tr>
                    </table>
                    <br>
                    <a href="{{ route('reviews.index') }}" style="width: 100%"
                       class="btn btn-success">{{ __('dashboard.back') }}</a>
                    <a href="{{ route('delete_review' , $review->id) }}" style="width: 100%;margin-top: 20px" class="btn btn-danger"><i class="mdi mdi-trash-can font-size-18"></i></a>
                </div>
            </div>

        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
@section('backend-footer')
@endsection