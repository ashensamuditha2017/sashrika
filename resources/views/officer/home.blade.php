{{-- @extends('layouts.app') --}}
@extends('layouts.app', ['elementActive' => 'home'])

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="text-center mb-4">
                <img src="{{ asset('static/img/Sassrika-Prject-Logo.png') }}" alt="Logo" class="img-fluid" style="max-width: 200px;">
                <div class="bg-success text-white p-2 rounded mt-3">Dashboard</div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="border rounded p-3">
                        Report Summery
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="border rounded p-3">
                        Report Summery
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="border rounded p-3">
                        Report Summery
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection