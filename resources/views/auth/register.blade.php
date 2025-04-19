@extends('layouts.app')

<style>
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f8f9fa;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding-top: 50px;
        min-height: 100vh;
        box-sizing: border-box;
    }

    .registration-container {
        background-color: #fff;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 2000px;
    }

    .logo-container {
        text-align: center;
        margin-bottom: 20px;
    }

    .logo-container img {
        max-width: 150px;
        height: auto;
    }

    .form-title {
        background-color: #2b8a3e;
        color: white;
        padding: 12px 25px;
        border-radius: 25px;
        font-size: 1.1rem;
        text-align: center;
        margin-bottom: 25px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-label {
        font-weight: 500;
        color: #495057;
        margin-bottom: 5px;
        display: block;
    }

    .form-control {
        border: 1px solid #ced4da;
        border-radius: 10px;
        padding: 12px 15px;
        font-size: 1rem;
        width: 100%;
        box-sizing: border-box;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .form-control:focus {
        border-color: #2b8a3e;
        box-shadow: 0 0 0 0.2rem rgba(43, 138, 62, 0.25);
    }

    .form-select {
        border: 1px solid #ced4da;
        border-radius: 10px;
        padding: 12px 15px;
        font-size: 1rem;
        width: 100%;
        box-sizing: border-box;
        appearance: none;
        background-image: url('data:image/svg+xml;utf8,<svg fill="%23343a40" viewBox="0 0 4 5"><path fill-rule="evenodd" d="M2 0L0 2h4L2 0z"/></svg>');
        background-repeat: no-repeat;
        background-position: right 15px center;
        background-size: 0.65em auto;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .form-select:focus {
        border-color: #2b8a3e;
        box-shadow: 0 0 0 0.2rem rgba(43, 138, 62, 0.25);
    }

    .password-input-group {
        position: relative;
    }

    .password-toggle {
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
        color: #6c757d;
    }

    .btn-register {
        background-color: #2b8a3e; /* This sets the background color to green */
        color: white; /* This sets the text color to white for better contrast */
        border: 5px solid #2b8a3e; /* This sets the border color to green */
        border-radius: 10px;
        padding: 12px 20px;
        font-size: 1rem;
        cursor: pointer;
        width: 100%;
        transition: background-color 0.15s ease-in-out;
    }

    /* .btn-register:hover {
        background-color: #1e602b;
    } */
</style>

@section('content')
<div class="registration-container">
    <div class="logo-container">
        <img src="{{ asset('static/img/Sassrika-Prject-Logo.png') }}" alt="Logo" class="img-fluid">
    </div>
    <h2 class="form-title">Registration Form</h2>
    <form>
        <div class="form-group">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your name">
        </div>
        <div class="form-group">
            <label for="district" class="form-label">Distrcit</label>
            <select class="form-select" id="district">
                <option selected>Kurunegala</option>
                <option value="colombo">Colombo</option>
                <option value="galle">Galle</option>
            </select>
        </div>
        <div class="form-group">
            <label for="phone" class="form-label">Mobile Number</label>
            <input type="phone" class="form-control" id=phone" placeholder="Enter your mobile number">
        </div>
        <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email">
        </div>
        <div class="form-group">
            <label for="district" class="form-label">District</label>
            <input type="text" class="form-control" id="district" placeholder="Enter your district">
        </div>
        <div class="form-group">
            <label for="town" class="form-label">Town</label>
            <input type="text" class="form-control" id="town" placeholder="Enter your town">
        </div>
        <div class="form-group">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" placeholder="Enter your full address">
        </div>
        <div class="form-group password-input-group">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password">
            {{-- <span class="password-toggle" id="togglePassword">
                <i class="material-icons-outlined">visibility_off</i>
            </span> --}}
        </div>
        <div class="form-group password-input-group">
            <label for="retypePassword" class="form-label">Retype Password</label>
            <input type="password" class="form-control" id="retypePassword">
            {{-- <span class="password-toggle" id="toggleRetypePassword">
                <i class="material-icons-outlined">visibility_off</i>
            </span> --}}
        </div>
        <button type="submit" class="btn btn-success" style="width: 100%">Register</button>
    </form>
</div>
@endsection