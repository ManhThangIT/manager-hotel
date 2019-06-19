<div class="table-responsive">
    <table class="table" id="kieuThues-table">
        <thead>
            <tr>
                <th>Kieuthue Ten</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($kieuThues as $kieuThue)
            <tr>
                <td>{!! $kieuThue->kieuThue_ten !!}</td>
                <td>
                    {!! Form::open(['route' => ['kieuThues.destroy', $kieuThue->kieuThue_ma], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('kieuThues.show', [$kieuThue->kieuThue_ma]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('kieuThues.edit', [$kieuThue->kieuThue_ma]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
