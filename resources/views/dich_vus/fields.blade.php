<!-- Dichvu Ten Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dichVu_ten', 'Dichvu Ten:') !!}
    {!! Form::text('dichVu_ten', null, ['class' => 'form-control']) !!}
</div>

<!-- Dichvu Gia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dichVu_gia', 'Dichvu Gia:') !!}
    {!! Form::number('dichVu_gia', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('dichVus.index') !!}" class="btn btn-default">Cancel</a>
</div>
