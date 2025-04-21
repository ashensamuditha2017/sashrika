@extends('layouts.app', ['elementActive' => 'report'])

@section('content')
    <div class="container">
        <div class="text-center mb-4">
            <img src="{{ asset('static/img/Sassrika-Prject-Logo.png') }}" alt="Logo" class="img-fluid" style="max-width: 200px;">
        </div>
        <div class="mt-5">
            <div class="card">
                <div class="card-header bg-success text-white">
                    Report a Damage
                </div>
                <div class="card-body">
                    <div class="form-group mb-3">
                        <label for="date" class="form-label">Date</label>
                        <input type="date" class="form-control" id="date" placeholder="DD | MM | YY" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="district" class="form-label">District</label>
                        <select class="form-select" id="district" required>
                            <option selected>Kurunegala</option>
                            <option value="colombo">Colombo</option>
                            <option value="gampaha">Gampaha</option>
                            <option value="...">...</option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="damage_type" class="form-label">Damage Type</label>
                        <select class="form-select" id="damage_type" required>
                            <option selected>Damage Type</option>
                            <option value="Beetle">Beetle</option>
                            <option value="Bacteria">Bacteria</option>
                            <option value="Rain">Rain</option>
                            <option value="Other">Other Damage Type</option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="photo" class="form-label">Upload Photo</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="photo" aria-describedby="photoHelp">
                            <label class="custom-file-label" for="photo">Choose file</label>
                            <small id="photoHelp" class="form-text text-muted">
                                Upload a photo of the damage.
                            </small>
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="notes" class="form-label">Notes</label>
                        <textarea class="form-control" id="notes" rows="4"  required></textarea>
                    </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary w-100">Submit Report</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<script>
    //script to change label
    document.getElementById('photo').addEventListener('change', function (e) {
        var fileName = e.target.files[0].name;
        var label = document.querySelector('.custom-file-label');
        label.textContent = fileName;
    });
</script>