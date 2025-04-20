@extends('layouts.app', ['elementActive' => 'messages'])

@section('content')
    <div class="container"><div class="container mt-3">
        <div class="text-center mb-4">
            <img src="{{ asset('static/img/Sassrika-Prject-Logo.png') }}" alt="Logo" class="img-fluid" style="max-width: 200px;">
            {{-- <div class="bg-success text-white p-2 rounded mt-3">Dashboard</div> --}}
        </div>
        <h2 class="text-center mb-3">සශ්‍රීක Predictions</h2>
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">Coconut Production Trends</h5>
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-end" style="width: 60%;">
                        <div class="bg-success rounded" style="height: 60px; width: 15%; margin-right: 5%;"></div>
                        <div class="bg-success rounded" style="height: 80px; width: 15%; margin-right: 5%;"></div>
                        <div class="bg-success rounded" style="height: 70px; width: 15%; margin-right: 5%;"></div>
                        <div class="bg-success rounded" style="height: 90px; width: 15%;"></div>
                    </div>
                    <div class="text-center" style="width: 35%;">
                        <img src="{{ asset('static/img/coconut.png') }}" alt="Coconut" class="img-fluid mb-2" style="max-height: 50px;">
                        <div class="fw-bold" style="font-size: 1.5em;">25%</div>
                        <div class="text-muted small">2021 - 2024</div>
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

        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">Beetle outbreak heatmaps</h5>
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-end" style="width: 60%;">
                        <div class="bg-warning rounded" style="height: 70px; width: 15%; margin-right: 5%;"></div>
                        <div class="bg-warning rounded" style="height: 85px; width: 15%; margin-right: 5%;"></div>
                        <div class="bg-warning rounded" style="height: 75px; width: 15%; margin-right: 5%;"></div>
                        <div class="bg-warning rounded" style="height: 80px; width: 15%;"></div>
                    </div>
                    <div class="text-center" style="width: 35%;">
                        <img src="{{ asset('static/img/coconut.png') }}" alt="Coconut" class="img-fluid mb-2" style="max-height: 50px;">
                        <div class="fw-bold" style="font-size: 1.5em;">25%</div>
                        <div class="text-muted small">2021 - 2024</div>
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

        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">Risk assessment</h5>
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-end" style="width: 60%;">
                        <div class="bg-danger rounded" style="height: 80px; width: 15%; margin-right: 5%;"></div>
                        <div class="bg-danger rounded" style="height: 95px; width: 15%; margin-right: 5%;"></div>
                        <div class="bg-danger rounded" style="height: 80px; width: 15%; margin-right: 5%;"></div>
                        <div class="bg-danger rounded" style="height: 85px; width: 15%;"></div>
                    </div>
                    <div class="text-center" style="width: 35%;">
                        <img src="{{ asset('static/img/coconut.png') }}" alt="Coconut" class="img-fluid mb-2" style="max-height: 50px;">
                        <div class="fw-bold" style="font-size: 1.5em;">25%</div>
                        <div class="text-muted small">2021 - 2024</div>
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