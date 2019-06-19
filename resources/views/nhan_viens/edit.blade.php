@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Nhan Vien
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($nhanVien, ['route' => ['nhanViens.update', $nhanVien->nhanVien_ma], 'method' => 'PUT']) !!}

                        @include('nhan_viens.change')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
