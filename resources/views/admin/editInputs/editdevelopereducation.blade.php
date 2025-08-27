@extends('admin.dashboard')
@section('title', 'Edit Developer Education');
@section('content')
<div class="container">
    <div class="container">
        <h1 class="text-center">Update Developer Education</h1>
        <hr />
        <form action="{{ route('developer.education.update', $developerEducation->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <input name="dev_id" id="dev_id" class="form-control" value="{{ $developerEducation->dev_id }}">
            <div class="mb-3">
                <label for="education_degree" class="form-label">Degree Title</label>
                <input type="text" name="education_degree" id="education_degree" class="form-control" value="{{ $developerEducation->education_degree }}">
            </div>

            <div class="mb-2">
                <label for="education_institute" class="form-label">Institution Name:</label>
                <input type="text" id="education_institute" name="education_institute" class="form-control" value="{{ $developerEducation->education_institute }}">
            </div>

            <div class="mb-2">
                <label for="education_starting_date" class="form-label">starting Date</label>
                <input type="date" id="education_starting_date" name="education_starting_date" class="form-control" value="{{ $developerEducation->education_starting_date }}">
            </div>

            <div class="mb-2">
                <label for="education_ending_date">Ending Date</label>
                <input type="date" id="education_ending_date" name="education_ending_date" class="form-control" value="{{ $developerEducation->education_ending_date }}">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection