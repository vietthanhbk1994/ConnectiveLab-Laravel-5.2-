@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Add Service
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'admin.services.store','files'=>true, 'onsubmit'=>"return checkImage('image')"]) !!}

                        @include('admin.services.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
@endsection
