@extends('admin.dashboard')
@section('title', 'Section Four')
@section('content')
<div class="container">
    <div class="container">
        <h1 class="text-center">{{ $title }}</h1>
        <hr />
        <form action="{{ route('section.four.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="" aria-describedby="helpId" value="{{ old('name') }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Project Description</label>
                <input type="text" name="description" id="description" class="form-control" placeholder="" aria-describedby="helpId" value="{{ old('description') }}">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Select an option</label>
                <select class="form-control" id="type" name="type">
                    <option selected disabled>-- Choose Project Type --</option>
                    <option value="filter-app">App</option>
                    <option value="filter-product">Product</option>
                    <option value="filter-branding">Branding</option>
                    <option value="filter-books">Books</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Project Banner</label>
                <input type="file" class="form-control" name="image" id="image" placeholder="" aria-describedby="fileHelpId">
            </div>

            <button type="submit" class="btn btn-primary btn-block">Save</button>
            <br>
            <br>
        </form>
    </div>
</div>
@endsection