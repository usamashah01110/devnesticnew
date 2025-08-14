@extends('admin.dashboard')
@section('title', 'Section Six')
@section('content')
<div class="container">
    <div class="container">
        <!-- Page header Start -->
        <div class="d-flex align-items-center justify-content-between">
            <h2 class="mb-0">Create Section Six</h2>
            <a href="{{ route('section.six.view') }}">
                <button type="button" class="btn btn-primary">
                    Create Section Six
                </button>
            </a>
        </div>
        <!-- Page header end -->
        <hr>
        <!-- Table Start -->
        <div class="card mt-4 shadow-sm">
            <!-- Table Header -->
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Section Six List</h5>
            </div>
            <!-- Table Body -->
            <div class="card-body p-0">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Question</th>
                            <th>Answer</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sectionSix as $sec)

                        <tr>
                            <td>1</td>
                            <td class="text-truncate" style="max-width:120px;">{{  $sec->question }}</td>
                            <td class="text-truncate" style="max-width:180px;">{{ $sec->answer }}</td>

                            <td class="text-truncate " style="max-width:90px;">
                                <a href="{{ route('delete.six', $sec->id) }}">
                                    <button class="badge badge-danger">Delete</button>
                                </a>
                                <br>
                                <br>

                                <a href="">
                                    <button class="badge badge-success">Edit</button>
                                </a>
                            </td>
                            @endforeach

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <br>
    @endsection