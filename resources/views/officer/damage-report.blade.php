@extends('layouts.app', ['elementActive' => 'report'])

@section('content')
    <div class="col-md 12">
        <div class="text-center mb-4">
            <img src="{{ asset('static/img/Sassrika-Prject-Logo.png') }}" alt="Logo" class="img-fluid" style="max-width: 200px;">
            {{-- <div class="bg-success text-white p-2 rounded mt-3">Dashboard</div> --}}
        </div>
        <div class="container mt-5">
            <div class="card">
                <div class="card-header bg-success text-white">
                    Damage Report
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="date" class="form-label">Date</label>
                        <input type="date" class="form-control" id="date" placeholder="DD | MM | YY">
                    </div>

                    <div class="mb-3">
                        <label for="district" class="form-label">District</label>
                        <select class="form-select" id="district">
                            <option selected>Kurunegala</option>
                            <option value="colombo">Colombo</option>
                            <option value="gampaha">Gampaha</option>
                            <option value="...">...</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="damage_type" class="form-label">Damage Type</label>
                        <select class="form-select" id="damage_type">
                            <option selected>Damage Type</option>
                            <option value="flood">Flood</option>
                            <option value="drought">Drought</option>
                            <option value="pest_infestation">Pest Infestation</option>
                            <option value="...">...</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="notes" class="form-label">Notes</label>
                        <textarea class="form-control" id="notes" rows="4"></textarea>
                    </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary" style="width: 100%">Submit Report</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
