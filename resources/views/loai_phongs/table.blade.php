<div class="table-responsive">
    <table class="table" id="loaiPhongs-table">
        <thead>
            <tr>
                <th>Loaiphong Ten</th>
        <th>Loaiphong Songuoitoida</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($loaiPhongs as $loaiPhong)
            <tr>
                <td>{!! $loaiPhong->loaiPhong_ten !!}</td>
            <td>{!! $loaiPhong->loaiPhong_soNguoiToiDa !!}</td>
                <td>
                    {!! Form::open(['route' => ['loaiPhongs.destroy', $loaiPhong->loaiPhong_ma], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('loaiPhongs.show', [$loaiPhong->loaiPhong_ma]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('loaiPhongs.edit', [$loaiPhong->loaiPhong_ma]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
