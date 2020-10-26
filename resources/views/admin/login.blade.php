<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Admin Login</title>
	<link rel="stylesheet" href="{{ asset('template/styles/style.min.css')}}">

	<!-- Waves Effect -->
	<link rel="stylesheet" href="{{ asset('template/plugin/waves/waves.min.css')}}">

</head>

<body>

<div id="single-wrapper">
	<form action="{{ route('admin.login.action') }}" class="frm-single form-prevent-multiple-submits" method="post">
		@csrf
		<div class="inside">
			<div class="title"><strong>Ninja</strong>Admin</div>
			<!-- /.title -->
			<div class="frm-title">Login</div>
			<!-- /.frm-title -->
			<div class="frm-input">
				<input type="text" name="email" autocomplete="off" placeholder="Email" class="frm-inp"><i class="fa fa-user frm-ico"></i>
				@if ($errors->has('email'))
					<span class="invalid feedback"role="alert">
							<p>{{ $errors->first('email') }}</p>
					</span>
				@endif
			</div>
			<!-- /.frm-input -->
			<div class="frm-input">
				<input type="password" name="password" autocomplete="off" placeholder="Password" class="frm-inp"><i class="fa fa-lock frm-ico"></i>
				@if ($errors->has('password'))
				<span class="invalid feedback"role="alert">
						<p>{{ $errors->first('password') }}</p>
				</span>
			@endif
			</div>
			<!-- /.frm-input -->
			<div class="clearfix margin-bottom-20">
				<div class="pull-left">
					<div class="checkbox primary"><input type="checkbox" id="rememberme"><label for="rememberme">Remember me</label></div>
					<!-- /.checkbox -->
				</div>
			</div>
			<!-- /.clearfix -->
			<button type="submit" class="frm-submit button-prevent-multiple-submit">Login<i class="fa fa-arrow-circle-right"></i></button>
			<div class="row small-spacing">
				<div class="col-sm-12">
					<div class="txt-login-with txt-center">or login with</div>
					<!-- /.txt-login-with -->
				</div>
				<!-- /.col-sm-12 -->
				<div class="col-sm-6"><button type="button" class="btn btn-sm btn-icon btn-icon-left btn-social-with-text btn-facebook text-white waves-effect waves-light"><i class="ico fa fa-facebook"></i><span>Facebook</span></button></div>
				<!-- /.col-sm-6 -->
				<div class="col-sm-6"><button type="button" class="btn btn-sm btn-icon btn-icon-left btn-social-with-text btn-google-plus text-white waves-effect waves-light"><i class="ico fa fa-google-plus"></i>Google+</button></div>
				<!-- /.col-sm-6 -->
			</div>


			<div class="frm-footer">NinjaAdmin © 2016.</div>
			<!-- /.footer -->
		</div>
		<!-- .inside -->
	</form>
	<!-- /.frm-single -->
</div><!--/#single-wrapper -->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="{{ asset('template/script/html5shiv.min.js') }}"></script>
		<script src="{{ asset('template/script/respond.min.js') }}"></script>
	<![endif]-->
	<!--
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="{{ asset('template/scripts/jquery.min.js') }}"></script>
	<script src="{{ asset('template/scripts/modernizr.min.js') }}"></script>
	<script src="{{ asset('template/plugin/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('template/plugin/nprogress/nprogress.js') }}"></script>
	<script src="{{ asset('template/plugin/waves/waves.min.js') }}"></script>

	<script src="{{ asset('template/scripts/main.min.js') }}"></script>
	<script>
		(function(){
			$('.form-prevent-multiple-submits').on('submit', function(){
				$('.button-prevent-multiple-submit').attr('disabled', 'true');
			})
		})();
	</script>
</body>
</html>
