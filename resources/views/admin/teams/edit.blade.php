@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Team
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($team, ['route' => ['admin.teams.update', $team->id], 'method' => 'patch','files'=>'true']) !!}

                        @include('admin.teams.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection