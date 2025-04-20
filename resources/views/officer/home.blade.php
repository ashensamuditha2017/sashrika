{{-- @extends('layouts.app') --}}
@extends('layouts.app', ['elementActive' => 'home'])

@section('content')
<div class="container mt-4">
    <div class="text-center mb-4">
        <img src="{{ asset('static/img/Sassrika-Prject-Logo.png') }}" alt="Logo" class="img-fluid" style="max-width: 200px;">
        {{-- <div class="bg-success text-white p-2 rounded mt-3">Dashboard</div> --}}
    </div>
    {{-- <h2 class="text-center mb-3">Home</h2> --}}

    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">Report Summary</h5>
            <ul class="list-unstyled">
                <li class="d-flex justify-content-between align-items-center">
                    <div>Damage Report</div>
                    <span class="badge bg-danger rounded-pill">5</span>
                </li>
                <li class="d-flex justify-content-between align-items-center mt-2">
                    <div>Other</div>
                    <span class="badge bg-warning rounded-pill">1</span>
                </li>
            </ul>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">Analytics Report</h5>
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-end" style="width: 60%;">
                    <div class="bg-success rounded" style="height: 60px; width: 20%; margin-right: 5%;"></div>
                    <div class="bg-success rounded" style="height: 80px; width: 20%; margin-right: 5%;"></div>
                    <div class="bg-success rounded" style="height: 70px; width: 20%; margin-right: 5%;"></div>
                    <div class="bg-success rounded" style="height: 90px; width: 20%;"></div>
                </div>
                <div class="text-center" style="width: 35%;">
                    <img src="{{ asset('static/img/coconut.png') }}" alt="Coconut" class="img-fluid mb-2" style="max-height: 50px;">
                    <div class="fw-bold" style="font-size: 1.5em;">25%</div>
                    <div class="text-muted small">Growth</div>
                </div>
            </div>
            <div class="d-flex justify-content-around mt-2" style="width: 60%;">
                <div class="text-center small">2021</div>
                <div class="text-center small">2022</div>
                <div class="text-center small">2023</div>
                <div class="text-center small">2024</div>
            </div>
        </div>
    </div>
</div>
@endsection