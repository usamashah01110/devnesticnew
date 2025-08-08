@extends('admin.dashboard')
@section('title', 'Section four')
@section('content')
<div class="container">
    <div class="container">
        <!-- Page header Start -->
        <div class="d-flex align-items-center justify-content-between">
            <h2 class="mb-0">Create Section Four</h2>
            <a href="{{ route('section.four.view') }}">
                <button type="button" class="btn btn-primary">
                    Create Section Four
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
                            <th>Status</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                            <td>1</td>
                            <td class="text-truncate" style="max-width:120px;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto quia doloremque velit, cum dolorem corrupti eius saepe debitis laborum, culpa excepturi temporibus nulla nam obcaecati nihil ducimus sed rem. Sed officia accusamus veritatis eveniet enim. Iusto temporibus distinctio ex debitis cumque pariatur magni veniam sequi sapiente, iure soluta, culpa autem similique ipsum ipsa esse hic quaerat odio. Dolores laborum quidem consequuntur ipsa repudiandae quaerat libero beatae et velit? Totam nemo commodi non! Necessitatibus veritatis nobis quia vero suscipit magnam enim placeat eligendi dicta dignissimos id saepe voluptate nihil ipsum, eum impedit aut nam repellendus libero similique earum ea. Ab, quos?</td>
                            <td class="text-truncate" style="max-width:180px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
                            <td>Explore now</td>

                            <td>
                                <img src="{{ asset('storage\section_ones\QQegRnELJlb9GC7q8qnLWi2kttoJ4NdJgUWt8AHf.jpg') }}" alt="Image" class="rounded shadow-sm border" width="32" height="32">
                            </td>
                                <button class="badge badge-success">Active</button>
                            <td class="text-truncate" style="max-width:90px;">
                                <a href="">
                                    <button class="badge badge-danger">Delete</button>
                                </a>
                                <br>
                                    <button class="badge badge-success">Edit</button>
                    </tbody>
                </table>
    </div>
    <br>
    @endsection