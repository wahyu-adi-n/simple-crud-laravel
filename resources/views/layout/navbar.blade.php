  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">Academica</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('lectures.index') }}">Lectures</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('students.index') }}">Students</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('courses.index') }}">Courses</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" href="{{ route('about.index') }}">About</a>
          </li> --}}
        </ul>
      </div>
    </div>
  </nav>
