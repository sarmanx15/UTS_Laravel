@extends('layouts.app')
 
@section('content')
 <div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Tambah data hobi anggota : "{{ $anggota->nama }}"</div>
				<div class="panel-body">
				@if ($errors->any())
					<div class='flash alert-danger'>
					@foreach ( $errors->all() as $error )
					<p>{{ $error }}</p>
					@endforeach
					</div>
				@endif
				 
    {!! Form::model(new App\hobi, ['route' => ['anggota.hobi.store', $anggota->id], 'class'=>'form-horizontal']) !!}
        @include('hobi/form/form', ['submit_text' => 'Tambah Hobi'])
    {!! Form::close() !!}

					</div>
			</div>
		</div>
	</div>
</div>
@endsection

