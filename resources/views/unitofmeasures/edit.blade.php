@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Unitofmeasure
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($unitofmeasure, ['route' => ['unitofmeasures.update', $unitofmeasure->id], 'method' => 'patch']) !!}

                        @include('unitofmeasures.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection