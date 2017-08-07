<!--/*
    *----------------------------
    * CREATE: Ngo-Viet-Thanh
    * DATE: 03/08/2016
    * CONTENT: Show feedback
    *----------------------------
    */-->
<!-- Content Field -->
<div class="form-group">
    {!! Form::label('content', 'Content:') !!}
    <p>{!! $feedback->content !!}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <p>{!! $feedback->image !!}</p>
    <div>
        <img src="{{ URL::to('/uploads').'/'.$feedback->image }}" class="avatar"/>
    </div>
</div>

<!-- Name Client Field -->
<div class="form-group">
    {!! Form::label('name_client', 'Name Client:') !!}
    <p>{!! $feedback->name_client !!}</p>
</div>

<!-- Company Field -->
<div class="form-group">
    {!! Form::label('company', 'Company:') !!}
    <p>{!! $feedback->company !!}</p>
</div>