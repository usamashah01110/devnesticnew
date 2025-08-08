@extends('admin.dashboard')
@section('title', 'Section one')
@section('content')
<div class="container">
    <div class="container">
        <h1 class="text-center">{{$title}}</h1>
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <hr/>
        <form action="{{ route('section.three.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Logo -->
            <div class="mb-3">
                <label class="form-label" for="logo">Logo</label>
                <input type="file" class="form-control" name="logo" id="logo">
            </div>
            <!-- Service card title -->
            <div class="mb-3">
                <label class="form-label" for="title">Service title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
            </div>
            <!-- Service Description -->
            <div class="mb-3">
                <label class="form-label" for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}">
            </div>
            <!-- Link -->
            <div class="mb-3">
                <label class="form-label" for="link">Service Link</label>
                <input type="text" id="link" class="form-control" name="link" value="{{ old('link') }}">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Save</button>
        </form>
    </div>
</div>
@endsection