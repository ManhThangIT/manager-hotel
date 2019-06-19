<div class="table-responsive">
    <table class="table" id="nhanViens-table">
        <thead>
            <tr>
                <th>Nhanvien Ten</th>
        <th>Nhanvien Ngaysinh</th>
        <th>Nhanvien Sodienthoai</th>
        <th>Nhanvien Email</th>
        <th>Nhanvien Gioitinh</th>
        <th>Nhanvien Diachi</th>
        <th>Nhanvien Anh</th>
        <th>Nhanvien Macongviec</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($nhanViens as $nhanVien)
            <tr>
                <td>{!! $nhanVien->nhanVien_ten !!}</td>
            <td>{!! $nhanVien->nhanVien_ngaySinh !!}</td>
            <td>{!! $nhanVien->nhanVien_soDienThoai !!}</td>
            <td>{!! $nhanVien->nhanVien_email !!}</td>
            <td>{!! $nhanVien->nhanVien_gioiTinh !!}</td>
            <td>{!! $nhanVien->nhanVien_diaChi !!}</td>
            <td>{!! $nhanVien->nhanVien_anh !!}</td>
            <td>{!! $nhanVien->nhanVien_maCongViec !!}</td>
                <td>
                    {!! Form::open(['route' => ['nhanViens.destroy', $nhanVien->nhanVien_ma], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('nhanViens.show', [$nhanVien->nhanVien_ma]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('nhanViens.edit', [$nhanVien->nhanVien_ma]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
