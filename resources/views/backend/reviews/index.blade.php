@extends('backend.layout.master')
@section('backend-head')
    <link href="{{ asset('backend') }}/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css"
          rel="stylesheet" type="text/css"/>
    <link href="{{ asset('backend') }}/assets/libs/datatables.net-select-bs4/css/select.bootstrap4.min.css"
          rel="stylesheet" type="text/css"/>
    <link href="{{ asset('backend') }}/assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css"/>
@endsection
@section('backend-main')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">@lang('dashboard.reviews')</h4>
                    <div style="display: flex;justify-content: space-between;">
                        <a href="{{ route('brands.create') }}" class="btn btn-success mb-2"><i class="mdi mdi-plus mr-2"></i> @lang('dashboard.add_new')</a>
                    </div>
                    <hr>
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                           style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>@lang('dashboard.com_owner')</th>
                            <th>@lang('dashboard.com_of')</th>
                            <th>@lang('dashboard.com_on')</th>
                            <th>@lang('dashboard.add_date')</th>
                            <th>@lang('dashboard.options')</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($reviews as $review)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $review->owner->name }}</td>
                                <td>
                                    @if($review->reviewed_type == 'App\Models\User')
                                        {{ implode(' ', array_slice(explode(' ', $review->reviewed->name), 0, 5)) }}
                                    @elseif($review->reviewed_type == 'App\Models\Product')
                                        {{ implode(' ', array_slice(explode(' ', $review->reviewed->getTranslatedAttribute('name',\App::getLocale())), 0, 5)) }}
                                    @elseif($review->reviewed_type == 'App\Models\Request')
                                        {{ implode(' ', array_slice(explode(' ', $review->reviewed->name), 0, 5)) }}
                                    @elseif($review->reviewed_type == 'App\Models\Service')
                                        {{ implode(' ', array_slice(explode(' ', $review->reviewed->name), 0, 5)) }}
                                    @endif
                                </td>
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
                                <td>
                                    @if(!empty($review->created_at))
                                        {{ Carbon\Carbon::parse($review->created_at)->format('Y-m-d')}}
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('reviews.show' , $review->id) }}"
                                       class="mr-3 text-success"><i class="mdi mdi-eye font-size-18"></i></a>
                                    <a title="" onclick="return false;" object_id="{{ $review->id }}"
                                       delete_url="/reviews/" class="text-danger remove-alert" href="#"><i
                                                class="mdi mdi-trash-can font-size-18"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
@section('backend-footer')
    <script src="{{ asset('backend') }}/assets/libs/sweetalert2/sweetalert2.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/pages/sweet-alerts.init.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/jszip/jszip.min.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/pdfmake/build/pdfmake.min.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/pdfmake/build/vfs_fonts.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/datatables.net-select/js/dataTables.select.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/pages/datatables.init.js"></script>
    <script src="{{ asset('backend') }}/custom-sweetalert.js"></script>
    <script src="{{ asset('backend') }}/mine.js"></script>
@endsection