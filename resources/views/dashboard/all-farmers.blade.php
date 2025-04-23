@extends('layouts.dashboard', ['elementActive' => 'allFarmers'])

@section('content')
    <div class="container-fluid">

        <h1 class="h3 mb-2 text-gray-800">All Farmers</h1>
        <p class="mb-4">A list of all registered farmers in the system.</p>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Farmers Data</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Mobile Number</th>
                                <th>District</th>
                                <th>Cultivation Size</th>
                                <th>Village</th>
                                <th>Reported Damages</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Mobile Number</th>
                                <th>District</th>
                                <th>Cultivation Size</th>
                                <th>Village</th>
                                <th>Reported Damages</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($farmers as $farmer)
                                <tr>
                                    <td>{{ $farmer['name'] }}</td>
                                    <td>{{ $farmer['mobile_number'] }}</td>
                                    <td>{{ $farmer['district'] }}</td>
                                    <td>{{ $farmer['cultivation_size'] }}</td>
                                    <td>{{ $farmer['village'] }}</td>
                                    <td>{{ $farmer['reported_damages'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
