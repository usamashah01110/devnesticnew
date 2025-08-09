@extends('admin.dashboard')
@section('title', 'Section Two')


@section('content')
<div class="container">
    <div class="container">
        <!-- page title contain heading nad button  -->
        <div class="d-flex align-items-center justify-content-between">
            <h2 class="mb-0">Create Section One</h2>
            <a href="{{ route('section.two.view') }}">
                <button type="button" class="btn btn-primary">
                    Create Section Two
                </button>
            </a>
        </div>
        <!-- page title contain heading nad button  end -->
        <hr>

        <!-- Table Start -->
        <div class="card mt-4 shadow-sm">
            <!-- Table Header -->
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Section One List</h5>
            </div>
            <!-- Table Body -->
            <div class=" container card-body p-0">
                <table class="table table-hover align-middle mb-0">
                    <thead>
                        <tr>
                            <th>Short About Us</th>
                            <th>Heading One</th>
                            <th>Paragraph</th>
                            <th>year</th>
                            <th>CEO Name</th>
                            <th>CEO image</th>
                            <th>Large Image</th>
                            <th>Small Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sectionTwo as $sec)

                        <tr>
                            <td class="text-truncate" style="max-width:50px;">{{ $sec->short_about_us }}</td>
                            <td class="text-truncate" style="max-width:50px;">{{ $sec->heading_one }}</td>
                            <td class="text-truncate" style="max-width:90px;">{{ $sec->paragraph }}</td>
                            <td class="text-truncate" style="max-width:70px;">{{ $sec->experiance }}</td>
                            <td class="text-truncate" style="max-width:90px;">{{ $sec->ceo_founder_name }}</td>
                            <td class="text-truncate" style="max-width:90px;">
                                <img src="{{ asset('storage/'.  $sec->ceo_founder_img  ) }}" alt="CEO image" class="rounded shadow-sm border">
                            </td>
                            <td class="text-truncate" style="max-width:90px;">{{ $sec->large_img }}</td>
                            <td class="text-truncate" style="max-width:90px;">{{ $sec->small_img }}</td>
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