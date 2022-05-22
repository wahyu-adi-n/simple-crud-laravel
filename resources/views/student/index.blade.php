@extends('layout.app')
@section('content')
  @if (session('success'))
    <p class="alert alert-success">{{ session('success') }}</p>
  @endif
  <div class="row">
    <div class="col">
      <form class="row row-cols-auto g-1">
        <div class="col">
          <input type="text" name='q' class="form-control" placeholder="Search here...">
        </div>
        <div class="col">
          <button class="btn btn-success">Search</button>
        </div>
      </form>
    </div>
    <div class="col">
      <a href="{{ route('students.create') }}" class="btn btn-primary">Add Student</a>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col-md-12">
      <table class="table table-striped table-responsive">
        <thead>
          <th>#</th>
          <th>Student ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Contact</th>
          <th>Address</th>
          <th>Action</th>
        </thead>
        <?php $no = 1; ?>
        @foreach ($students as $student)
          <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $student->student_id }}</td>
            <td>{{ $student->student_name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->contact }}</td>
            <td>{{ $student->address }}</td>
            <td>
              <a href="{{ route('students.edit', $student) }}" class="btn btn-sm btn-warning">Edit</a>
              <form action="{{ route('students.destroy', $student) }}" method="POST"
                onsubmit="return confirm('Are you sure to delete it?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
              </form>
            </td>
          </tr>
        @endforeach
      </table>
    </div>
  </div>
@endsection
