<meta charset="utf-8" />
<title>BusinessDotKom | Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
<meta content="Themesdesign" name="author" />
<!-- App favicon -->
<link  rel="shortcut icon" href="{{ asset('/web/images/faveicon.png')}}">

<!-- jquery.vectormap css -->
<link href="{{ asset('backend') }}/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

<!-- DataTables -->
<link href="{{ asset('backend') }}/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />

<!-- Responsive datatable examples -->
<link href="{{ asset('backend') }}/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

<!-- Bootstrap Css -->
<link href="{{ asset('backend') }}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<!-- Icons Css -->
<link href="{{ asset('backend') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
<!-- App Css-->
@if(\App::getLocale() == 'en')
    <link href="{{ asset('backend') }}/assets/css/app.min.css" rel="stylesheet" type="text/css" />
@else
    <link href="{{ asset('backend') }}/assets/css/app-rtl.min.css" rel="stylesheet" type="text/css" />
@endif
<link href="{{ asset('backend') }}/mine.css" rel="stylesheet" type="text/css" />
@section('backend-head')
@show

