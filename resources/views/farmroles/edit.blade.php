@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Farmrole
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($farmrole, ['route' => ['farmroles.update', $farmrole->id], 'method' => 'patch']) !!}

                        @include('farmroles.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection