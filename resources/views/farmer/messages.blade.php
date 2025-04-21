@extends('layouts.app', ['elementActive' => 'messages'])

@section('content')
<div class="container mt-4">
    <div class="text-center mb-4">
        <img src="{{ asset('static/img/Sassrika-Prject-Logo.png') }}" alt="Logo" class="img-fluid" style="max-width: 200px;">
    </div>
    <h1 class="text-2xl font-semibold text-center mb-4">Received Messages</h1>

    <div class="card">
        <div class="card-body">
            <div class="list-group">
                @for ($i = 1; $i <= 4; $i++)
                    <div class="list-group-item d-flex justify-content-between align-items-center mb-2 rounded-lg shadow-sm">
                        <div class="flex-column">
                            <h5 class="mb-1">Message {{ $i }}</h5>
                            <small class="text-muted">Coconut...</small> 
                        </div>
                        <button class="btn btn-outline-success">View</button>
                    </div>
                @endfor
            </div>
        </div>
    </div>
</div>
@endsection
