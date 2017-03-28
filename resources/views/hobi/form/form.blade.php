<div class="form-group">
    {!! Form::label('hobi', 'Hobi:', array('class' => 'col-md-4 control-label')) !!}
    <div class="col-md-6">{!! Form::text('hobi',null, array('class' => 'form-control')) !!}</div>
</div>
 
<div class="col-md-6 col-md-offset-4">
    {!! Form::submit($submit_text,['class'=>'btn primary']) !!}
</div>