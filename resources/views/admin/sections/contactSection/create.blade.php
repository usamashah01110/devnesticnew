@extends('admin.main')
@section('title' , 'Section Seven')
@section('content')
    <div class="container">
        <div class="container">
            <h1 class="text-center">{{ $title }}</h1>
            <hr/>
            <form action="{{ route('section.store',['section'=>'contact'] ) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="building_number" class="form-label">Building Number</label>
                    <input type="text" name="building_number" id="building_number" class="form-control"
                           value="{{ old('building_number') }}">
                </div>
                <div class="mb-3">
                    <label for="street" class="form-label">Street</label>
                    <input type="text" name="street" id="street" class="form-control" value="{{ old('street') }}">
                </div>
                <div class="mb-3">
                    <label for="city" class="form-label">City</label>
                    <input type="text" name="city" id="city" class="form-control" value="{{ old('city') }}">
                </div>
                <div class="mb-3">
                    <label for="zip_code" class="form-label">Zip Code</label>
                    <input type="text" name="zip_code" id="zip_code" class="form-control" value="{{ old('zip_code') }}">
                </div>
                <div class="mb-3">
                    <label for="contact_one" class="form-label">Contact Number # 1</label>
                    <input type="text" name="contact_one" id="contact_one" class="form-control"
                           value="{{ old('contact_one') }}">
                </div>
                <div class="mb-3">
                    <label for="contact_two" class="form-label">Contact Number # 2</label>
                    <input type="text" name="contact_two" id="contact_two" class="form-control"
                           value="{{ old('contact_two') }}">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" id="email" class="form-control" value="{{ old('email') }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <br><br>
            </form>
        </div>
    </div>
@endsection
