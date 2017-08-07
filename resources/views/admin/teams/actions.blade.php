<div class='' style="display: inline-flex;">
    <a href="{{ route('admin.teams.show', [$team->id]) }}" class='btn btn-info' title="Show detail" style="display: inline-flex;"><i class="glyphicon glyphicon-eye-open"></i></a>
    {{ Form::open(['route' => ['admin.teams.destroy', $team->id], 'method' => 'delete','style'=>'display: inline-flex;', 'name'=>'delete']) }}
    <a href="{{ route('admin.teams.edit', [$team->id]) }}" class='btn btn-warning' title="Edit"><i class="glyphicon glyphicon-edit"></i></a>
    {{ Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger','title'=>'Delete']) }}
    {{ Form::close() }}
</div>