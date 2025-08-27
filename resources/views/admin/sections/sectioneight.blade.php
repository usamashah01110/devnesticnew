@extends('admin.dashboard')
@section('title', 'Section Eight')
@section('content')
<div class="container">
    <div class="container">
        <!-- Page header Start -->
        <div class="d-flex align-items-center justify-content-between">
            <h2 class="mb-0">Create Section Eight</h2>
            <a href="{{ route('section.eight.view') }}">
                <button type="button" class="btn btn-primary">
                    Create Section Eight
                </button>
            </a>
        </div>
        <!-- Page header end -->
        <hr>
        <!-- Table Start -->
        <div class="card mt-4 shadow-sm">
            <!-- Table Header -->
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Section Eight List (Developers)</h5>
            </div>
            <!-- Table Body -->
            <div class="card-body p-0">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Role</th>
                            <th>Description</th>
                            <th>Tech1</th>
                            <th>Image</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sectionEight as $sec)
                        <tr>
                            <td class="text-truncate" style="max-width:120px;">{{ $sec->developer_id }}</td>
                            <td class="text-truncate" style="max-width:180px;">{{ $sec->name }}</td>
                            <td class="text-truncate" style="max-width:180px;">{{ $sec->role }}</td>
                            <td class="text-truncate" style="max-width:180px;">{{ $sec->description }}</td>
                            <td class="text-truncate" style="max-width:180px;">{{ $sec->tech1 }}</td>
                            <td>
                                <img src="{{ asset('storage/'. $sec->image) }}" alt="Image" class="rounded shadow-sm border" width="32" height="32">
                            </td>
                            <td class="text-truncate" style="max-width:150px;">
                                <a href="{{ route('section.eight.delete', $sec->id) }}">
                                    <button class="badge badge-danger">Delete</button>
                                </a>
                                <a href="{{ route('section.eight.edit.view', $sec->id) }}">
                                    <button class="badge badge-success">Edit</button>
                                </a>
                                <br>
                                <br>
                                <a href="{{ route('section.nine',$sec->id) }}"><button class="badge badge-success">Add Portfolio</button></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <br>
        </div>
    </div>
</div>
@endsection
