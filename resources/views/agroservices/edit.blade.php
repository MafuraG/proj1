@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Agroservice
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($agroservice, ['route' => ['agroservices.update', $agroservice->id], 'method' => 'patch']) !!}

                        @include('agroservices.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection