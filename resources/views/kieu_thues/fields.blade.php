<!-- Kieuthue Ten Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kieuThue_ten', 'Kieuthue Ten:') !!}
    {!! Form::text('kieuThue_ten', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('kieuThues.index') !!}" class="btn btn-default">Cancel</a>
</div>
