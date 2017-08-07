@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Technology Edit
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($technology, ['route' => ['admin.technologies.update', $technology->id], 'method' => 'patch', 'files'=>true]) !!}

                        @include('admin.technologies.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection