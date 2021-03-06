<!-- Name Field -->
<div class="form-group col-sm-6">
    <div class="form-group col-sm-12">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
    <!-- Position Field -->
    <div class="form-group col-sm-12">
        {!! Form::label('position', 'Position:') !!}
        {!! Form::text('position', null, ['class' => 'form-control']) !!}
    </div>
    <div class="clearfix"></div>

    <!-- Team Id Field -->
    <div class="form-group col-sm-12">
        {!! Form::label('team_id', 'Team:') !!}
        {!! Form::select('team_id', $teams, isset($team) ? $team->id:null, ['class' => 'form-control']) !!}
    </div>
    <!-- Skill Field -->
    <div class="form-group col-sm-12 col-lg-12">
        {!! Form::label('skills', 'Skills:') !!}
        {!! Form::textarea('skills', null, ['class' => 'form-control', 'rows'=>'5']) !!}
    </div>
</div>
<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}<br>
    <?php if (isset($member)) { ?>
        <p>{{ Html::image(url('/uploads/'.$member->image), '', array('class' => 'img-rounded','width'=>"304",'height'=>"236",'id'=>'img')) }}</p>
    <?php } else { ?>
        <p>{{ Html::image(url('/uploads/no-image.jpg'), '', array('class' => 'img-rounded','width'=>"304",'height'=>"236",'id'=>'img')) }}</p>
    <?php }
    ?>
    {!! Form::file('image',['onchange'=>"checkHinhAnh(this)"]) !!}
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.members.index') !!}" class="btn btn-default">Cancel</a>
</div>