@extends('layout.app')
@section('content')
  <div class="row">
    <div class="col">
      @if ($errors->any())
        @foreach ($errors->all() as $err)
          <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
      @endif
      <form action="{{ route('lectures.store') }}" class="mb-3" method="post">
        @csrf
        <div class="col">
          <label for="">Lecture ID</label>
          <input type="text" name="lecture_id" placeholder="Lecture ID" required class="form-control"
            value="{{ old('lecture_id') }}">
          <label for="">Name</label>
          <input type="text" name="lecture_name" placeholder="Name" required class="form-control"
            value="{{ old('lecture_name') }}">
          <label for="">Email</label>
          <input type="email" name="email" placeholder="Email" required class="form-control"
            value="{{ old('email') }}">
          <label for="">Contact</label>
          <input type="text" name="contact" placeholder="Contact" required class="form-control"
            value="{{ old('contact') }}">
          <label for="">Address</label>
          <input type="text" name="address" placeholder="Address" required class="form-control"
            value="{{ old('address') }}">
        </div>
        <div class="col mt-3">
          <button class="btn btn-primary">Add Lecture</button>
          <a href="{{ route('lectures.index') }}" class="btn btn-success">Back</a>
        </div>
      </form>
    </div>
  </div>
@endsection
