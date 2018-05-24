@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Orderinput
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($orderinput, ['route' => ['orderinputs.update', $orderinput->id], 'method' => 'patch']) !!}

                        @include('orderinputs.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection