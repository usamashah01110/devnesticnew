@extends('admin.dashboard')
@section('title', 'Section Five')
@section('content')
<div class="container">
    <div class="container">
        <h1 class="text-center">{{ $title }}</h1>
        <hr />
        <form action="{{ route('section.five.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name of Team Member</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
            </div>
            <div class="mb-2">
                <label for="description" class="form-label">Description of Team Member</label>
                <input type="text" id="description" name="description" class="form-control" value="{{ old('description') }}">
            </div>
            <div class="mb-2">
                <label for="role" class="form-label">Role of Team Member</label>
                <input type="text" id="role" name="role" class="form-control" value="{{ old('role') }}">
            </div>
            <div class="mb-2">
                <label for="linkedin">Profile Link of LinkedIn</label>
                <input type="text" id="linkedin" name="linkedin" class="form-control" value="{{ old('linkedin') }}">
            </div>
            <div class="mb-2">
                <label for="twitter">Profile Link of Twitter</label>
                <input type="text" id="twitter" name="twitter" class="form-control" value="{{ old('twitter') }}">
            </div>
            <div class="mb-2">
                <label for="instagram">Profile Link of Instagram</label>
                <input type="text" id="instagram" name="instagram" class="form-control" value="{{ old('instagram') }}">
            </div>
            <div class="mb-2">
                <label for="image">Image of Team Member</label>
                <input type="file" id="image" name="image" class="form-control" value="{{ old('image') }}">
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>

@endsection