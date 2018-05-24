@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Agroinput
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($agroinput, ['route' => ['agroinputs.update', $agroinput->id], 'method' => 'patch']) !!}

                        @include('agroinputs.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection