<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>{{ config('app.name') }} {{ isset($title) ? '| '.$title : '' }}</title>

	<!-- Main Styles -->
	<link rel="stylesheet" href="{{ asset('template/styles/style.min.css') }}">
	<!-- mCustomScrollbar -->
	<link rel="stylesheet" href="{{ asset('template/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css') }}">
	<!-- Waves Effect -->
	<link rel="stylesheet" href="{{ asset('template/plugin/waves/waves.min.css') }}">
	<!-- Sweet Alert -->
	{{-- <link rel="stylesheet" href="{{ asset('template/plugin/sweet-alert/sweetalert.css') }}"> --}}
	<!-- Percent Circle -->
	<link rel="stylesheet" href="{{ asset('template/plugin/percircle/css/percircle.css') }}">
	<!-- Chartist Chart -->
	<link rel="stylesheet" href="{{ asset('template/plugin/chart/chartist/chartist.min.css') }}">
	<!-- FullCalendar -->
	<link rel="stylesheet" href="{{ asset('template/plugin/fullcalendar/fullcalendar.min.css') }}">
	<link rel="stylesheet" href="{{ asset('template/plugin/fullcalendar/fullcalendar.print.css') }}" media='print'>
	<!-- Color Picker -->
	<link rel="stylesheet" href="{{ asset('template/color-switcher/color-switcher.min.css') }}">
	<!-- Datatable -->
	{{-- <link rel="stylesheet" href="{{ asset('template/plugin/datatables/media/css/dataTables.bootstrap.min.css') }}"> --}}
	<link rel="stylesheet" href="{{asset('template/plugin/datatables/media/css/jquery.dataTables.min.css')}}">
	<link rel="stylesheet" href="{{ asset('template/plugin/datatables/extensions/Responsive/css/responsive.bootstrap.min.css') }}">
	<!-- Dropify -->
	<link rel="stylesheet" href="{{ asset('template/plugin/dropify/css/dropify.min.css') }}">

	<style>
		.btn-eliminate{
			background-color: Transparent;
			background-repeat:no-repeat;
			border: none;
			cursor:pointer;
			overflow: hidden;
			outline:none;
			
		}
		.hr{
			margin-bottom: 35px;
		}
	</style>
</head>

<body>

	<div class="main-menu">
		<!-- /.header -->
			@include('layouts.admin.inc.header')
		<!-- /.header -->

			<!-- /.side-bar -->
				@include('layouts.admin.inc.side-bar')
			<!-- /.header -->
	</div>

	@include('layouts.admin.inc.navbar')

	<!-- #color-switcher -->
		{{-- <div id="color-switcher">
			@include('layouts.admin.inc.color-switcher')
		</div> --}}
	<!-- #color-switcher -->

	<!--/#wrapper -->
		<div id="wrapper">
			<!-- /.main-content -->
				<div class="main-content">
					@yield('content')
{{--  --}}
					@include('layouts.admin.inc.footer')
				</div>
			<!-- /.main-content -->
		</div>
	<!--/#wrapper -->


	<!-- Placed at the end of the document so the pages load faster -->
	<script src="{{ asset('template/scripts/jquery.min.js') }}"></script>
	<script src="{{ asset('template/scripts/modernizr.min.js') }}"></script>
	<script src="{{ asset('template/plugin/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('template/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
	<script src="{{ asset('template/plugin/nprogress/nprogress.js') }}"></script>

	<!-- sweetalert -->
	<script src="{{ asset('vendor/sweetalert/sweetalert.all.js')  }}"></script>
	@include('sweetalert::alert')
	{{-- <script src="{{ asset('template/plugin/sweet-alert/sweetalert.min.js') }}"></script> --}}

	<script src="{{ asset('template/plugin/waves/waves.min.js') }}"></script>
	<!-- Full Screen Plugin -->
	<script src="{{ asset('template/plugin/fullscreen/jquery.fullscreen-min.js') }}"></script>

	<!-- Percent Circle -->
	<script src="{{ asset('template/plugin/percircle/js/percircle.js') }}"></script>

	<!-- Google Chart -->
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

	<!-- Chartist Chart -->
	<script src="{{ asset('template/plugin/chart/chartist/chartist.min.js') }}"></script>
	<script src="{{ asset('template/scripts/chart.chartist.init.min.js') }}"></script>

	<!-- FullCalendar -->
	<script src="{{ asset('template/plugin/moment/moment.js') }}"></script>
	<script src="{{ asset('template/plugin/fullcalendar/fullcalendar.min.js') }}"></script>
	<script src="{{ asset('template/scripts/fullcalendar.init.js') }}"></script>

	<script src="{{ asset('template/scripts/main.js') }}"></script>
	<script src="{{ asset('template/color-switcher/color-switcher.min.js') }}"></script>

	<!-- Data Tables -->
	<script src="{{ asset('template/plugin/datatables/media/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('template/plugin/datatables/media/js/dataTables.bootstrap.min.js') }}"></script>
	<script src="{{asset('template/plugin/editable-table/mindmup-editabletable.js')}}"></script>
	<script src="{{ asset('template/scripts/datatables.demo.min.js') }}"></script>
	{{-- <script src="{{ asset('template/plugin/datatables/extensions/Responsive/js/dataTables.responsive.min.js') }}"></script>
	<script src="{{ asset('template/plugin/datatables/extensions/Responsive/js/responsive.bootstrap.min.js') }}"></script> --}}

	<!-- Edit Talbe -->

	<!-- Validator -->
	<script src="{{ asset('template/plugin/validator/validator.min.js') }}"></script>

	<!-- Dropify -->
	<script src="{{ asset('template/plugin/dropify/js/dropify.min.js') }}"></script>
	<script src="{{ asset('template/scripts/fileUpload.demo.min.js') }}"></script>

    <script>
        $('.jslogout').on('click', function(e){
            e.preventDefault();
            swal.fire({
                title             : 'Logout?',
                text              : "Are you sure you want to logout?",
                type              : 'warning',
                showCancelButton  : true,
                confirmButtonColor: 'red',
                cancelButtonColor : 'grey',
                confirmButtonText : "Yes, I'm out!",
                cancelButtonText  : "No, stay plx!",
            }).then((result) => {
                if (result.value) {
                    $('#form-logout').submit();
                    swal.fire({
                        title : "Logout success",
                        text: "See you later!",
                        type: "success",
                        showConfirmButton  : false,
                        timer: 1500,
                    });
                }
            })
				});

				$(function(){
					$('.waves-effect').each(function(){
						var thisUrl = $(this).attr('href');
						if(thisUrl == '{{ request()->url() }}'){
							$(this).parent().addClass('current');
						}
					});
				});
    </script>

	@yield('script')
    @stack('script')
</body>
</html>
