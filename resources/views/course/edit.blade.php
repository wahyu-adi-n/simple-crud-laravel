@extends('layout.app')
@section('content')
  <div class="row">
    <div class="col">
      @if ($errors->any())
        @foreach ($errors->all() as $err)
          <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
      @endif
      <form action="{{ route('courses.update', $course) }}" class="mb-3" method="post">
        @csrf
        @method('PUT')
        <div class="col">
          <label for="">Course ID</label>
          <input type="text" name="course_id" placeholder="Course ID" required readonly class="form-control"
            value="{{ old('course_id', $course) }}">
          <label for="">Course Name</label>
          <input type="text" name="course_name" placeholder="Course Name" required class="form-control"
            value="{{ old('course_name', $course) }}">
          <label for="">Credits</label>
          <input type="number" name="credits" placeholder="Credits" required min=1 class="form-control"
            value="{{ old('credits', $course) }}">
          <label for="">Type</label>
          <select name="type" class="form-control" required>
            <option value="{{ old('type', $course) }}">{{ old('type', $course) }}</option>
            <option value="Prescribed">Prescribed</option>
            <option value="Elective">Elective</option>
          </select>
        </div>
        <div class="col mt-3">
          <button class="btn btn-primary">Edit Course</button>
          <a href="{{ route('courses.index') }}" class="btn btn-success">Back</a>
        </div>
      </form>
    </div>
  </div>
@endsection
