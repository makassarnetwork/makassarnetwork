@extends('layouts.back')
@section('title')
<title>Hosting | MakassarNetwork</title>
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
        <div class="panel-heading"><a href="{{ url('hosting/create') }}"><button type="button" class="btn btn-success">Add New</button></a></div>
            <div class="panel-body">
                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="basic-datatable">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Monthly</th>
                            <th>Semi-Annually</th>
                            <th>Annually</th>
                            <th>Space</th>
                            <th>Bandwith</th>
                            <th>Addon Domain</th>
                            <th>Action</th>
                         </tr>
                    </thead>
                    <tbody>
                        @foreach ($hosting as $host)
                        <tr class="odd gradeX">
                            <td>{{ $host->name }}</td>
                            <td>{{ $host->monthly }}</td>
                            <td>{{ $host->semi_annually }}</td>
                            <td>{{ $host->annually }}</td>
                            <td>{{ $host->space }}</td>
                            <td>{{ $host->bandwith }}</td>
                            <td>{{ $host->addon_domain }}</td>
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
