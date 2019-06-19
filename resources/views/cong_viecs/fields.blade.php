<!-- Congviec Ten Field -->
<div class="form-group col-sm-6">
    {!! Form::label('congViec_ten', 'Congviec Ten:') !!}
    {!! Form::text('congViec_ten', null, ['class' => 'form-control']) !!}
</div>

<!-- Congviec Luong Field -->
<div class="form-group col-sm-6">
    {!! Form::label('congViec_luong', 'Congviec Luong:') !!}
    {!! Form::number('congViec_luong', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('congViecs.index') !!}" class="btn btn-default">Cancel</a>
</div>
