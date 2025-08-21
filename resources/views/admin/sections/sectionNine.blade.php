@extends('admin.dashboard')
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
                <a href="{{ route('developer.education.form.view') }}"><button class="btn text-white bg-black  rounded-xl">Add</button></a>
            </div>
            <!-- Table Body -->
            <div class="card-body p-0">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Role</th>
                            <th>Description</th>
                            <th>Tech1</th>
                            <th>Image</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-truncate" style="max-width:120px;">DEV001</td>
                            <td class="text-truncate" style="max-width:180px;">Sarah Johnson</td>
                            <td class="text-truncate" style="max-width:180px;">Frontend Developer</td>
                            <td class="text-truncate" style="max-width:180px;">Specializes in React and Vue.js applications</td>
                            <td class="text-truncate" style="max-width:180px;">React</td>
                            <td>
                                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=100&q=80" alt="Image" class="rounded shadow-sm border" width="32" height="32">
                            </td>
                            <td class="text-truncate" style="max-width:150px;">
                                <a href="#">
                                    <span class="badge bg-danger">Delete</span>
                                </a>
                                <a href="#">
                                    <span class="badge bg-success">Edit</span>
                                </a>
                                <br>
                                <br>
                                <a href="#"><span class="badge bg-success">Add Portfolio</span></a>
                            </td>
                        </tr>
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
                <a href=""><button class="btn text-white bg-black  rounded-xl">Add</button></a>
            </div>
            <!-- Table Body -->
            <div class="card-body p-0">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Role</th>
                            <th>Description</th>
                            <th>Tech1</th>
                            <th>Image</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-truncate" style="max-width:120px;">DEV001</td>
                            <td class="text-truncate" style="max-width:180px;">Sarah Johnson</td>
                            <td class="text-truncate" style="max-width:180px;">Frontend Developer</td>
                            <td class="text-truncate" style="max-width:180px;">Specializes in React and Vue.js applications</td>
                            <td class="text-truncate" style="max-width:180px;">React</td>
                            <td>
                                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=100&q=80" alt="Image" class="rounded shadow-sm border" width="32" height="32">
                            </td>
                            <td class="text-truncate" style="max-width:150px;">
                                <a href="#">
                                    <span class="badge bg-danger">Delete</span>
                                </a>
                                <a href="#">
                                    <span class="badge bg-success">Edit</span>
                                </a>
                                <br>
                                <br>
                                <a href="#"><span class="badge bg-success">Add Portfolio</span></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <br>
        </div>
        <div class="card mt-4 shadow-sm">
            <!-- Table Header -->
            <div class="card-header bg-primary text-white d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Developer Experiance </h5>
                <a href="{{ route('developer.experiance.form.view') }}"><button class="btn text-white bg-black  rounded-xl">Add</button></a>
            </div>
            <!-- Table Body -->
            <div class="card-body p-0">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Role</th>
                            <th>Description</th>
                            <th>Tech1</th>
                            <th>Image</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-truncate" style="max-width:120px;">DEV001</td>
                            <td class="text-truncate" style="max-width:180px;">Sarah Johnson</td>
                            <td class="text-truncate" style="max-width:180px;">Frontend Developer</td>
                            <td class="text-truncate" style="max-width:180px;">Specializes in React and Vue.js applications</td>
                            <td class="text-truncate" style="max-width:180px;">React</td>
                            <td>
                                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=100&q=80" alt="Image" class="rounded shadow-sm border" width="32" height="32">
                            </td>
                            <td class="text-truncate" style="max-width:150px;">
                                <a href="#">
                                    <span class="badge bg-danger">Delete</span>
                                </a>
                                <a href="#">
                                    <span class="badge bg-success">Edit</span>
                                </a>
                                <br>
                                <br>
                                <a href="#"><span class="badge bg-success">Add Portfolio</span></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <br>
        </div>
        <div class="card mt-4 shadow-sm">
            <!-- Table Header -->
            <div class="card-header bg-primary text-white d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Developer Contact </h5>
                <a href="{{ route('developer.contact.form.view') }}"><button class="btn text-white bg-black  rounded-xl">Add</button></a>
            </div>
            <!-- Table Body -->
            <div class="card-body p-0">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Role</th>
                            <th>Description</th>
                            <th>Tech1</th>
                            <th>Image</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-truncate" style="max-width:120px;">DEV001</td>
                            <td class="text-truncate" style="max-width:180px;">Sarah Johnson</td>
                            <td class="text-truncate" style="max-width:180px;">Frontend Developer</td>
                            <td class="text-truncate" style="max-width:180px;">Specializes in React and Vue.js applications</td>
                            <td class="text-truncate" style="max-width:180px;">React</td>
                            <td>
                                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=100&q=80" alt="Image" class="rounded shadow-sm border" width="32" height="32">
                            </td>
                            <td class="text-truncate" style="max-width:150px;">
                                <a href="#">
                                    <span class="badge bg-danger">Delete</span>
                                </a>
                                <a href="#">
                                    <span class="badge bg-success">Edit</span>
                                </a>
                                <br>
                                <br>
                                <a href="#"><span class="badge bg-success">Add Portfolio</span></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <br>
        </div>
    </div>
</div>
@endsection