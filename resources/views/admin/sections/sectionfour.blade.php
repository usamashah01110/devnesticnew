@extends('admin.dashboard')
@section('title', 'Section Four')
@section('content')
<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Model Table</h4>
        </div>
        <div class="card-body">
            <table class="table table-hover table-bordered align-middle">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Model Name</th>
                        <th scope="col">Type</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Status</th>
                        <th scope="col" class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Sample Model</td>
                        <td>Type A</td>
                        <td>2024-06-01</td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-info me-1"><i class="bi bi-eye"></i> View</button>
                            <button class="btn btn-sm btn-warning me-1"><i class="bi bi-pencil"></i> Edit</button>
                            <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Another Model</td>
                        <td>Type B</td>
                        <td>2024-05-28</td>
                        <td><span class="badge bg-secondary">Inactive</span></td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-info me-1"><i class="bi bi-eye"></i> View</button>
                            <button class="btn btn-sm btn-warning me-1"><i class="bi bi-pencil"></i> Edit</button>
                            <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection