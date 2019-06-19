<div class="table-responsive">
    <table class="table" id="tangs-table">
        <thead>
            <tr>
                <th>Tang Ten</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tangs as $tang)
            <tr>
                <td>{!! $tang->tang_ten !!}</td>
                <td>
                    {!! Form::open(['route' => ['tangs.destroy', $tang->tang_ma], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('tangs.show', [$tang->tang_ma]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('tangs.edit', [$tang->tang_ma]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
