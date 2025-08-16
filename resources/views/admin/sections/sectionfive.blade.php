@extends('admin.dashboard')
@section('title', 'Section Five')
@section('content')
<div class="container">
    <div class="container">
        <!-- Page header Start -->
        <div class="d-flex align-items-center justify-content-between">
            <h2 class="mb-0">Create Section Five</h2>
            <a href="{{ route('section.five.view') }}">
                <button type="button" class="btn btn-primary">
                    Create Section Five
                </button>
            </a>
        </div>
        <!-- Page header end -->
        <hr>
        <!-- Table Start -->
        <div class="card mt-4 shadow-sm">
            <!-- Table Header -->
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Section Five List</h5>
            </div>
            <!-- Table Body -->
            <div class="card-body p-0">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>position</th>
                            <th>image</th>
                            <th>LinkedIn</th>
                            <th>Twitter</th>
                            <th>Instagram</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sectionFive as $sec)

                        <tr>
                            <td>{{ $sec->id }}</td>
                            <td class="text-truncate" style="max-width:120px;">{{ $sec->name }}</td>
                            <td class="text-truncate" style="max-width:180px;">{{ $sec->description }}</td>
                            <td>{{ $sec->role }}</td>
                            <td class="text-truncate" style="max-width:180px;">
                                <img src="{{ asset('storage/'. $sec->image) }}" alt="Image" class="rounded shadow-sm border" width="32" height="32">
                            </td>
                            <td class="text-truncate" style="max-width:90px;">
                                <a href="{{ $sec->linkedin }}">{{ $sec->linkedin }}</a>
                            </td>
                            <td class="text-truncate" style="max-width:90px;">
                                <a href="{{ $sec->twitter }}">{{ $sec->twitter }}</a>
                            </td>
                            <td class="text-truncate" style="max-width:90px;">
                                <a href="{{ $sec->instagram }}">{{ $sec->instagram }}</a>
                            </td>

                            <td class="text-truncate" style="max-width:90px;">
                                <a href="{{ route('section.five.delete', $sec->id) }}">
                                    <button class="badge badge-danger">Delete</button>
                                </a>
                                <br>
                                <br>

                                <a href="{{ route('section.five.edit.view', $sec->id) }}">
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