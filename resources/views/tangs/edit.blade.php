@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tang
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tang, ['route' => ['tangs.update', $tang->tang_ma], 'method' => 'PUT']) !!}

                        @include('tangs.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
