@extends('admin.main')
        @section('title', 'Section one')
        @section('content')
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Sections</h1>
                    <a href="{{ route('section.two.view') }}" class="btn btn-primary">
                        Create Section One
                    </a>
                </div>

                <hr>
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">About Section</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                                @foreach ($sectiontwo as $sec)

                                    <tr>
                                        <td class="text-truncate" style="max-width:50px;">{{ $sec->short_about_us }}</td>
                                        <td class="text-truncate" style="max-width:50px;">{{ $sec->heading_one }}</td>
                                        <td class="text-truncate" style="max-width:90px;">{{ $sec->paragraph }}</td>
                                        <td class="text-truncate" style="max-width:70px;">{{ $sec->experiance }}</td>
                                        <td class="text-truncate" style="max-width:90px;">{{ $sec->ceo_founder_name }}</td>
                                        <td class="text-truncate" style="max-width:90px;">
                                            <img src="{{ asset('storage/'.  $sec->ceo_founder_img  ) }}" alt="CEO image"
                                                 class="rounded shadow-sm border">
                                        </td>
                                        <td class="text-truncate" style="max-width:90px;">
                                            <img src="{{ asset('storage/'.  $sec->large_img  ) }}" alt="Large Image"
                                                 class="rounded shadow-sm border">
                                        </td>
                                        <td class="text-truncate" style="max-width:90px;">
                                            <img src="{{ asset('storage/'.  $sec->small_img  ) }}" alt="Large Image"
                                                 class="rounded shadow-sm border">

                                        </td>
                                        <td class="text-truncate" style="max-width:90px;">
                                            <a href="{{ route('section.two.delete', $sec->id) }}">
                                                <button class="badge badge-danger">Delete</button>
                                            </a>
                                            <br>
                                            <br>

                                            <a href="{{ route('section.two.edit.view', $sec->id) }}">
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
@endsection

