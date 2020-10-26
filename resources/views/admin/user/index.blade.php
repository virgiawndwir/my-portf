@extends('layouts.admin.app')

@section('content')
<div class="row small-spacing">
	<div class="col-xs-12">
		<div class="box-content">
      <h4 class="box-title">{{$title}}</h4>
      <table id="example-edit" class="table table-striped display" style="width:100%">
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($datas as $data)
          @php
          $dataUser = [$data->name, $data->email];
          @endphp
          <tr data-url="{{ route('admin.user.update' , $data->id) }}" data-user="{{ json_encode($dataUser) }}">
            <td data-type="name">{{ $data->name }}</td>
            <td data-type="email">{{ $data->email }}</td>
            <td class="right">
              <ul class="list-inline">
                <li>
                  <a href="{{ route($view.'edit', $data->id) }}" class="btn-bordered btn-xs"><i class="ico fa fa-cog fa-spin"></i> Edit</a>
                </li>
              </ul>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection

@section('script')
    <script>
      // admin.user.update/{id}
      function updateData(dataUrl, dataUser, dataType, value){
        dataUser = dataUser.split('"').join('');
        dataUser = dataUser.replace('[', '');
        dataUser = dataUser.replace(']', '');
        dataUser = dataUser.split(',');
        if (dataType == 'name') {
          dataUser[0] = value;
        } else {
          dataUser[1] = value;
        }
        $.ajax({
          type: 'POST',
          url: dataUrl,
          data: {
            '_method': 'PUT',
            '_token': '{{ csrf_token() }}',
            'name': dataUser[0],
            'email': dataUser[1]
          },
          success: console.log('updated')
        });
      }

      // $('body').on('click', '.delete-from-table', function(e){
      //   e.preventDefault();
      //   swal({
      //     title             : 'Delete?',
      //     text              : "Deleted data cannot be recovered!",
      //     type              : 'warning',
      //     showCancelButton  : true,
      //     confirmButtonColor: 'red',
      //     cancelButtonColor : '#d33',
      //     confirmButtonText : 'Yes, Delete!'
      //   }, function(isConfirm){
			// 		if (isConfirm) {
			// 			$('#form-delete').submit();
			// 		}
			// 		else {
			// 		}
			// 	});
      // });
    </script>
@endsection
