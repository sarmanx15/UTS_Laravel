@extends('layouts.app') 
@section('content')

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Edit Data Anggota</div>
				<div class="panel-body">
				@if ($errors->any())
					<div class='flash alert-danger'>
					@foreach ( $errors->all() as $error )
					<p>{{ $error }}</p>
					@endforeach
					</div>
				@endif
 
    			{!! Form::model($anggota, ['method' => 'PATCH', 'route' => ['anggota.update', $anggota->id],'class' => 'form-horizontal']) !!}
       			 @include('anggota/form/form', ['submit_text' => 'Edit Data Anggota'])
   				 {!! Form::close() !!}
	
						</div>
			</div>
		</div>
	</div>
</div>	
@endsection

