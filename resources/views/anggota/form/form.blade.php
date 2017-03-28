<div class="form-group">
 {!! Form::label('nama', 'Nama', array('class' => 'col-md-4 control-label'))  !!}
	<div class="col-md-6">
	{!! Form::text('nama', null,array('class' => 'form-control'),'') !!}</div>
</div>
<div class="form-group">
{!! Form::label('alamat', 'Alamat', array('class' => 'col-md-4 control-label')) !!}
	<div class="col-md-6"> 
	{!! Form::text('alamat', null, array('class' => 'form-control'),'sa') !!} 	</div>
</div>
<div class="form-group">
<div class="col-md-6 col-md-offset-4">
    {!! Form::submit($submit_text, ['class'=>'btn primary']) !!}
</div>
