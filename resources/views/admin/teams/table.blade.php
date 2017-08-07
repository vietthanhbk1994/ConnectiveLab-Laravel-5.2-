
<table class="table table-bordered" id="teams-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
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
        $('#teams-table').DataTable({
            "dom": 'lrtip',
            processing: true,
            serverSide: true,
            ajax: {
                url: '{!! route('team.getIndex') !!}'
            },
            columns: [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'desciption', name: 'desciption'},
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ],
            initComplete: function () {
                this.api().columns().every(function () {
                    var column = this;
                    var input = "";
                    if (column.index() === 1) {
                        input = document.createElement("input");
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