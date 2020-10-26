@extends('layouts.admin.app')

@section('content')
<div class="row small-spacing">
	<div class="col-xs-8">
		<div class="box-content">
      <h4 class="box-title">Edit {{ $title }}</h4>
      
      <div class="card-content">
        <form data-toggle="validator" action="{{ route($view.'update', $id) }}" method="post" enctype="multipart/form-data">
          @method('PUT')
          @csrf
          <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter your full name" autocomplete="off" data-error="Please complete your full name" required value="{{ @$data->name }}">
            <div class="help-block with-errors"></div>
          </div>
          
          <div class="form-group">
            <label for="inputEmail" class="control-label">Email</label>
            <input type="email" class="form-control" name="email" id="inputEmail"  placeholder="Enter your email" data-error="Bruh, that email address is invalid" required value="{{ @$data->email }}">
            <div class="help-block with-errors"></div>
          </div>
          
          <div class="form-group">
            <label for="inputPassword" class="control-label">Password</label>
            <div class="row">
              <div class="form-group col-sm-6">
                <input type="password" data-minlength="6" name="password" class="form-control" id="inputPassword" placeholder="Password">
                <div class="help-block">Minimum of 6 characters</div>
              </div>
              <div class="form-group col-sm-6">
                <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirm">
                <div class="help-block with-errors"></div>
              </div>
            </div>
          </div>
          
          <div class="form-group col-md-6">
            <label for="input-file-now">Upload Photo</label>
            <input type="file" id="input-file-now" name="image" class="dropify">
          </div>

          <div class="form-group col-md-6 hr">
            <label for="input-file-now">Upload CV</label>
            <input type="file" id="input-file-now" name="cv" class="dropify">
          </div>
          <hr>
          <div class="pull-right">
            <a href="{{ route($view.'index') }}" class="margin-top-10 btn btn-warning btn-xs btn-bordered"><i class="ico fa fa-arrow-circle-left"></i> Back</a>
            <button type="submit" class="margin-top-10 btn btn-primary btn-bordered btn-xs waves-effect waves-light">Submit <i class="ico fa fa-arrow-circle-right"></i></button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection