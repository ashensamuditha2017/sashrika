@extends('layouts.dashboard', ['elementActive' => 'allOfficers'])

@section('content')
    <div class="container-fluid">

        <h1 class="h3 mb-2 text-gray-800">All Officers</h1>
        <p class="mb-4">A list of all registered officers in the system.</p>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Officers Data</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>District</th>
                                <th>Division</th>
                                <th>Contact Number</th>
                                <th>ID No</th>
                                </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>District</th>
                                <th>Division</th>
                                <th>Contact Number</th>
                                <th>ID No</th>
                                </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($officers as $officer)
                                <tr>
                                    <td>{{ $officer['name'] }}</td>
                                    <td>{{ $officer['district'] }}</td>
                                    <td>{{ $officer['division'] }}</td>
                                    <td>{{ $officer['contact_number'] }}</td>
                                    <td>{{ $officer['id_no'] }}</td>
                                    </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
