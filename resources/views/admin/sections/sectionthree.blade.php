@extends('admin.dashboard')
@section('title', 'Section Three')


@section('content')
<div class="container">
    <div class="container">
        <!-- page title contain heading nad button  -->
        <div class="d-flex align-items-center justify-content-between">
            <h2 class="mb-0">Create Section Three</h2>
            <a href="{{ route('section.three.view') }}">
                <button type="button" class="btn btn-primary">
                    Create Section Three
                </button>
            </a>
        </div>
        <!-- page title contain heading nad button  end -->
        <hr>

        <!-- Table Start -->
        <div class="card mt-4 shadow-sm">
            <!-- Table Header -->
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Section Three Card List</h5>
            </div>
            <!-- Table Body -->
            <div class=" container card-body p-0">
                <table class="table table-hover align-middle mb-0">
                    <thead>
                        <tr>
                            <th>Logo</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>link</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (  $sectionThree as $sec)


                        <tr>
                            <td class="text-truncate" style="max-width:50px;">
                                <img src=" {{ asset('storage/' . $sec->logo ) }}" class="rounded shadow-sm border" alt="logo">
                            </td>
                            <td class="text-truncate" style="max-width:50px;">{{ $sec->title }}</td>
                            <td class="text-truncate" style="max-width:90px;">{{ $sec->description }}</td>
                            <td class="text-truncate" style="max-width:90px;">
                                <a href="{{ $sec->Link }}">{{ $sec->Link }}</a>
                            </td>
                            <td class="text-truncate" style="max-width:90px;">
                                <a href="">
                                    <button class="badge badge-danger">Delete</button>
                                </a>
                                <br>
                                <br>

                                <a href="">
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