<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Desciption Field -->
<div class="form-group col-sm-6">
    {!! Form::label('desciption', 'Desciption:') !!}
    {!! Form::text('desciption', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.teams.index') !!}" class="btn btn-default">Cancel</a>
</div>
