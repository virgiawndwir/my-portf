@extends('layouts.admin.app')

@section('content')
<div class="row small-spacing">
	<div class="col-xs-6">
		<div class="box-content">
      <h4 class="box-title">Create {{ $title }}</h4>
      
      <div class="card-content">
        <form data-toggle="validator" action="{{ route($view.'store') }}" method="post" enctype="multipart/form-data">
          @csrf
          @include($view.'field')
          <a href="{{ route($view.'index') }}" class="margin-top-10 btn btn-warning btn-xs btn-bordered"><i class="ico fa fa-arrow-circle-left"></i> Back</a>
          <button type="submit" class="margin-top-10 btn btn-primary btn-xs waves-effect waves-light">Submit <i class="ico fa fa-arrow-circle-right"></i></button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection