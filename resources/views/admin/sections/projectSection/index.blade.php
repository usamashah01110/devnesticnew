@extends('admin.main')
@section('title', 'Section four')
@section('content')
    <div class="container-fluid">

            <!-- Page header Start -->
            <div class="d-flex align-items-center justify-content-between">
                <h2 class="mb-0">Create Project</h2>
                <a href="{{ route('section.create.view', ['section'=> 'project']) }}">
                    <button type="button" class="btn btn-primary">
                        Create Project
                    </button>
                </a>
            </div>
            <!-- Page header end -->
            <hr>
            <!-- Table Start -->
            <div class="card mt-4 shadow-sm">
                <!-- Table Header -->
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Section Four List</h5>
                </div>
                <!-- Table Body -->
                <div class="card-body p-0">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Project Type</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($records as $sec)
                            <tr>
                                <td>{{ $sec->id }}</td>
                                <td class="text-truncate" style="max-width:120px;">{{ $sec->name }}</td>
                                <td class="text-truncate" style="max-width:180px;">{{ $sec->description }}</td>
                                <td>Explore now</td>

                                <td>
                                    <img src="{{ asset('storage/'. $sec->image) }}" alt="Image"
                                         class="rounded shadow-sm border" width="50px" height="50px">
                                </td>
                                <td class="text-truncate text-center">
                                    <a href="{{ route('section.delete',['section'=>'project', 'id'=>$sec->id]) }}"  class="btn btn-danger">
                                        Delete
                                    </a>

                                    <a href="{{ route('section.edit.view', ['section'=>'project', 'id'=>$sec->id]) }}" class="btn btn-success">
                                        Edit
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <br>
            </div>
        </div>

@endsection
