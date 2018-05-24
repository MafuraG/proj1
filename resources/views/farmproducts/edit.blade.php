@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Farmproduct
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($farmproduct, ['route' => ['farmproducts.update', $farmproduct->id], 'method' => 'patch']) !!}

                        @include('farmproducts.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection