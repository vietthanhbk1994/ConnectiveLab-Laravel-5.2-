@extends('admin.layouts.app')

@section('content')
<section class="content-header">
    <h1>
        Edit Service
    </h1>
</section>
<div class="content">
    @include('adminlte-templates::common.errors')
    <div class="box box-primary">
        <div class="box-body">
            <div class="row">
                {!! Form::model($service, ['route' => ['admin.services.update', $service->id], 'method' => 'patch','files'=>true]) !!}

                @include('admin.services.fields')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
