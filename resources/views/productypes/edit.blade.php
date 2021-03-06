@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Productype
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($productype, ['route' => ['productypes.update', $productype->id], 'method' => 'patch']) !!}

                        @include('productypes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection