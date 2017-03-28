@extends('layouts.app')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Data hobi</div>
				<div class="panel-body">

		 		<table class="table table-hover table-striped">
				<tr>
					<th>Nama hobi</th>
					<th>Alamat</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
         	   @foreach( $hobi as $hobi )
                    <tr>
					{!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('hobi.destroy', $hobi->id))) !!}
                      <td> <a href="{{ route('hobi.show', $hobi->id) }}">{{ $hobi->nama }}</a></td>
						<td>{{ $hobi->alamat }}</td>
                         <td>{!! link_to_route('hobi.edit', 'Edit', array($hobi->id), array('class' => 'btn btn-info')) !!}</td>
                         <td> {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}</td>
                    {!! Form::close() !!}
						</tr>
            @endforeach
			</table>
 			  <p>
    		  {!! link_to_route('hobi.create', 'Tambah Data hobi') !!}
  			  </p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection


