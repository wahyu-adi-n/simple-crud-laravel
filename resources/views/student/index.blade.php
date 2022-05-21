@extends('app')
@section('content')
  <div class="row">
    <div class="col-md-4">
      <h3 class="btn btn-success">Add Student</h3>
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
            <td>Edit | Delete</td>
          </tr>
        @endforeach
      </table>
    </div>
  </div>
@endsection
