@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Member
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'admin.members.store','files'=>'true']) !!}

                        @include('admin.members.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
