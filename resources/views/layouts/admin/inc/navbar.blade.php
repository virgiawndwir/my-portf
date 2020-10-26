<div class="fixed-navbar">
	<div class="pull-left">
		<button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
		<h1 class="page-title">{{ isset($title) ? $title : '' }}</h1>
		<!-- /.page-title -->
	</div>
	<!-- /.pull-left -->
	<form action="{{ route('admin.logout') }}" method="post" id="form-logout" class="d-none">@csrf</form>
	<div class="pull-right">
		<div class="ico-item">
			<a href="#" class="ico-item fa fa-search js__toggle_open" data-target="#searchform-header"></a>
			<form action="#" id="searchform-header" class="searchform js__toggle"><input type="search" placeholder="Search..." class="input-search"><button class="fa fa-search button-search" type="submit"></button></form>
			<!-- /.searchform -->
		</div>
		<!-- /.ico-item -->
		<div class="ico-item fa fa-arrows-alt js__full_screen"></div>

		<a href="#" class="ico-item fa fa-power-off jslogout"></a>
	</div>
	<!-- /.pull-right -->
</div>
<!-- fixed-navbar -->


