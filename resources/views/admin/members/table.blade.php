<table class="table table-bordered" id="members-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Position</th>
            <th>Team</th>
            <th>Action</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Position</th>
            <th>Team</th>
            <th>Action</th>
        </tr>
    </tfoot>
</table>
@section('styles')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
@endsection

@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
@endsection
<style>
    tfoot input {
        width: 100%;
        padding: 3px;
        box-sizing: border-box;
    }
    tfoot {
        display: table-header-group;
    }
</style>
@push('end-scripts')
<script>
    $(function () {
        $('#members-table').DataTable({
            "dom": 'lrtip',
            processing: true,
            serverSide: true,
            ajax: {
                url: '{!! route('member.getIndex') !!}'
            },
            columns: [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'position', name: 'position'},
                {data: 'team_id', name: 'team_id'},
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ],
            initComplete: function () {
                this.api().columns().every(function () {
                    var column = this;
                    var input = document.createElement("input");
                    if (column.index() === 3) {
                        input = $('{{Form::select("teams", $teams, null)}}');
                    }
                    if (column.index() === 0 ||column.index() === 4 ) {
                        input = "";
                    }
                    $(input).appendTo($(column.footer()).empty())
                            .on('change', function () {
                                column.search($(this).val()).draw();
                            });
                });
            }
        });
    });
</script>
@endpush