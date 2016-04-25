@extends('layouts.back')
@section('title')
<title>Domain | MakassarNetwork</title>
@endsection

@section('content')
<div class="warper container-fluid">
    @if (session('success'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{ session('success') }}
        </div>
    @endif
    <div class="panel panel-default">
        <div class="panel-heading"><a href="{{ url('domain/create') }}"><button type="button" class="btn btn-success">Add New</button></a></div>
            <div class="panel-body">
                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="basic-datatable">
                    <thead>
                        <tr>
                            <th>Category</th>
                            <th>Name</th>
                            <th>Registration</th>
                            <th>Renewal</th>
                            <th>Transfer</th>
                            <th>Action</th>
                         </tr>
                    </thead>
                    <tbody>
                        @foreach ($domain as $dom)
                        <tr class="odd gradeX">
                            <td>{{ $dom->category }}</td>
                            <td>{{ $dom->name }}</td>
                            <td>{{ $dom->registration }}</td>
                            <td>{{ $dom->renewal }}</td>
                            <td>{{ $dom->transfer }}</td>
                            <td class="center">
                                <a href=""><button type="button" class="btn btn-warning">Edit</button></a>
                                <a class="btn btn-danger" href="#">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>
</div>
@endsection

@section('plugins')
<!-- Data Table -->
    <script src="{{ asset('asset/js/plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('asset/js/plugins/datatables/DT_bootstrap.js') }}"></script>
    <script src="{{ asset('asset/js/plugins/datatables/jquery.dataTables-conf.js') }}"></script>
@endsection
