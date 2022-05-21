@extends('app')
@section('content')
  <div class="row">
    <div class="col-md-4">
      <a href="/students/create" class="btn btn-primary">Add Student</a>
    </div>
    <div class="col-md-8">

    </div>
  </div>

  <div class="row">
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
              <a href="/students/update" class="btn btn-warning">Edit</a> | <a href="/students/delete"
                class="btn btn-danger">Delete</a>
            </td>
          </tr>
        @endforeach
      </table>
    </div>
  </div>
@endsection
