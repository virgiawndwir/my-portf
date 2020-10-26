@extends('layouts.admin.app')

@section('content')
<div class="row small-spacing">
	<div class="col-xs-12">
		<div class="box-content">
      <h4 class="box-title">{{$title}}</h4>
      <!-- /.box-title -->
      <div class="dropdown js__drop_down">
        <a href="{{ route($view.'create') }}" class="btn btn-xs btn-info waves-light waves-effect"><i class="ico fa fa-plus-circle"></i> Add</a>
      </div>

      <table id="example" class="table table-striped display" style="width: 100%">
        <thead>
          <tr>
            <th>Name</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($datas as $data)
          <tr>
            <td>{{ $data->name }}</td>
            <td class="right">
              <ul class="list-inline">
                <li>
                  <a href="{{ route($view.'edit', $data->id) }}" class="btn-bordered btn-xs"><i class="ico fa fa-cog fa-spin"></i> Edit</a>
                </li>
                <li>
                  <form action="{{ route($view.'destroy', $data->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn-danger btn-eliminate btn-bordered btn-xs delete-from-table"><i class="ico fa fa-minus-circle"></i> Delete</button>
                  </form>
                </li>
              </ul>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      @csrf
    </div>
  </div>
</div>
@endsection

@section('script')
    <script>
      // $(document).ready(function(){

      //   const url = '{{ route($view.'index') }}';

      //   fetch_data();
      //   function fetch_data(){
      //     $.ajax({
      //       url: url,
      //       dataType: 'json',
      //       success: function(data){
      //         var html = '';
      //         for(var count = 0; count < data.length; count++){
      //           html += '<tr>';
      //           html += '<td contenteditable data-column-name="name" data-id="'+data[count].id+'">'+data[count].name+'</td>';
      //           html += '<td><button type="button" class="text-danger btn-eliminate btn-bordered btn-xs" id="'+data[count].id+'">Delete</button></td></tr>'''
      //         }
      //         $('tbody').html(html);
      //       }
      //     });
      //   };
      // });
    </script>
@endsection
