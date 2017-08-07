<!--/*
    *----------------------------
    * CREATE: Ngo-Viet-Thanh
    * DATE: 03/08/2016
    * CONTENT: Show a feedback
    *----------------------------
    */-->
@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Feedback
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('admin.feedbacks.show_fields')
                    <a href="{!! route('admin.feedbacks.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
