@extends('layout.app')
@section('content')
  @if (session('success'))
    <p class="alert alert-success">{{ session('success') }}</p>
  @endif
  <div class="row">
    <div class="col">
      <form class="row row-cols-auto g-1">
        <div class="col-md-9">
          <input type="text" name='q' class="form-control" placeholder="Search here...">
        </div>
        <div class="col-md-1">
          <button class="btn btn-success">Search</button>
        </div>
        <div class="col-md-2">
          <a href="{{ route('courses.create') }}" class="btn btn-primary">Add Courses</a>
        </div>
      </form>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col-md-12">
      <table class="table table-striped table-responsive">
        <thead>
          <th>#</th>
          <th>Course ID</th>
          <th>Course Name</th>
          <th>Credits</th>
          <th>Type</th>
          <th>Action</th>
        </thead>
        <?php $no = 1; ?>
        @foreach ($courses as $course)
          <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $course->course_id }}</td>
            <td>{{ $course->course_name }}</td>
            <td>{{ $course->credits }}</td>
            <td>{{ $course->type }}</td>
            <td>
              <a href="{{ route('courses.edit', $course) }}" class="btn btn-warning btn-sm">Edit</a>
              <form method="POST" action="{{ route('courses.destroy', $course) }}"
                onsubmit="return confirm('Are you sure to delete ?')">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm">Delete</button>
              </form>
            </td>
          </tr>
        @endforeach
      </table>
    </div>
  </div>
@endsection
