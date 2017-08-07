<div class='' style="display: inline-flex">
    <a href="{{ route('admin.services.show', [$service->id]) }}"  style="display: inline-flex" class='btn btn-info' title="Show detail"><i class="glyphicon glyphicon-eye-open"></i></a>
    
    {{ Form::open(['route' => ['admin.services.destroy', $service->id], 'method' => 'delete','style'=>'display: inline-flex;', 'name'=>'delete']) }}
    <a href="{{ route('admin.services.edit', [$service->id]) }}" style="display: inline-flex"  class='btn btn-warning' title="Edit"><i class="glyphicon glyphicon-edit"></i></a>
    {{ Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger','title'=>'Delete']) }}
    {{ Form::close() }}
  
</div>