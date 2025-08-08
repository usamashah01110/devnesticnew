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
                            <th>CEO  Name</th>
                            <th>CEO  image</th>
                            <th>Large Image</th>
                            <th>Small Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 1; $i <= 1; $i++)
                            <tr>
                            <td class="text-truncate" style="max-width:50px;">Heading {{ $i }}</td>
                            <td class="text-truncate" style="max-width:50px;">Short about us {{ $i }}</td>
                            <td class="text-truncate" style="max-width:90px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
                            <td class="text-truncate" style="max-width:70px;">2005</td>
                            <td class="text-truncate" style="max-width:90px;">Syed Usama</td>
                            <td class="text-truncate" style="max-width:90px;">
                                <img src="{{ asset('/storage/section_two/Gj2YMK89BZX1Lzluz4FSBm52Xk9vicA8BZAPJIpq.jpg') }}" alt="CEO image" class="rounded shadow-sm border">
                            </td>
                            <td class="text-truncate" style="max-width:90px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
                            <td class="text-truncate" style="max-width:90px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
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
                            @endfor
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <br>
    @endsection
