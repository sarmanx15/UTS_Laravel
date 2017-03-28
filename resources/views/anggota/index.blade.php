@extends('layouts.app')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Data Anggota</div>
				<div class="panel-body">

		 		<table class="table table-hover table-striped">
				<tr>
					<th>Nama Anggota</th>
					<th>Alamat</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
         	   @foreach( $anggota as $anggota )
                    <tr>
					{!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('anggota.destroy', $anggota->id))) !!}
                     	<td><a href="{{ route('anggota.show', $anggota->id) }}">{{ $anggota->nama }}</a></td>
						<td>{{ $anggota->alamat }}</td>
                     	<td>{!! link_to_route('anggota.edit', 'Edit', array($anggota->id), array('class' => 'btn btn-info')) !!}</td>
                     	<td> {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}</td>

                    {!! Form::close() !!}
					</tr>
            @endforeach
			</table>
 			  <p>
    		  {!! link_to_route('anggota.create', 'Tambah Data Anggota') !!}
  			  </p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection


