@extends('admin.main')
@section('title', 'Section Seven')
@section('content')
    <div class="container">
        <div class="container">
            <!-- Page header Start -->
            <div class="d-flex align-items-center justify-content-between">
                <h2 class="mb-0">Create Section Seven</h2>
                <a href="{{ route('section.create.view', ['section'=>'contact']) }}">
                    <button type="button" class="btn btn-primary">
                        Create Section Seven
                    </button>
                </a>
            </div>
            <!-- Page header end -->
            <hr>
            <!-- Table Start -->
            <div class="card mt-4 shadow-sm">
                <!-- Table Header -->
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Section Seven List</h5>
                </div>
                <!-- Table Body -->
                <div class="card-body p-0">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>building Number</th>
                            <th>street</th>
                            <th>City</th>
                            <th>Zip Code</th>
                            <th>Contact # 1</th>
                            <th>Contact # 2</th>
                            <th>Email</th>
                            <th class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($records as $sec)

                            <tr>
                                <td>1</td>
                                <td class="text-truncate" style="max-width:120px;">{{ $sec->building_number}}</td>
                                <td class="text-truncate" style="max-width:180px;">{{ $sec->street }}</td>
                                <td>{{ $sec->city }}</td>
                                <td>{{ $sec->zip_code }}</td>
                                <td>{{ $sec->contact_one }}</td>
                                <td>{{ $sec->contact_two }}</td>
                                <td>{{ $sec->email }}</td>
                                <td class="text-truncate" style="max-width:90px;">
                                    <a href="{{ route('section.delete', ['section'=> 'contact','id'=>$sec->id]) }}">
                                        <button class="badge badge-danger">Delete</button>
                                    </a>
                                    <br>
                                    <br>

                                    <a href="{{ route('section.edit.view', ['section'=> 'contact','id'=>$sec->id]) }}">
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
