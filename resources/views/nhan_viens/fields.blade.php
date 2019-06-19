<!-- Nhanvien Ten Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nhanVien_ten', 'Nhanvien Ten:') !!}
    {!! Form::text('nhanVien_ten', null, ['class' => 'form-control']) !!}
</div>

<!-- Nhanvien Ngaysinh Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nhanVien_ngaySinh', 'Nhanvien Ngaysinh:') !!}
    {!! Form::date('nhanVien_ngaySinh', null, ['class' => 'form-control','id'=>'nhanVien_ngaySinh']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#nhanVien_ngaySinh').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Nhanvien Sodienthoai Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nhanVien_soDienThoai', 'Nhanvien Sodienthoai:') !!}
    {!! Form::text('nhanVien_soDienThoai', null, ['class' => 'form-control']) !!}
</div>

<!-- Nhanvien Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nhanVien_email', 'Nhanvien Email:') !!}
    {!! Form::text('nhanVien_email', null, ['class' => 'form-control']) !!}
</div>

<!-- Nhanvien Gioitinh Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nhanVien_gioiTinh', 'Nhanvien Gioitinh:') !!}
    {!! Form::number('nhanVien_gioiTinh', null, ['class' => 'form-control']) !!}
</div>

<!-- Nhanvien Diachi Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('nhanVien_diaChi', 'Nhanvien Diachi:') !!}
    {!! Form::textarea('nhanVien_diaChi', null, ['class' => 'form-control']) !!}
</div>

<!-- Nhanvien Anh Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('nhanVien_anh', 'Nhanvien Anh:') !!}
    {!! Form::textarea('nhanVien_anh', null, ['class' => 'form-control']) !!}
</div>

<!-- Nhanvien Macongviec Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nhanVien_maCongViec', 'Nhanvien Macongviec:') !!}
    {!! Form::number('nhanVien_maCongViec', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('nhanViens.index') !!}" class="btn btn-default">Cancel</a>
</div>
