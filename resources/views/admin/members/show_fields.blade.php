
<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $member->name !!}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <?php
    if ($member->image == "") {
        ?>
        <p>{{ Html::image(url('/uploads/no-image.jpg')),['class'=>'img-rounded'] }}</p>
        <?php } else{ ?>
        <p>{{ Html::image(url('/uploads/'.$member->image), '', array('class' => 'img-rounded','width'=>"304",'height'=>"236")) }}</p>
        <?php } ?>
</div>

<!-- Position Field -->
<div class="form-group">
    {!! Form::label('position', 'Position:') !!}
    <p>{!! $member->position !!}</p>
</div>

<!-- Team Id Field -->
<div class="form-group">
    {!! Form::label('team_id', 'Team:') !!}
    <p>{!! $member->team->name !!}</p>
</div>

<!-- Team Id Field -->
<div class="form-group">
    {!! Form::label('skills', 'Skills:') !!}
    <p>{!! $member->skills !!}</p>
</div>

