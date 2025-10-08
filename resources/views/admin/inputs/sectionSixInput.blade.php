@extends('admin.main')
@section('title', 'Section Six')
@section('content')
    <div class="container">
        <div class="container">
            <h1 class="text-center">{{ $title }}</h1>
            <form action="{{route('section.six.store')}}" method="post">
                @csrf
                <div class="mb-2">
                    <label for="question" class="form-label">Question</label>
                    <input type="text" name="question" id="question" class="form-control" {{ old('question') }}>
                </div>
                <div class="form-group mb-3">
                    <label for="answer">Answer</label>
                    <textarea class="form-control" name="answer" id="answer"
                              class="form-control">{{ old('answer') }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>

            </form>
        </div>
    </div>
    <br><br>
@endsection
