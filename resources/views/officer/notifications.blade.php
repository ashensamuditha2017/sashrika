@extends('layouts.app', ['elementActive' => 'notifications'])

@section('content')
<div class="container mt-3">
    <div class="text-center mb-4">
        <img src="{{ asset('static/img/Sassrika-Prject-Logo.png') }}" alt="Logo" class="img-fluid" style="max-width: 200px;">
        {{-- <div class="bg-success text-white p-2 rounded mt-3">Dashboard</div> --}}
    </div>
    <div class="card">
        <div class="card-header bg-success text-white text-center">
            Send Alerts to Farmers
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label for="selectFarmers" class="form-label">Select Farmers</label>
                <select class="form-select" id="selectFarmers">
                    <option selected>Select Farmers</option>
                    <option value="farmer1">Farmer 1</option>
                    <option value="farmer2">Farmer 2</option>
                    <option value="farmer3">Farmer 3</option>
                    <option value="...">...</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="district" class="form-label">District</label>
                <select class="form-select" id="district">
                    <option selected disabled>Select Option</option>
                    <option value="kurunegala">Kurunegala</option>
                    <option value="colombo">Colombo</option>
                    <option value="gampaha">Gampaha</option>
                    <option value="...">...</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="message" class="form-label">Write message</label>
                <textarea class="form-control" id="message" rows="5"></textarea>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-success">Send</button>
            </div>
        </div>
    </div>
</div>
@endsection