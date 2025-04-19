@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="text-center mb-4">
                <img src="{{ asset('static/img/Sassrika-Prject-Logo.png') }}" alt="Logo" class="img-fluid" style="max-width: 200px;">
                <div class="mt-4" style="font-size: 1.2em;">
                    <span class="mx-2 small font-weight-bold">ආයුබෝවන්</span> | <span class="mx-2 small font-weight-bold">Welcome</span> | <span class="mx-2 small font-weight-bold">வரவேற்பு</span>
                </div>
            </div>

            <div class="mb-4 mt-4">
                <input type="text" class="form-control form-control-lg" placeholder="Username">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control form-control-lg" placeholder="Password">
            </div>

            <div class="d-flex justify-content-end mb-4">
                <a href="#" class="text-decoration-none text-dark d-flex align-items-center small">
                    <i class="material-icons" style="font-size: 21px; margin-right: 5px;">help_outline</i> Forgot Password
                </a>
            </div>

            <div class="text-center mt-5">
                <button type="submit" class="btn btn-success btn-lg px-5">Login</button>
            </div>

            <div class="mt-4">
                {{-- <img src="{{ asset('images/your-background.png') }}" alt="Background" class="img-fluid"> --}}
            </div>
        </div>
    </div>
</div>
@endsection