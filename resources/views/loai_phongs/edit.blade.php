@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Loai Phong
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($loaiPhong, ['route' => ['loaiPhongs.update', $loaiPhong->loaiPhong_ma], 'method' => 'PUT']) !!}

                        @include('loai_phongs.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
