@extends('admin.dashboard')
@section('title', 'Section Four')
@section('content')
<div class="container">
    <div class="container">
        <form action="#" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="" aria-describedby="helpId" value="{{ old('name') }}">
            </div>
            <div class="form-group">
                <label for="description">Name</label>
                <input type="text" name="description" id="description" class="form-control" placeholder="" aria-describedby="helpId" value="{{ old('description') }}">
            </div>
            <div class="form-group">
                <label for="image">Project Banner</label>
                <input type="file" class="form-control-file" name="image" id="image" placeholder="" aria-describedby="fileHelpId">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Save</button>
        </form>
    </div>
</div>
@endsection