<table class="table table-responsive" id="services-table">
    <thead>
        <th>Name</th>
        <th>Content</th>
        <th>Image</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($services as $service)
        <tr>
            <td>{!! $service->name !!}</td>
            <td>{!! $service->content !!}</td>
            <td>{!! $service->image !!}</td>
            <td>
                {!! Form::open(['route' => ['services.destroy', $service->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('services.show', [$service->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('services.edit', [$service->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>