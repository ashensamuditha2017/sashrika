@extends('layouts.app')

@section('content')
<div class="container d-flex flex-column align-items-center justify-content-center vh-100">
    <img src="{{ asset('static/img/Sassrika-Prject-Logo.png') }}" alt="Sashrika Logo" class="img-fluid mb-4" style="max-width: 200px;">
    <p class="text-center mb-4" style="font-size: 1.2em;">
        ආයුබෝවන් | Welcome | வரவற்ப்பு
    </p>
    <div class="d-grid gap-3" style="width: 80%; max-width: 300px;">
        <a href="{{ route('register') }}" class="btn btn-success btn-lg rounded-pill">Register</a>
        <a href="{{ route('login') }}" class="btn btn-success btn-lg rounded-pill">Sign In</a>
    </div>
    <div class="mt-5" style="width: 100%; position: absolute; bottom: 0; left: 0; height: 70px;">
        <img src="{{ asset('static/img/landscape-bottom.png') }}" alt="Landscape" class="img-fluid w-100">
    </div>
</div>
@endsection