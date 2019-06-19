@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tinh Trang Hoa Don
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tinhTrangHoaDon, ['route' => ['tinhTrangHoaDons.update', $tinhTrangHoaDon->tinhTrangHoaDon_ma], 'method' => 'PUT']) !!}

                        @include('tinh_trang_hoa_dons.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
