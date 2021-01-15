@extends('backend.layout.master')
@section('backend-head')
    <link href="{{ asset('backend') }}/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css"
          rel="stylesheet" type="text/css"/>
    <link href="{{ asset('backend') }}/assets/libs/datatables.net-select-bs4/css/select.bootstrap4.min.css"
          rel="stylesheet" type="text/css"/>
    <link href="{{ asset('backend') }}/assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('backend') }}/assets/libs/admin-resources/rwd-table/rwd-table.min.css" rel="stylesheet" type="text/css" />
@endsection
@section('backend-main')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ __('dashboard.n_users') }}</h4>
                    <div style="display: flex;justify-content: space-between;">
                        <a href="{{ route('users.create') }}" class="btn btn-success mb-2">
                            <i class="mdi mdi-plus mr-2"></i>
                            {{ __('dashboard.add_new') }}</a>
                        </a>
                        <button style="margin-bottom: 10px" class="btn btn-danger delete_all" data-url="{{ url('admin/delete_users') }}">{{ __('dashboard.delete_all') }}</button>
                    </div>
                    <hr>
                    <div class="table-responsive">
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                               style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th style="width: 28px;" ><input type="checkbox" id="master"></th>
                                <th data-priority="1">{{ __('dashboard.image') }}</th>
                                <th data-priority="1">{{ __('dashboard.name') }}</th>
                                <th data-priority="1">{{ __('dashboard.email') }}</th>

                                <th data-priority="0">{{ __('dashboard.phone') }}</th>
                                <th data-priority="0">{{ __('dashboard.country') }}</th>
                                <th data-priority="0">{{ __('dashboard.requests') }}</th>
                                <th data-priority="0">{{ __('dashboard.reviews') }}</th>

                                <th data-priority="1">{{ __('dashboard.options') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr id="tr_{{$user->id}}">
                                    <td><input type="checkbox" class="sub_chk" data-id="{{$user->id}}"></td>
                                    <td width="50" height="50" data-priority="1">
                                        @if(isset($category->image))
                                            <img style="width: 100%;border-radius: 10px" src="{{ asset('storage/' . $user->image) }}"/>
                                        @else
                                            <img style="width: 100%;border-radius: 10px" src="{{ asset('backend/assets/images/empty.jpg') }}"/>
                                        @endif
                                    </td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>

                                    <td>{{ $user->mobile }}</td>
                                    <td>{{ $user->country->name ?? '' }}</td>
                                    <td>{{ $user->requests->count() }}</td>
                                    <?php
                                        $reviws = \App\Models\Review::where('user_id' , $user->id)->get();
                                    ?>
                                    <td>{{ $reviws->count() }}</td>

                                    <td>
                                        <a href="{{ route('users.edit' , $user->id) }}"
                                           class="mr-3 text-primary"><i class="mdi mdi-pencil font-size-18"></i></a>
                                        <a href="{{ route('users.show' , $user->id) }}"
                                           class="mr-3 text-success"><i class="mdi mdi-eye font-size-18"></i></a>
                                        <a title="" onclick="return false;" object_id="{{ $user->id }}"
                                           delete_url="/users/" class="text-danger remove-alert" href="#"><i
                                                    class="mdi mdi-trash-can font-size-18"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
@section('backend-footer')
    <script src="{{ asset('backend') }}/assets/libs/admin-resources/rwd-table/rwd-table.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/pages/table-responsive.init.js"></script>
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