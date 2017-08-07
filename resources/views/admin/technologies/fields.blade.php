<!-- Name Field -->
<div class="form-group col-sm-6">
    <div class="form-group col-sm-12">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
    <!-- Link Field -->
    <div class="form-group col-sm-12">
        {!! Form::label('link', 'Link:') !!}
        {!! Form::text('link', null, ['class' => 'form-control']) !!}
    </div>
</div>
<!-- Image Field -->
<div class="form-group col-sm-6">
    <!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}<br>
    <?php if (isset($technology)) { ?>
        <p>{{ Html::image(url('/uploads/'.$technology->image), '', array('class' => 'img-rounded','width'=>"200",'height'=>"200",'id'=>'img')) }}</p>
    <?php } else { ?>
        <p>{{ Html::image(url('/uploads/no-image.jpg'), '', array('class' => 'img-rounded','width'=>"200",'height'=>"200",'id'=>'img')) }}</p>
    <?php }
    ?>
    {!! Form::file('image',['onchange'=>"checkHinhAnh(this)"]) !!}
</div>

</div>
<div class="clearfix"></div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.technologies.index') !!}" class="btn btn-default">Cancel</a>
</div>
