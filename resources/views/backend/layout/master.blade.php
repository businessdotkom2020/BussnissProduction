<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('backend.layout.head')
</head>

<body data-sidebar="dark">

<input type="hidden" value="{{URL::to('/')}}" id="base_url">
<div id="layout-wrapper">
@include('backend.layout.header')

<!-- Left Sidebar Menu -->
@include('backend.layout.navbar')
<!-- /Left Sidebar Menu -->
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                @include('common.done')
                @section('backend-main')
                @show
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
        <!-- /Main Content -->
        <div class="sidenav-overlay"></div>
        <div class="drag-target"></div>
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-right d-none d-sm-block">
                            Crafted with <i class="mdi mdi-heart text-danger"></i>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- END layout-wrapper -->
</div>
@include('backend.layout.footer')
</body>
</html>