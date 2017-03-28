@extends('layouts.app')
 
@section('content')
  <div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">{{$anggota->nama }}</div>
				<div class="panel-body">
        {!! link_to_route('anggota.show', $anggota->nama, [$anggota->id]) !!} - {{ $hobi->hobi }}
 
			</div>
			</div>
		</div>
	</div>
</div>	
@endsection