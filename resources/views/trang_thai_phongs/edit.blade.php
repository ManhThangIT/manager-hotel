@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Trang Thai Phong
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($trangThaiPhong, ['route' => ['trangThaiPhongs.update', $trangThaiPhong->trangThaiPhong_ma], 'method' => 'PUT']) !!}

                        @include('trang_thai_phongs.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
