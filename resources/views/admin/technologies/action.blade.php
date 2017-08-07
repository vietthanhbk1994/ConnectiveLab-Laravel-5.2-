{!! Form::open(['route' => ['admin.technologies.destroy', $technology->id], 'method' => 'delete','style'=>'display: inline-flex;', 'name'=>'delete', 'name'=>'delete']) !!}
<div class='btn-group'>
    <a href="{!! route('admin.technologies.show', [$technology->id]) !!}" class='btn btn-info' title="Show detail"><i class="glyphicon glyphicon-eye-open"></i></a>
    <a href="{!! route('admin.technologies.edit', [$technology->id]) !!}" class='btn btn-warning' title="Edit"><i class="glyphicon glyphicon-edit"></i></a>
    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger','title'=>'Delete']) !!}
</div>
{!! Form::close() !!}