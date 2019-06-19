@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Cong Viec
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($congViec, ['route' => ['congViecs.update', $congViec->congViec_ma], 'method' => 'PUT']) !!}

                        @include('cong_viecs.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
