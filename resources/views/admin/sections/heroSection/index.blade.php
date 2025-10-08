@extends('admin.main')
@section('title', 'Section one')
@section('content')
<!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Hero Section</h1>
                <a href="{{ route('section.create.view', ['section' => 'hero']) }}" class="btn btn-primary">
                    Create
                </a>
            </div>

            <hr>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Heading</th>
                                <th class="text-center">Paragraph</th>
                                <th class="text-center">Button</th>
                                <th class="text-center">Years</th>
                                <th class="text-center">Clients</th>
                                <th class="text-center">Success Rate</th>
                                <th class="text-center">Image</th>
                                <th class="text-center">Actions</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($records as $sec)
                                <tr >
                                    <td class="text-center">{{ $sec->id }}</td>
                                    <td class="text-center" style="max-width:120px;">{{ $sec->heading_one }}</td>
                                    <td class="text-center" style="max-width:180px;">{{ $sec->paragraph }}</td>
                                    <td class="text-center">{{ $sec->btn_one_text }}</td>
                                    <td class="text-center">{{ $sec->year }}</td>
                                    <td class="text-center">{{ $sec->clients }}</td>
                                    <td class="text-center">{{ $sec->success_rate }}%</td>
                                    <td class="text-center" >
                                        <img src="{{ asset('storage/'.$sec->image_path) }}" alt="Image"
                                             class="rounded shadow-sm border" width="50" height="50">
                                    </td>
                                    <td class="text-center" >
                                        <a href="{{ route('section.delete', ['section' => 'hero', 'id' => $sec->id]) }}" class=" btn btn-danger" >
                                            Delete
                                        </a>
                                        <a href="{{ route('section.edit.view', ['section' => 'hero', 'id' => $sec->id]) }}" class=" btn btn-success"> EDIT
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
