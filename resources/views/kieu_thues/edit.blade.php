@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Kieu Thue
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($kieuThue, ['route' => ['kieuThues.update', $kieuThue->kieuThue_ma], 'method' => 'PUT']) !!}

                        @include('kieu_thues.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
