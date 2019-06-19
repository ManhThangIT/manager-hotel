<div class="table-responsive">
    <table class="table" id="tinhTrangHoaDons-table">
        <thead>
            <tr>
                <th>Tinhtranghoadon Ten</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tinhTrangHoaDons as $tinhTrangHoaDon)
            <tr>
                <td>{!! $tinhTrangHoaDon->tinhTrangHoaDon_ten !!}</td>
                <td>
                    {!! Form::open(['route' => ['tinhTrangHoaDons.destroy', $tinhTrangHoaDon->tinhTrangHoaDon_ma], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('tinhTrangHoaDons.show', [$tinhTrangHoaDon->tinhTrangHoaDon_ma]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('tinhTrangHoaDons.edit', [$tinhTrangHoaDon->tinhTrangHoaDon_ma]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
