<div class="table-responsive">
    <table class="table" id="congViecs-table">
        <thead>
            <tr>
                <th>Congviec Ten</th>
        <th>Congviec Luong</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($congViecs as $congViec)
            <tr>
                <td>{!! $congViec->congViec_ten !!}</td>
            <td>{!! $congViec->congViec_luong !!}</td>
                <td>
                    {!! Form::open(['route' => ['congViecs.destroy', $congViec->congViec_ma], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('congViecs.show', [$congViec->congViec_ma]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('congViecs.edit', [$congViec->congViec_ma]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
