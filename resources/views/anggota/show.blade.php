@extends('layouts.app')
@section('content')
      <div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">{{$anggota->nama }}</div>
				<div class="panel-body">
 
    @if ( !$anggota->hobi->count() )
        Belum memiliki hobi.
    @else
        <table class="table table-hover table-striped">
				<tr><th>Nama Hobi</th><th>Edit</th><th>Delete</th></tr>
            @foreach( $anggota->hobi as $hobi )
			<tr>
<td> {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('anggota.hobi.destroy', $anggota->id, $hobi->id))) !!}
      <a href="{{ route('anggota.hobi.show', [$anggota->id, $hobi->id]) }}">{{ $hobi->hobi }}</a></td>
      <td>{!! link_to_route('anggota.hobi.edit', 'Edit', array($anggota->id, $hobi->id), array('class' => 'btn btn-info')) !!}</td>
      <td>{!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}</td>
      {!! Form::close() !!}
					</tr>
					 @endforeach
					 </table>
       
	@endif
<p>
        {!! link_to_route('anggota.index', 'Kembali ke Data Anggota') !!} |
        {!! link_to_route('anggota.hobi.create', 'Menambah data hobi', $anggota->id) !!}
    </p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
