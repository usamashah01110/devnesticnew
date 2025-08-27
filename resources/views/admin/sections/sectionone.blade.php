@extends('admin.dashboard')
@section('title', 'Section one')
@section('content')
<div class="container">
    <div class="container">
        <!-- Page header Start -->
        <div class="d-flex align-items-center justify-content-between">
            <h2 class="mb-0">Create Section One</h2>
            <a href="{{ route('section.1.view') }}">
                <button type="button" class="btn btn-primary">
                    Create Section One
                </button>
            </a>
        </div>
        <!-- Page header end -->
        <hr>
        <!-- Table Start -->
        <div class="card mt-4 shadow-sm">
            <!-- Table Header -->
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Section One List</h5>
            </div>
            <!-- Table Body -->
            <div class="card-body p-0">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Heading</th>
                            <th>Paragraph</th>
                            <th>Button</th>
                            <th>Years</th>
                            <th>Clients</th>
                            <th>Success Rate</th>
                            <th>Image</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($items as $sec)
                        <tr>
                            <td>{{ $sec->id }}</td>
                            <td class="text-truncate" style="max-width:120px;">{{ $sec->heading_one }}</td>
                            <td class="text-truncate" style="max-width:180px;">{{ $sec->paragraph }}</td>
                            <td>{{ $sec->btn_one_text }}</td>
                            <td>{{ $sec->years }}</td>
                            <td>{{ $sec->clients }}</td>
                            <td>{{ $sec->success_rate }}%</td>
                            <td>
                                <img src="{{ asset('storage/'.$sec->image_path) }}" alt="Image" class="rounded shadow-sm border" width="32" height="32">
                            </td>
                            <td class="text-truncate" style="max-width:90px;">
                                <a href="{{ route('section.one.delete', $sec->id) }}">
                                    <button class="badge badge-danger">Delete</button>
                                </a>
                                <br>
                                <br>

                                <a href="{{ route('section.one.edit.view', $sec->id) }}">
                                    <button class="badge badge-success">Edit</button>
                                </a>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <br>
    @endsection
