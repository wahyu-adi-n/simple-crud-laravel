@extends('app')
@section('content')
  <div class="row">
    <div class="col">
      @if ($errors->any())
        @foreach ($errors->all() as $err)
          <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
      @endif
      <form action="{{ route('students.update', $students) }}" method="POST" class="mb-3">
        @csrf
        @method('PUT')
        <div class="col">
          <label for="">ID</label>
          <input type="text" name="student_id" placeholder="Student ID" required class="form-control"
            value="{{ old('id', $students) }}" readonly>
          <label for="">Student ID</label>
          <input type="text" name="student_id" placeholder="Student ID" required class="form-control"
            value="{{ old('student_id', $students) }}">
          <label for="">Name</label>
          <input type="text" name="student_name" placeholder="Name" required class="form-control"
            value="{{ old('student_name', $students) }}">
          <label for="">Email</label>
          <input type="text" name="email" placeholder="Email" required class="form-control"
            value="{{ old('email', $students) }}">
          <label for="">Contact</label>
          <input type="text" name="contact" placeholder="Contact" required class="form-control"
            value="{{ old('contact', $students) }}">
          <label for="">Address</label>
          <input type="text" name="address" placeholder="Address" required class="form-control"
            value="{{ old('address', $students) }}">
        </div>
        <div class="col mt-3">
          <button class="btn btn-primary">Edit Student</button>
          <a href="{{ route('students.index') }}" class="btn btn-success">Back</a>
        </div>
      </form>
    </div>
  </div>
@endsection
