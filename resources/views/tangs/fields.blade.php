<!-- Tang Ten Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tang_ten', 'Tang Ten:') !!}
    {!! Form::text('tang_ten', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('tangs.index') !!}" class="btn btn-default">Cancel</a>
</div>
