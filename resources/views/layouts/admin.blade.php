<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mother's Pride | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('assets/adminpanel/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('assets/adminpanel/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('assets/adminpanel/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('assets/adminpanel/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/adminpanel/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('assets/adminpanel/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('assets/adminpanel/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('assets/adminpanel/plugins/summernote/summernote-bs4.min.css') }}">

  {{-- toastr --}}
  <link rel="stylesheet" href="{{asset('assets/adminpanel/plugins/toastr/toastr.min.css')}}">
  {{-- amsify tag system --}}
  <link rel="stylesheet" href="{{asset('assets/adminpanel/amsify/amsify.suggestags.css')}}">

  <link rel="stylesheet" href="{{asset('assets/adminpanel/dist/css/custom.css')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    @include('layouts.inc.admin.navbar')
    @include('layouts.inc.admin.sidebar')


    @yield('content')



</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('assets/adminpanel/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('assets/adminpanel/plugins/jquery-ui/jquery-ui.min.js')}}"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- Toastr -->
<script src="{{asset('assets/adminpanel/plugins/toastr/toastr.min.js')}}"></script>

<!-- Bootstrap 4 -->
<script src="{{ asset('assets/adminpanel/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('assets/adminpanel/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('assets/adminpanel/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('assets/adminpanel/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('assets/adminpanel/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('assets/adminpanel/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('assets/adminpanel/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('assets/adminpanel/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('assets/adminpanel/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('assets/adminpanel/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('assets/adminpanel/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/adminpanel/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
{{-- <script src="{{asset('assets/admin/dist/js/demo.js')}}"></script> --}}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('assets/adminpanel/dist/js/pages/dashboard.js')}}"></script>
<script src="{{asset('assets/adminpanel/amsify/jquery.amsify.suggestags.js')}}"></script>

<script>
  $.widget.bridge('uibutton', $.ui.button)

@if(Session::has('message'))
toastr.success("{{ session('message')}}")
@endif

@if(Session::has('warning'))
toastr.warning("{{ session('warning')}}")
@endif

@if(Session::has('info'))
toastr.info("{{ session('info')}}")
@endif

@if(Session::has('danger'))
toastr.danger("{{ session('danger')}}")
@endif

$('#summernote').summernote({
    height: 150,
});

function getImage(event){
  var image = URL.createObjectURL(event.target.files[0]);
  var preview = document.getElementById('preview-image');

  preview.src = image;
}

$('#post-tags').amsifySuggestags({
  type :'bootstrap'
});


</script>
</body>
</html>