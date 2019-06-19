<!-- Tinhtranghoadon Ten Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tinhTrangHoaDon_ten', 'Tinhtranghoadon Ten:') !!}
    {!! Form::text('tinhTrangHoaDon_ten', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('tinhTrangHoaDons.index') !!}" class="btn btn-default">Cancel</a>
</div>
