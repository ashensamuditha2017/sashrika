@extends('layouts.app', ['elementActive' => 'messages'])

@section('content')
    <div class="container mt-3">
        <div class="text-center mb-4">
            <img src="{{ asset('static/img/Sassrika-Prject-Logo.png') }}" alt="Logo" class="img-fluid" style="max-width: 200px;">
            {{-- <div class="bg-success text-white p-2 rounded mt-3">Dashboard</div> --}}
        </div>
        <div class="card">
            <div class="card-header bg-success text-white text-center">
                Damage Report
            </div>
            <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <i class="bi bi-person-circle me-2" style="font-size: 1.5rem;"></i>
                            <div>Mr. Jayaweera</div>
                            <div class="text-muted small">Report</div>
                        </div>
                        <div>
                            <button class="btn btn-success btn-sm rounded-pill me-2" style="line-height: 1;">
                                <span class="material-icons" style="font-size: 1em; vertical-align: middle;">check</span>
                            </button>
                            <button class="btn btn-danger btn-sm rounded-pill" style="line-height: 1;">
                                <span class="material-icons" style="font-size: 1em; vertical-align: middle;">close</span>
                            </button>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <i class="bi bi-person-circle me-2" style="font-size: 1.5rem;"></i>
                            <div>Mr. Jayaweera</div>
                            <div class="text-muted small">Report</div>
                        </div>
                        <div>
                            <button class="btn btn-success btn-sm rounded-pill me-2" style="line-height: 1;">
                                <span class="material-icons" style="font-size: 1em; vertical-align: middle;">check</span>
                            </button>
                            <button class="btn btn-danger btn-sm rounded-pill" style="line-height: 1;">
                                <span class="material-icons" style="font-size: 1em; vertical-align: middle;">close</span>
                            </button>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <i class="bi bi-person-circle me-2" style="font-size: 1.5rem;"></i>
                            <div>Mr. Jayaweera</div>
                            <div class="text-muted small">Report</div>
                        </div>
                        <div>
                            <button class="btn btn-success btn-sm rounded-pill me-2" style="line-height: 1;">
                                <span class="material-icons" style="font-size: 1em; vertical-align: middle;">check</span>
                            </button>
                            <button class="btn btn-danger btn-sm rounded-pill" style="line-height: 1;">
                                <span class="material-icons" style="font-size: 1em; vertical-align: middle;">close</span>
                            </button>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <i class="bi bi-person-circle me-2" style="font-size: 1.5rem;"></i>
                            <div>Mr. Jayaweera</div>
                            <div class="text-muted small">Report</div>
                        </div>
                        <div>
                            <button class="btn btn-success btn-sm rounded-pill me-2" style="line-height: 1;">
                                <span class="material-icons" style="font-size: 1em; vertical-align: middle;">check</span>
                            </button>
                            <button class="btn btn-danger btn-sm rounded-pill" style="line-height: 1;">
                                <span class="material-icons" style="font-size: 1em; vertical-align: middle;">close</span>
                            </button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

@endsection