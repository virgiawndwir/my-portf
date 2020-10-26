<div class="form-group">
  <label for="name">Name</label>
  <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name" autocomplete="off" data-error="Please complete your full name" required value="{{ @$data->name }}">
  <div class="help-block with-errors"></div>
</div>
