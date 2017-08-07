<!--/*
    *----------------------------
    * CREATE: Ngo-Viet-Thanh
    * DATE: 03/08/2016
    * CONTENT: Create feedback
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
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'admin.feedbacks.store','files'=>true]) !!}

                        @include('admin.feedbacks.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
