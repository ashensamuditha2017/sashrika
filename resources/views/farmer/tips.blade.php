@extends('layouts.app', ['elementActive' => 'tips'])

@section('content')
<div class="container mt-4">
    <div class="text-center mb-4">
        <img src="{{ asset('static/img/Sassrika-Prject-Logo.png') }}" alt="Logo" class="img-fluid" style="max-width: 200px;">
    </div>
    <h1 class="text-2xl font-semibold text-center mb-4">General Tips for Farmers</h1>

    <div class="card">
        <div class="card-body">
            <ul class="list-group">
                <li class="list-group-item mb-3 rounded-lg shadow-sm">
                    <h5 class="mb-2">Tip 1: Soil Health</h5>
                    <p class="mb-0">Maintain healthy soil by testing and adding organic matter.</p>
                </li>
                <li class="list-group-item mb-3 rounded-lg shadow-sm">
                    <h5 class="mb-2">Tip 2: Water Management</h5>
                    <p class="mb-0">Optimize irrigation to conserve water and improve crop yields.</p>
                </li>
                <li class="list-group-item mb-3 rounded-lg shadow-sm">
                    <h5 class="mb-2">Tip 3: Pest Control</h5>
                    <p class="mb-0">Use integrated pest management techniques to minimize chemical use.</p>
                </li>
                 <li class="list-group-item mb-3 rounded-lg shadow-sm">
                    <h5 class="mb-2">Tip 4: Crop Diversification</h5>
                    <p class="mb-0">Diversify crops to improve soil health and reduce pest problems.</p>
                </li>
                <li class="list-group-item mb-3 rounded-lg shadow-sm">
                    <h5 class="mb-2">Tip 5: Stay Updated</h5>
                    <p class="mb-0">Keep learning about new farming techniques and technologies.</p>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
