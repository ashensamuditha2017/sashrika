@extends('layouts.app', ['elementActive' => 'predictions']) 

@section('content')
<div class="container mt-4">
    <div class="text-center mb-4">
        <img src="{{ asset('static/img/Sassrika-Prject-Logo.png') }}" alt="Logo" class="img-fluid" style="max-width: 200px;">
    </div>
    <h1 class="text-2xl font-semibold text-center mb-4">Predictions</h1>

    <div class="card mb-4">
        <div class="card-body">
            <h3 class="card-title d-flex align-items-center justify-content-between">
                Coconut
            </h3>
            <div class="d-flex align-items-center justify-content-between mb-2">
                <div class="d-flex align-items-end" style="width: 60%">
                    <div class="bg-success rounded" style="height: 60px; width: 20%; margin-right: 5%;"></div>
                    <div class="bg-success rounded" style="height: 80px; width: 20%; margin-right: 5%;"></div>
                    <div class="bg-success rounded" style="height: 70px; width: 20%; margin-right: 5%;"></div>
                    <div class="bg-success rounded" style="height: 90px; width: 20%;"></div>
                </div>
                <div style="width: 35%;" class="text-center">
                    <img src="{{ asset('static/img/coconut.png') }}" alt="Coconut" class="img-fluid mb-2" style="max-height: 50px;">
                    <div class="font-weight-bold" style="font-size: 1.5em;">25%</div>
                    <div class="text-muted small">2021-2024</div>
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

    <div class="card mb-4">
        <div class="card-body d-flex align-items-center">
            <!-- Left side: Circular progress -->
            <div style="position: relative; width: 120px; height: 120px;">
                <svg width="120" height="120">
                    <circle cx="60" cy="60" r="50" stroke="#e6e6e6" stroke-width="15" fill="none"/>
                    <circle cx="60" cy="60" r="50" stroke="#28a745" stroke-width="15" fill="none"
                        stroke-dasharray="314"
                        stroke-dashoffset="78"
                        transform="rotate(-90 60 60)" />
                </svg>
                <img src="{{ asset('static/img/king-coconut.png') }}" alt="King Coconut" style="width: 40px; position: absolute; top: 35px; left: 40px;">
            </div>
    
            <!-- Right side: Text -->
            <div class="ms-3">
                <div style="font-size: 1.5em; font-weight: bold; color: #ff7f00;">King<br>Coconut</div>
                <div style="font-size: 1.5em; font-weight: bold; color: #28a745;">75%</div>
                <div class="text-muted small">2021 - 2024</div>
            </div>
        </div>
    </div>
    

    <div class="card mb-4">
        <div class="card-body d-flex align-items-center">
            <!-- Left: Circular progress bar -->
            <div style="position: relative; width: 120px; height: 120px;">
                <svg width="120" height="120">
                    <circle cx="60" cy="60" r="50" stroke="#e6e6e6" stroke-width="15" fill="none"/>
                    <circle cx="60" cy="60" r="50" stroke="#28a745" stroke-width="15" fill="none"
                            stroke-dasharray="314"
                            stroke-dashoffset="78"
                            transform="rotate(-90 60 60)" />
                </svg>
                <img src="{{ asset('static/img/coconut.png') }}" alt="Coconut" style="width: 40px; position: absolute; top: 35px; left: 40px;">
            </div>
    
            <!-- Right: Text info -->
            <div class="ms-3">
                <div style="font-size: 1.5em; font-weight: bold; color: #28a745;">Coconut</div>
                <div style="font-size: 1.5em; font-weight: bold; color: #28a745;">75%</div>
                <div class="text-muted small">2021 - 2024</div>
            </div>
        </div>
    </div>
    
</div>
@endsection
