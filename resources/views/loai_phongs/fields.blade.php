<!-- Loaiphong Ten Field -->
<div class="form-group col-sm-6">
    {!! Form::label('loaiPhong_ten', 'Loaiphong Ten:') !!}
    {!! Form::text('loaiPhong_ten', null, ['class' => 'form-control']) !!}
</div>

<!-- Loaiphong Songuoitoida Field -->
<div class="form-group col-sm-6">
    {!! Form::label('loaiPhong_soNguoiToiDa', 'Loaiphong Songuoitoida:') !!}
    {!! Form::number('loaiPhong_soNguoiToiDa', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('loaiPhongs.index') !!}" class="btn btn-default">Cancel</a>
</div>
