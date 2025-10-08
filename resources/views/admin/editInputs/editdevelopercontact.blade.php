@extends('admin.main')
@section('title', 'Section Eight')
@section('content')

    <div class="container">
        <div class="container">
            <h1 class="text-center">Update Developer Contact</h1>
            <hr/>
            <form action="{{ route('developer.contact.update', $developerContact->id) }}" method="post"
                  enctype="multipart/form-data">
                @csrf
                <input name="dev_id" id="dev_id" class="form-control" value= {{ $developerContact->dev_id }}>
                <div class="mb-3">
                    <label for="developer_email" class="form-label">Email</label>
                    <input type="email" name="developer_email" id="developer_email" class="form-control"
                           value="{{ $developerContact->developer_email }}">
                </div>

                <div class="mb-2">
                    <label for="developer_phone_no" class="form-label">Contact Number</label>
                    <input type="text" id="developer_phone_no" name="developer_phone_no" class="form-control"
                           value="{{ $developerContact->developer_phone_no }}">
                </div>

                <div class="mb-2">
                    <label for="developer_location" class="form-label">Location</label>
                    <input type="text" id="developer_location" name="developer_location" class="form-control"
                           value="{{ $developerContact->developer_location }}">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>


    <!-- Font Awesome for icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
@endsection
