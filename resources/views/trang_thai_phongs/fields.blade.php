<!-- Trangthaiphong Ten Field -->
<div class="form-group col-sm-6">
    {!! Form::label('trangThaiPhong_ten', 'Trangthaiphong Ten:') !!}
    {!! Form::text('trangThaiPhong_ten', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('trangThaiPhongs.index') !!}" class="btn btn-default">Cancel</a>
</div>
