<div class="form-group col-sm-6">
    <!-- Name Field -->
    <div class="form-group col-sm-12">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
    <!-- Content Field -->
    <div class="form-group col-sm-12 col-lg-12">
        {!! Form::label('content', 'Content:') !!}
        {!! Form::textarea('content', null, ['class' => 'form-control','rows'=>'5']) !!}
    </div>
</div>
<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}<br>
    <?php if (isset($service)) { ?>
        <p>{{ Html::image(url('/uploads/'.$service->image), '', array('class' => 'img-rounded','width'=>"304",'height'=>"236",'id'=>'img')) }}</p>
    <?php } else { ?>
        <p>{{ Html::image(url('/uploads/no-image.jpg'), '', array('class' => 'img-rounded','width'=>"304",'height'=>"236",'id'=>'img')) }}</p>
    <?php }
    ?>
    {!! Form::file('image',['onchange'=>"checkHinhAnh(this)"]) !!}
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.services.index') !!}" class="btn btn-default">Cancel</a>
</div>
