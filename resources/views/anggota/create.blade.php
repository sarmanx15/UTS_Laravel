@extends('layouts.app')
 
@section('content')
 <div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Tambah Data Anggota </div>
				<div class="panel-body">
				@if ($errors->any())
					<div class='flash alert-danger'>
					@foreach ( $errors->all() as $error )
					<p>{{ $error }}</p>
					@endforeach
					</div>
				@endif
 
    			{!! Form::model(new App\Anggota, ['class' => 'form-horizontal','route' => ['anggota.store']]) !!}
        		@include('anggota/form/form', ['submit_text' => 'Tambah Data'])
    			{!! Form::close() !!}
	
					</div>
			</div>
		</div>
	</div>
</div>	
@endsection