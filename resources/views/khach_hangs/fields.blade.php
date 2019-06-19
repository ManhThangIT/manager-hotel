<!-- Khachhang Ten Field -->
<div class="form-group col-sm-6">
    {!! Form::label('khachHang_ten', 'Khachhang Ten:') !!}
    {!! Form::text('khachHang_ten', null, ['class' => 'form-control']) !!}
</div>

<!-- Khachhang Sodienthoai Field -->
<div class="form-group col-sm-6">
    {!! Form::label('khachHang_soDienThoai', 'Khachhang Sodienthoai:') !!}
    {!! Form::text('khachHang_soDienThoai', null, ['class' => 'form-control']) !!}
</div>

<!-- Khachhang Chungminhthu Field -->
<div class="form-group col-sm-6">
    {!! Form::label('khachHang_chungMinhThu', 'Khachhang Chungminhthu:') !!}
    {!! Form::text('khachHang_chungMinhThu', null, ['class' => 'form-control']) !!}
</div>

<!-- Khachhang Diachi Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('khachHang_diaChi', 'Khachhang Diachi:') !!}
    {!! Form::textarea('khachHang_diaChi', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('khachHangs.index') !!}" class="btn btn-default">Cancel</a>
</div>
