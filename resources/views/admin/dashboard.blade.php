@extends('layouts.admin.app')

@section('content')
<div class="row small-spacing">
	<div class="col-xs-12">
		<div class="box-content">
			<h4 class="box-title">Activity</h4>
			<!-- /.box-title -->
			<div class="dropdown js__drop_down">
				<a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
				<ul class="sub-menu">
					<li><a href="#">Action</a></li>
					<li><a href="#">Another action</a></li>
					<li><a href="#">Something else there</a></li>
					<li class="split"></li>
					<li><a href="#">Separated link</a></li>
				</ul>
				<!-- /.sub-menu -->
			</div>
			<!-- /.dropdown js__dropdown -->
			<div id="smil-animation-index-chartist-chart" class="chartist-chart" style="height: 320px"></div>
			<!-- /#smil-animation-chartist-chart.chartist-chart -->
		</div>
		<!-- /.box-content -->
	</div>
	<!-- /.col-xs-12 -->
</div>
<!-- /.row -->		
@endsection