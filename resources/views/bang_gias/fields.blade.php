<!-- Banggia Makieuthue Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bangGia_maKieuThue', 'Banggia Makieuthue:') !!}
    {!! Form::number('bangGia_maKieuThue', null, ['class' => 'form-control']) !!}
</div>

<!-- Banggia Giatien Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bangGia_giaTien', 'Banggia Giatien:') !!}
    {!! Form::number('bangGia_giaTien', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('bangGias.index') !!}" class="btn btn-default">Cancel</a>
</div>
