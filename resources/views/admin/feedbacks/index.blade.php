<!--/*
    *----------------------------
    * CREATE: Ngo-Viet-Thanh
    * DATE: 03/08/2016
    * CONTENT: Load list feedback
    *----------------------------
    */-->
@extends('admin.layouts.app')

@section('content')
<section class="content-header">
    <h1 class="pull-left">Feedbacks</h1>
    <h1 class="pull-right">
        <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('admin.feedbacks.create') !!}">Add New</a>
    </h1>
</section>
<div class="content">
    <div class="clearfix"></div>

    @include('flash::message')

    <div class="clearfix"></div>
    <div class="box box-primary">
        <div class="box-body">
            <table class="table table-bordered" id="feedbacks-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name client</th>
                        <th>Company</th>
                        <th>Content</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name client</th>
                        <th>Company</th>
                        <th>Content</th>
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
    $('#feedbacks-table').DataTable({
        "dom": 'lrtip',
        processing: true,
        serverSide: true,
        ajax: {
            url: '{{ route('feedback.get') }}',
            method: 'GET'
        },
        columns: [
            {data: 'id', name: 'id',searchable: false},
            {data: 'name_client', name: 'name_client'},
            {data: 'company', name: 'company'},
            {data: 'content', name: 'content'},
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
            $("tfoot tr th:first-child").text("");
            $("tfoot tr th:last-child").text("");
        }
    });

</script>
@endpush

