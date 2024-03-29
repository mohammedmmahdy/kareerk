<div class="table-responsive-sm">
    <table class="table table-striped" id="careers-table">
        <thead>
            <tr>
                <th>@lang('models/careers.fields.id')</th>
                <th>@lang('models/careers.fields.title')</th>
                <th>@lang('models/careers.fields.description')</th>
                <th>@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
            @foreach($careers as $career)
            <tr>
                <td>{{$career->id}}</td>
                <td>{{$career->translateOrNew('en')->title}}</td>
                <td>{!! Str::limit($career->translateOrNew('en')->description, 50) !!}</td>
                <td>
                    {!! Form::open(['route' => ['adminPanel.careers.destroy', $career->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('adminPanel.careers.show', [$career->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('adminPanel.careers.edit', [$career->id]) . '?languages=en'}}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
