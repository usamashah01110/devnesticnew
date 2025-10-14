@extends('admin.main')
@section('title', 'Section Three')


@section('content')
<div class="container">
    <div class="container-fluid">
        <!-- page title contain heading nad button  -->
        <div class="d-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Service Section</h1>
                <a href="{{ route('section.create.view', ['section' => 'service']) }}" class="btn btn-primary">
                    Create Service
                </a>
            </div>
        <!-- page title contain heading nad button  end -->
        <hr>

        <!-- Table Start -->
        <div class="card shadow mb-4">
            <!-- Table Header -->


            <!-- Table Body -->
            <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center">Logo</th>
                            <th class="text-center">Title</th>
                            <th class="text-center">Description</th>
                            <th class="text-center">link</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $records as $sec)

                        <tr>
                            <td class="text-truncate text-center" style="max-width:50px;">
                                <img src=" {{ asset('storage/' . $sec->logo ) }}" class="rounded shadow-sm border"
                                    alt="logo" width="50px" height="50px">
                            </td>
                            <td class="text-truncate text-center" style="max-width:50px;">{{ $sec->title }}</td>
                            <td class="text-truncate text-center" style="max-width:90px;">{{ $sec->description }}</td>
                            <td class="text-truncate text-center" style="max-width:90px;">
                                <a href="{{ $sec->Link }}">{{ $sec->Link }}</a>
                            </td>
                            <td class="text-truncate text-center" style="max-width:90px;">
                                <a href="{{ route('section.delete', ['section' => 'service', 'id' => $sec->id]) }}">
                                    <button class="badge badge-danger">Delete</button>
                                </a>
                                <br>
                                <br>

                                <a href="{{ route('section.edit.view',  ['section' => 'service', 'id' => $sec->id]) }}">
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
    </div>
    <br>
    @endsection
