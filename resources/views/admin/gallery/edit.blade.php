@extends('layouts.admin.app')

@section('content')
<div class="row small-spacing">
	<div class="col-xs-6">
		<div class="box-content">
      <h4 class="box-title">Update {{ $title }}</h4>
      
      <div class="card-content">
        <form data-toggle="validator" action="{{ route($view.'update', $data->id) }}" method="post" enctype="multipart/form-data">
          @method('PUT')
          @csrf
          @include($view.'field')
          <a href="{{ route($view.'index') }}" class="margin-top-10 btn btn-warning btn-xs btn-bordered"><i class="ico fa fa-arrow-circle-left"></i> Back</a>
          <button type="submit" class="margin-top-10 btn btn-primary btn-xs waves-effect waves-light">Submit <i class="ico fa fa-paper-plane"></i></button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection