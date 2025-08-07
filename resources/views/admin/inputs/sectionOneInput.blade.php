@extends('admin.dashboard')
@section('title', 'Section one')
@section('content')
<div class="container">
    <div class="container">
        <form action="{{ route('section.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Heading One</label>
                <input type="text" class="form-control" name="heading_one" value="{{ old('heading_one') }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Paragraph</label>
                <textarea class="form-control" name="paragraph" rows="3">{{ old('paragraph') }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Button Text</label>
                <input type="text" class="form-control" name="btn_one_text" value="{{ old('btn_one_text') }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Years</label>
                <input type="text" class="form-control" name="years" value="{{ old('years') }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Clients</label>
                <input type="text" class="form-control" name="clients" value="{{ old('clients') }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Success Rate</label>
                <input type="text" class="form-control" name="success_rate" value="{{ old('success_rate') }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Image</label>
                <input type="file" class="form-control" name="image_path">
            </div>

            <button type="submit" class="btn btn-primary btn-block">Save</button>

        </form>
    </div>
    <br>
    @endsection