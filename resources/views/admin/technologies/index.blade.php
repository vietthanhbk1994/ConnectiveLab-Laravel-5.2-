@extends('admin.layouts.app')

@section('content')
<section class="content-header">
    <h1 class="pull-left">technologies</h1>
    <h1 class="pull-right">
        <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('admin.technologies.create') !!}">Add New</a>
    </h1>
</section>
<div class="content">
    <div class="clearfix"></div>

    @include('flash::message')

    <div class="clearfix"></div>
    <div class="box box-primary">
        <div class="box-body">
            <table class="table table-bordered" id="technologies-table">
                <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Link</th>
                <th>Action</th>
                </thead>

                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Link</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
@endsection

@section('styles')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
@endsection

@section('scripts')

<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
@endsection

@push('end-scripts')
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#technologies-table').DataTable({
        "dom": 'lrtip',
        processing: true,
        serverSide: true,
        ajax: {
            url: '{!! route('technology.get') !!}',
            method: 'GET'
        },
        columns: [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'link', name: 'link'},
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ],
        initComplete: function () {
            this.api().columns().every(function () {
                var column = this;
                var input = document.createElement("input");
                $(input).appendTo($(column.footer()).empty())
                        .on('change', function () {
                            column.search($(this).val()).draw();
                        });
            });
            $("tfoot tr th:last-child").text("");
           $("tfoot tr th:first-child").text("");
        }
    });

</script>
@endpush