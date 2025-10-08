@extends('admin.main')
@section('title', 'Section Nine')
@section('content')
    <div class="container">
        <div class="container">
            <!-- Page header Start -->
            <div class="d-flex align-items-center justify-content-between ">
                <h2 class="mb-0 text-center">Create Section Eight</h2>

            </div>
            <!-- Page header end -->
            <hr>
            <!-- Table Start -->
            <div class="card mt-4 shadow-sm">
                <!-- Table Header -->
                <div class="card-header bg-primary text-white d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Developer Education </h5>
                    <a href="{{ route('developer.education.form.view', $id) }}">
                        <button class="btn text-white bg-black  rounded-xl">Add</button>
                    </a>
                </div>
                <!-- Table Body -->
                <div class="card-body p-0">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-light">
                        <tr>
                            <th>Developer ID</th>
                            <th>Degree Title</th>
                            <th>Institute</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($developerEducation as $sec)
                            <tr>
                                <td class="text-truncate" style="max-width:120px;">{{ $sec->dev_id }}</td>
                                <td class="text-truncate" style="max-width:180px;">{{ $sec->education_degree }}</td>
                                <td class="text-truncate" style="max-width:180px;">{{ $sec->education_institute }}</td>
                                <td class="text-truncate"
                                    style="max-width:180px;">{{ $sec->education_starting_date }}</td>
                                <td class="text-truncate"
                                    style="max-width:180px;">{{ $sec->education_ending_date }}</td>

                                <td class="text-truncate" style="max-width:150px;">
                                    <a href="{{ route('developer.education.delete', $sec->id) }}">
                                        <span class="badge bg-danger">Delete</span>
                                    </a>
                                    <br>
                                    <br>
                                    <a href="{{ route('developer.education.edit.view', $sec->id) }}">
                                        <span class="badge bg-success">Edit</span>
                                    </a>
                                    <br>
                                    <br>
                                </td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                </div>
                <br>
            </div>
            <hr>
            <div class="card mt-4 shadow-sm">
                <!-- Table Header -->
                <div class="card-header bg-primary text-white d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Developer Projects </h5>
                    <a href="{{ route('developer.projects.form.view', $id) }}">
                        <button class="btn text-white bg-black  rounded-xl">Add</button>
                    </a>
                </div>
                <!-- Table Body -->
                <div class="card-body p-0">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-light">
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>tech</th>
                            <th>Image</th>
                            <th class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($developerProject as $pro)
                            <tr>
                                <td class="text-truncate" style="max-width:180px;">{{ $pro->title }}</td>
                                <td class="text-truncate" style="max-width:180px;">{{ $pro->description }}</td>
                                <td class="text-truncate" style="max-width:180px;">{{ $pro->tech }}</td>
                                <td>
                                    <img src="{{ asset('storage/'.$pro->image) }}" alt="Image"
                                         class="rounded shadow-sm border" width="32" height="32">
                                </td>
                                <td class="text-truncate" style="max-width:150px;">
                                    <a href="{{ route('developer.project.delete', $pro->id) }}">
                                        <span class="badge bg-danger">Delete</span>
                                    </a>
                                    <a href="{{ route('developer.project.edit.view', $pro->id) }}">
                                        <span class="badge bg-success">Edit</span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <br>
            </div>
            <div class="card mt-4 shadow-sm">
                <!-- Table Header -->
                <div class="card-header bg-primary text-white d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Developer Experiance </h5>
                    <a href="{{ route('developer.experiance.form.view', $id) }}">
                        <button class="btn text-white bg-black  rounded-xl">Add</button>
                    </a>
                </div>
                <!-- Table Body -->
                <div class="card-body p-0">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-light">
                        <tr>
                            <th>Title</th>
                            <th>Company</th>
                            <th>Starting Date</th>
                            <th>Ending Date</th>
                            <th>Description</th>
                            <th class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($developerExperiance as $exp)
                            <tr>
                                <td class="text-truncate" style="max-width:120px;">{{ $exp->experiance_degree }}</td>
                                <td class="text-truncate" style="max-width:180px;">{{ $exp->experiance_institute }}</td>
                                <td class="text-truncate"
                                    style="max-width:180px;">{{ $exp->experiance_starting_date }}</td>
                                <td class="text-truncate"
                                    style="max-width:180px;">{{ $exp->experiance_ending_date }}</td>
                                <td class="text-truncate"
                                    style="max-width:180px;">{{ $exp->experiance_description }}</td>

                                <td class="text-truncate" style="max-width:150px;">
                                    <a href="{{ route('developer.experiance.delete', $exp->id) }}">
                                        <span class="badge bg-danger">Delete</span>
                                    </a>
                                    <a href="{{ route('developer.experiance.edit.view', $exp->id) }}">
                                        <span class="badge bg-success">Edit</span>
                                    </a>
                                    <br>
                                    <br>
                                    <a href="#"><span class="badge bg-success">Add Portfolio</span></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <br>
            </div>
            <div class="card mt-4 shadow-sm">
                <!-- Table Header -->
                <div class="card-header bg-primary text-white d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Developer Contact </h5>
                    <a href="{{ route('developer.contact.form.view', $id) }}">
                        <button class="btn text-white bg-black  rounded-xl">Add</button>
                    </a>
                </div>
                <!-- Table Body -->
                <div class="card-body p-0">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-light">
                        <tr>
                            <th>Email</th>
                            <th>Phone #</th>
                            <th>Address</th>

                            <th class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($developerContact as $contact)
                            <tr>
                                <td class="text-truncate" style="max-width:120px;">{{ $contact->developer_email }}</td>
                                <td class="text-truncate"
                                    style="max-width:180px;">{{ $contact->developer_phone_no }}</td>
                                <td class="text-truncate"
                                    style="max-width:180px;">{{ $contact->developer_location }}</td>
                                <td class="text-truncate" style="max-width:150px;">
                                    <a href="{{ route('developer.contact.delete', $contact->id) }}">
                                        <span class="badge bg-danger">Delete</span>
                                    </a>
                                    <a href="{{ route('developer.contact.edit.view', $contact->id) }}">
                                        <span class="badge bg-success">Edit</span>
                                    </a>
                                    <br>
                                    <br>
                                    <a href="#"><span class="badge bg-success">Add Portfolio</span></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <br>
            </div>
        </div>
    </div>
@endsection
