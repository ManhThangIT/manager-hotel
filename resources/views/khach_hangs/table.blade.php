<div class="table-responsive">
    <table class="table" id="khachHangs-table">
        <thead>
            <tr>
                <th>Khachhang Ten</th>
        <th>Khachhang Sodienthoai</th>
        <th>Khachhang Chungminhthu</th>
        <th>Khachhang Diachi</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($khachHangs as $khachHang)
            <tr>
                <td>{!! $khachHang->khachHang_ten !!}</td>
            <td>{!! $khachHang->khachHang_soDienThoai !!}</td>
            <td>{!! $khachHang->khachHang_chungMinhThu !!}</td>
            <td>{!! $khachHang->khachHang_diaChi !!}</td>
                <td>
                    {!! Form::open(['route' => ['khachHangs.destroy', $khachHang->khachHang_ma], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('khachHangs.show', [$khachHang->khachHang_ma]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('khachHangs.edit', [$khachHang->khachHang_ma]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
