@extends('admin.dashboard')
@section('title', 'Section one')
@section('content')
<div class="container">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <h2 class="mb-0">Create Section One</h2>
            <a href=""><button type="button" class="btn btn-primary">Create Section One</button></a>
        </div>
    <hr>
    <div class="card mt-4 shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Section One List</h5>
        </div>
        <div class="card-body p-0">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th style="width: 36px;">#</th>
                        <th style="width: 120px;">Heading</th>
                        <th style="width: 180px;">Paragraph</th>
                        <th style="width: 80px;">Button</th>
                        <th style="width: 55px;">Years</th>
                        <th style="width: 65px;">Clients</th>
                        <th style="width: 80px;">Success</th>
                        <th style="width: 50px;">Image</th>
                        <th class="text-center" style="width: 90px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td class="text-truncate" style="max-width:120px;">Sample Heading</td>
                        <td class="text-truncate" style="max-width:180px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
                        <td><span class="badge bg-info text-light">Explore now </span></td>
                        <td><span class="badge bg-secondary">5</span></td>
                        <td><span class="badge bg-success">120</span></td>
                        <td><span class="badge bg-warning text-dark">98%</span></td>
                        <td>
                            <img src="{{ asset('storage\section_ones\QQegRnELJlb9GC7q8qnLWi2kttoJ4NdJgUWt8AHf.jpg') }}" alt="Image" class="rounded shadow-sm border" width="32" height="32">
                        </td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-outline-warning me-1" title="Edit"><i class="bi bi-pencil">Delete</i></button>
                            <button class="btn btn-sm btn-outline-danger" title="Delete"><i class="bi bi-trash">Edit</i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
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