@extends('admin.dashboard')
@section('content')
<div class="container">
<div class="container">
    <h2>{{ $title }}</h2>
    <form action="{{ route('section.two.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">short about us</label>
            <input type="text" class="form-control" name="short_about_us" value="{{ old('short_about_us') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Heading One</label>
            <input type="text" class="form-control" name="heading_one" value="{{ old('heading_one') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Paragraph</label>
            <textarea class="form-control" name="paragraph" rows="3">{{ old('paragraph') }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Experiance</label>
            <input type="text" class="form-control" name="experiance" value="{{ old('btn_one_text') }}">
        </div>

        <div class="mb-3">
            <label class="form-label">CEO & Founder</label>
            <input type="text" class="form-control" name="ceo_founder_name" value="{{ old('years') }}">
        </div>

        <div class="mb-3">
            <label class="form-label">SEO & Founder Profile Picture</label>
            <input type="file" class="form-control" name="ceo_founder_img" value="{{ old('clients') }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Large image</label>
            <input type="file" class="form-control" name="large_img" value="{{ old('success_rate') }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Small Image</label>
            <input type="file" class="form-control" name="small_img">
        </div>
        <div class="mb-3">
            <label class="form-label">Contact</label>
            <input type="text" class="form-control" name="contact">
        </div>

        <button type="submit" class="btn btn-primary btn-block">Save</button>

    </form>
</div>
</div>
<br>
@endsection