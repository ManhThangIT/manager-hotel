<div class="table-responsive">
    <table class="table" id="bangGias-table">
        <thead>
            <tr>
                <th>Banggia Makieuthue</th>
        <th>Banggia Giatien</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($bangGias as $bangGia)
            <tr>
                <td>{!! $bangGia->bangGia_maKieuThue !!}</td>
            <td>{!! $bangGia->bangGia_giaTien !!}</td>
                <td>
                    {!! Form::open(['route' => ['bangGias.destroy', $bangGia->bangGia_maLoaiPhong], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('bangGias.show', [$bangGia->bangGia_maLoaiPhong]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('bangGias.edit', [$bangGia->bangGia_maLoaiPhong]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
