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
                    <h4 class="card-title">@lang('dashboard.attr_val')</h4>
                    <div style="display: flex;justify-content: space-between;">
                        <a href="{{ route('attr_values.create') }}" class="btn btn-success mb-2">
                            <i class="mdi mdi-plus mr-2"></i>
                            @lang('dashboard.add_new')
                        </a>
                        <button style="margin-bottom: 10px" class="btn btn-danger delete_all" data-url="{{ url('admin/delete_attr_values') }}">{{ __('dashboard.delete_all') }}</button>

                    </div>
                    <hr>
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                           style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th style="width: 28px;" ><input type="checkbox" id="master"></th>
                            <th>@lang('dashboard.value')</th>
                            <th>@lang('dashboard.att')</th>
                            <th>@lang('dashboard.options')</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($values as $value)
                            <tr id="tr_{{$value->id}}">
                                <td><input type="checkbox" class="sub_chk" data-id="{{$value->id}}"></td>
                                <td>{{$value->getTranslatedAttribute('value','ar')}} / {{ $value->value }}</td>
                                <td>{{$value->attribute->getTranslatedAttribute('name','ar')}} / {{ $value->attribute->name }}</td>
                                <td>
                                    <a href="{{ route('attr_values.edit' , $value->id) }}"
                                       class="mr-3 text-primary"><i class="mdi mdi-pencil font-size-18"></i></a>
                                    <a title="" onclick="return false;" object_id="{{ $value->id }}"
                                       delete_url="/attr_values/" class="text-danger remove-alert" href="#"><i
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
    @if(app()->getLocale() == 'en')
        <script src="{{ asset('backend') }}/endelete_all.js"></script>
    @else
        <script src="{{ asset('backend') }}/ardelete_all.js"></script>
    @endif
@endsection