@extends('admin.dashboard')
@section('title', 'Section Eight')
@section('content')


<div class="container">
    <div class="container">
        <h1 class="text-center">{{ $title }}</h1>
        <hr />
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="experiance_degree" class="form-label">Experiance Title</label>
                <input type="text" name="experiance_degree" id="experiance_degree" class="form-control" value="{{ old('experiance_degree') }}">
            </div>

            <div class="mb-2">
                <label for="experiance_institute" class="form-label">Company</label>
                <input type="text" id="experiance_institute" name="experiance_institute" class="form-control" value="{{ old('experiance_institute') }}">
            </div>

            <div class="mb-2">
                <label for="experiance_starting_date" class="form-label">starting Date</label>
                <input type="date" id="experiance_starting_date" name="experiance_starting_date" class="form-control" value="{{ old('experiance_starting_date') }}">
            </div>

            <div class="mb-2">
                <label for="experiance_ending_date">Ending Date</label>
                <input type="date" id="experiance_ending_date" name="experiance_ending_date" class="form-control" value="{{ old('experiance_ending_date') }}">
            </div>
            <div class="mb-2">
                <label for="experiance_description">Description</label>
                <input type="text" id="experiance_description" name="experiance_description" class="form-control" value="{{ old('experiance_description') }}">
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>


<!-- Font Awesome for icons -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
@endsection