@extends('admin.dashboard')
@section('title', 'Section Eight')
@section('content')


<div class="container">
    <div class="container">
        <h1 class="text-center">{{ $title }}</h1>
        <hr />
        <form action="{{ route('developer.education.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input name="dev_id" id="dev_id" class="form-control" value="{{ $id }}">
            <div class="mb-3">
                <label for="education_degree" class="form-label">Degree Title</label>
                <input type="text" name="education_degree" id="education_degree" class="form-control" value="{{ old('education_degree') }}">
            </div>

            <div class="mb-2">
                <label for="education_institute" class="form-label">Institution Name:</label>
                <input type="text" id="education_institute" name="education_institute" class="form-control" value="{{ old('education_institute') }}">
            </div>

            <div class="mb-2">
                <label for="education_starting_date" class="form-label">starting Date</label>
                <input type="date" id="education_starting_date" name="education_starting_date" class="form-control" value="{{ old('education_starting_date') }}">
            </div>

            <div class="mb-2">
                <label for="education_ending_date">Ending Date</label>
                <input type="date" id="education_ending_date" name="education_ending_date" class="form-control" value="{{ old('education_ending_date') }}">
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>


<!-- Font Awesome for icons -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
@endsection