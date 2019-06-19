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
                    {!! Form::open(['route' => 'nhanViens.store']) !!}

                        @include('nhan_viens.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
