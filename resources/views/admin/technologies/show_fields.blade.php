<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $technology->name !!}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <img id="blah" src='{!! URL::to("uploads/$technology->image") !!}' alt="your image" class="form-control img-thumbnail" style='width:150px;height:150px' />
    <p>{!! $technology->image !!}</p>
</div>

<!-- Link Field -->
<div class="form-group">
    {!! Form::label('link', 'Link:') !!}
    <a href="{{$technology->link }}" class='btn btn-default btn-xs'>{{$technology->link }}</a> 
</div>

