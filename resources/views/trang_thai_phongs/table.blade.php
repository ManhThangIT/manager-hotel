<div class="table-responsive">
    <table class="table" id="trangThaiPhongs-table">
        <thead>
            <tr>
                <th>Trangthaiphong Ten</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($trangThaiPhongs as $trangThaiPhong)
            <tr>
                <td>{!! $trangThaiPhong->trangThaiPhong_ten !!}</td>
                <td>
                    {!! Form::open(['route' => ['trangThaiPhongs.destroy', $trangThaiPhong->trangThaiPhong_ma], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('trangThaiPhongs.show', [$trangThaiPhong->trangThaiPhong_ma]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('trangThaiPhongs.edit', [$trangThaiPhong->trangThaiPhong_ma]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
