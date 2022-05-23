@extends('layout.app')
@section('content')
  <div class="row">
    <div class="col">
      @if ($errors->any())
        @foreach ($errors->all() as $err)
          <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
      @endif
      <form action="{{ route('students.update', $student) }}" class="mb-3" method="post">
        @csrf
        @method('PUT')
        <div class="col">
          <label for="">ID</label>
          <input type="text" name="student_id" placeholder="Student ID" required class="form-control"
            value="{{ old('id', $student) }}" readonly>
          <label for="">Student ID</label>
          <input type="text" name="student_id" placeholder="Student ID" required class="form-control"
            value="{{ old('student_id', $student) }}" readonly>
          <label for="">Name</label>
          <input type="text" name="student_name" placeholder="Name" required class="form-control"
            value="{{ old('student_name', $student) }}">
          <label for="">Email</label>
          <input type="email" name="email" placeholder="Email" required class="form-control"
            value="{{ old('email', $student) }}">
          <label for="">Contact</label>
          <input type="text" name="contact" placeholder="Contact" required class="form-control"
            value="{{ old('contact', $student) }}">
          <label for="">Address</label>
          <input type="text" name="address" placeholder="Address" required class="form-control"
            value="{{ old('address', $student) }}">
        </div>
        <div class="col mt-3">
          <button class="btn btn-primary">Edit Student</button>
          <a href="{{ route('students.index') }}" class="btn btn-success">Back</a>
        </div>
      </form>
    </div>
  </div>
@endsection
