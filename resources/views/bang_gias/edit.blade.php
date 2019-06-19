@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Bang Gia
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($bangGia, ['route' => ['bangGias.update', $bangGia->bangGia_maLoaiPhong], 'method' => 'PUT']) !!}

                        @include('bang_gias.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
