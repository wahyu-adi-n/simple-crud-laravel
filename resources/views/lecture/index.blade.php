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
          <a href="{{ route('lectures.create') }}" class="btn btn-primary">Add Lectures</a>
        </div>
      </form>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col-md-12">
      <table class="table table-striped table-responsive">
        <thead>
          <th>#</th>
          <th>Lecture ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Contact</th>
          <th>Address</th>
          <th>Action</th>
        </thead>
        <?php $no = 1; ?>
        @foreach ($lectures as $lecture)
          <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $lecture->lecture_id }}</td>
            <td>{{ $lecture->lecture_name }}</td>
            <td>{{ $lecture->email }}</td>
            <td>{{ $lecture->contact }}</td>
            <td>{{ $lecture->address }}</td>
            <td>
              <a href="{{ route('lectures.edit', $lecture) }}" class="btn btn-warning btn-sm">Edit</a>
              <form method="POST" action="{{ route('lectures.destroy', $lecture) }}"
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
