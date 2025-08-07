@extends('admin.dashboard')
@section('title', 'Section Three')
@section('content')
<table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Value</th>
        </tr>
    </thead>
    <tbody>
        @for ($i = 1; $i <= 5; $i++)
            <tr>
                <td>{{ $i }}</td>
                <td>Name {{ $i }}</td>
                <td>{{ rand(10, 100) }}</td>
            </tr>
        @endfor
    </tbody>
</table>
@endsection
