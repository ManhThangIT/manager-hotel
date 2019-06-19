<div class="table-responsive">
    <table class="table" id="dichVus-table">
        <thead>
            <tr>
                <th>Dichvu Ten</th>
        <th>Dichvu Gia</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($dichVus as $dichVu)
            <tr>
                <td>{!! $dichVu->dichVu_ten !!}</td>
            <td>{!! $dichVu->dichVu_gia !!}</td>
                <td>
                    {!! Form::open(['route' => ['dichVus.destroy', $dichVu->dichVu_ma], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('dichVus.show', [$dichVu->dichVu_ma]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('dichVus.edit', [$dichVu->dichVu_ma]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
